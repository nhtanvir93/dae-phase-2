<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events\AppPaymentCompleted;

class PaymentController extends Controller
{
    private function getTransactionPaidFor($appPayable, $vatPayable, $serviceChargePayable) {
        $paidFors = config('app_constants.transaction_paid_for');

        if($appPayable > 0 && $vatPayable > 0 && $serviceChargePayable > 0) {
            return $paidFors['APPLICATION_VAT_SERVICE_FEE'];
        } elseif ($appPayable == 0 && $vatPayable > 0 && $serviceChargePayable > 0) {
            return $paidFors['VAT_SERVICE_FEE'];
        } elseif ($appPayable > 0 && $vatPayable == 0 && $serviceChargePayable > 0) {
            return $paidFors['APPLICATION_SERVICE_FEE'];
        } elseif ($appPayable == 0 && $vatPayable == 0 && $serviceChargePayable > 0) {
            return $paidFors['SERVICE_FEE'];
        }
    }

    public function payForApplication($applicationId)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $transactionService = resolve('App\Services\TransactionService');

        try {
            $echallanDetails = [];
            $paidFors = config('app_constants.transaction_paid_for');

            $application = $applicationRepository->getDetails($applicationId);
            $chalanTypes = config('app_constants.chalan_types');

            if($application->app_payable > 0 &&  $application->vat_payable > 0) {
                $echallanDetails = [
                    [
                        'type' => $chalanTypes['APPLICATION_FEE'],
                        'amount' => $application->app_payable
                    ],
                    [
                        'type' => $chalanTypes['VAT'],
                        'amount' => $application->vat_payable
                    ]
                ];
            }

            $paidFor = $this->getTransactionPaidFor($application->app_payable, $application->vat_payable, $application->service_charge_payable);

            $merchantInfo = $paidFor == $paidFors['SERVICE_FEE'] ?
                config('app_constants.online_payment.ekpay.serviceMerInfo') : config('app_constants.online_payment.ekpay.merInfo');

            $amount = $paidFor == $paidFors['SERVICE_FEE'] ?
                1 : $application->app_payable + $application->vat_payable;

                $response = $transactionService->ekpayInit(
                $application->applicant_id,
                $amount,
                config('app_constants.transaction_types.APPLICATION'),
                $echallanDetails,
                $paidFor,
                $merchantInfo,
                $applicationId
            );

            return response()->json($response,Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function ipn(Request $request)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $paymentRepository = resolve('App\Repositories\Interfaces\PaymentRepositoryInterface');
        $transactionRepository = resolve('App\Repositories\Interfaces\TransactionRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $echallanService = resolve('App\Services\EChallanService');

        $ipnResponse = $request->all();

        $ekpayTransactionId = isset($ipnResponse['trnx_info']['mer_trnx_id']) ?
            $ipnResponse['trnx_info']['mer_trnx_id'] : null;

        $paidFors = config('app_constants.transaction_paid_for');

        try {
            DB::transaction(function () use ($transactionRepository, $paymentRepository, $userRepository,
                $applicationRepository, $request, $ipnResponse, $ekpayTransactionId, $echallanService, $paidFors) {

                $amount = isset($ipnResponse['trnx_info']['trnx_amt']) ?
                    $ipnResponse['trnx_info']['trnx_amt'] : null;

                $messageCode = isset($ipnResponse['msg_code']) ?
                    $ipnResponse['msg_code'] : null;

                $message = isset($ipnResponse['msg_det']) ?
                    $ipnResponse['msg_det'] : null;

                $transaction = $transactionRepository->getDetailsByEkpayTransactionId($ekpayTransactionId);

                $application = isset($transaction->application_id) ?
                    $applicationRepository->getDetails($transaction->application_id) : null;

                $user = $userRepository->getDetails($transaction->user_id);
                Auth::login($user);

                $transactionRepository->update([
                    'ipn_response' => $ipnResponse,
                    'ipn_code' => $messageCode,
                    'ipn_message' => $message
                ], $transaction->id);

                if($messageCode == config('app_constants.online_payment.ekpay.ipn_success_code')) {
                    $paymentRepository->create([
                        'application_id' => $transaction->application_id,
                        'transaction_id' => $transaction->id,
                        'amount' => $amount,
                        'type' => $transaction->type,
                    ]);

                    if($application) {
                        $applicationRepository->update([
                            'paid_payment' =>  $application->total_fee,
                            'app_payable' => 0,
                            'vat_payable' => 0,
                            'service_charge_payable' => 0,
                            'current_status' => config('app_constants.app_statuses.PAID'),
                            'is_paid' => 1
                        ], $application->id);

                        AppPaymentCompleted::dispatch($application->id);
                    }

                    if(isset($application) && $transaction->paid_for != $paidFors['SERVICE_FEE']
                        && $application->is_challan_done === 0) {
                        $echallanService->createEChallan($transaction->id, 'Application Payment');
                    }
                }
            });


            return response()->json([
                'success' => true,
                'message' => 'IPN is stored against ekpay_transaction_id (' . $ekpayTransactionId . ') successfully'
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function searchOrCreateEChallan($transactionId) {
        $transactionRepository = resolve('App\Repositories\Interfaces\TransactionRepositoryInterface');
        $echallanService = resolve('App\Services\EChallanService');

        $transaction = $transactionRepository->getDetails($transactionId, true);

        if(!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'No valid transaction is found'
            ],Response::HTTP_OK);
        }

        if(isset($transaction->echallan)  && $transaction->echallan->challan_status_code
            == config('app_constants.online_payment.echallan.echallan_success_code')) {
            return response()->json([
                'success' => false,
                'message' => 'EChallan is already created'
            ],Response::HTTP_OK);
        }

        try {
            return DB::transaction(function () use ($transactionRepository, $echallanService, $transaction) {
                if(isset($transaction->echallan) && $transaction->echallan->challan_status_code
                    != config('app_constants.online_payment.echallan.echallan_success_code')) {
                    $result = $echallanService->searchEChallan($transaction->echallan->id);
                    $message = 'Echallan search is done successfully';
                } else {
                    $result = $echallanService->createEChallan($transaction->id, 'Application Payment');
                    $message = 'Echallan create is done successfully';
                }

                if(isset($result['success']) && !$result['success']) {
                    return response()->json($result,Response::HTTP_OK);
                }

                return response()->json([
                    'success' => true,
                    'message' => $message
                ],Response::HTTP_OK);
            });
        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage()
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
