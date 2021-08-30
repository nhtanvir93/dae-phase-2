<?php
namespace App\Repositories;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use App\Repositories\Interfaces\TransactionRepositoryInterface;

class TransactionRepository extends BaseRepository implements TransactionRepositoryInterface
{
    public function __construct(Transaction $model)
    {
        parent::__construct($model);
        $this->redirectUrl = config('app_constants.online_payment.ekpay.redirectUrl');
    }

    public function init($appId)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $transactionService = resolve('App\Services\TransactionService');

        $app = null;
        $authUserId = auth()->user()->id;
        $app = $applicationRepository->getDetails($appId, true);

        if ($app && $app->applicant) {
            $applicantId = optional($app->applicant)->user_id;

            if ($applicantId == $authUserId || ($app->cnf_ip_assignment_id && $app->cnf_user_id == $authUserId)) {
                if ($app->is_paid) {
                    return ['status' => false, 'message' => 'Already Paid.'];
                } else {
                    $result = $transactionService->ekpayAuthentication($app);

                    if ($result['data']) {
                        $this->model->create($result['data']);
                    }

                    return [
                        'status' => $result['status'],
                        'redirect_url' => $result['redirect_url'],
                        'message' => $result['message']
                    ];
                }
            }
        }

        return ['status' => false, 'message' => 'Invalid application.'];
    }

    public function ipnResponse($inputs)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $paymentRepository = resolve('App\Repositories\Interfaces\PaymentRepositoryInterface');
        $transactionService = resolve('App\Services\TransactionService');

        try {
            $status = false;
            $application = null;

            if ($inputs) {
                DB::transaction(function () use ($inputs, &$status, &$application,
                    $applicationRepository, $transactionService, $paymentRepository) {
                    $result = $transactionService->prepareIpnResponse($inputs);
                    $merTransId = $result['merTransId'];
                    $transactionData = $result['data'];

                    $transaction = $this->getDetailsWithTransactionId($merTransId);

                    parent::update($transactionData, $transaction->id);

                    $appId = $transactionService->getApplicationIdFromTransaction($transaction);

                    $title = "Payment Type: 'APPLICATION'\nID:".$appId."\nDate: ".date('Y-m-d h:i:s A')."\nIPN Response: \n";
                    $transactionService->writeLog($inputs, $title);

                    if ($result['status']) {
                        $application = $applicationRepository->getDetails($appId, false);
                        $applicationData = $transactionService->prepareApplicationData($inputs, $application);
                        $paymentData = $transactionService->preparePaymentData($applicationData, $application, $transaction->id);

                        $transactionService->manuallyloggedInApplicant($application['applicant_id']);

                        $applicationRepository->update($applicationData, $appId);
                        $paymentRepository->create($paymentData);
                    }

                    $status = $result['status'];
                });
            }

            return ['status' => $status, 'application' => $application];
        } catch (\Exception $e) {
            $transactionService->writeLog($e->getMessage(), 'IPN Response Exception');
            return ['status' => false, 'message' => $e->getMessage()];
        }
    }

    public function getDetailsWithTransactionId($id, $with = false)
    {
        return $this->model->where('ekpay_transaction_id', $id)->first();
    }

    public function getDetails($id, $with = false)
    {
        // 
    }
}