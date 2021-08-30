<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class TransactionService
{
    const ORDER_LENGTH = 10;

    public function ekpayInit($userId, $amount, $type, $echallanDetails = [], $paidFor, $merchantInfo, $applicationId = 0) {
        $profileRepository = resolve('App\Repositories\Interfaces\ProfileRepositoryInterface');
        $transactionRepository = resolve('App\Repositories\Interfaces\TransactionRepositoryInterface');

        $profile = $profileRepository->getDetails($userId);

        $currentOrderNo = $transactionRepository->getCurrentOrderNo();
        $ekpayTransactionId = $this->getCurrentEkpayTransactionId($currentOrderNo);

        $payload = $this->getEkpayPayload($applicationId, $profile, $amount, $currentOrderNo, $ekpayTransactionId, $merchantInfo);

        $initData = [
            'type' => $type,
            'order_no' => $currentOrderNo,
            'ekpay_transaction_id' => $ekpayTransactionId,
            'pi_payload' => $payload,
            'user_id' => $userId,
            'transaction_amount' => $amount,
            'white_list_ip' => config('app_constants.online_payment.ekpay.whiteListIP'),
            'visitor' => $this->clientIpAddress(),
            'ipn_url' => config('app_constants.online_payment.ekpay.ipnUri'),
            'paid_for' => $paidFor
        ];

        if($applicationId > 0) {
            $initData['application_id'] = $applicationId;
        }

        if(!empty($echallanDetails)) {
            $initData['echallan_details'] = $echallanDetails;
        }

        return DB::transaction(function() use ($ekpayTransactionId, $initData, $payload, $transactionRepository) {
            $data = $this->getEkpayInitResponse($payload);

            if(!$data['success']) {
                return [
                    'success' => false,
                    'message' => $data['message']
                ];
            }

            $token = $data['response']['secure_token'];

            $initData['pi_token'] = $token;
            $initData['pi_code'] = $data['response']['msg_code'];
            $initData['pi_message'] = $data['response']['msg_det'];
            $initData['pi_response'] = $data['response'];
            $transactionRepository->create($initData);

            $searchParams = ['#SECURETOKEN#', '#TRANSACTIONID#'];
            $replaceParams = [$token, $ekpayTransactionId];

            return [
                'success' => 'true',
                'data' => [
                    'ekpay_redirect_url' => str_replace($searchParams, $replaceParams,
                        config('app_constants.online_payment.ekpay.redirectUri'))
                ]
            ];
        });
    }

    public function getEkpayPayload($applicationId, $profile, $amount, $currentOrderNo, $ekpayTransactionId, $merchantInfo) {
        $ekpayConfig = config('app_constants.online_payment.ekpay');

        return [
            "mer_info" => [
                "mer_reg_id" => $merchantInfo['mer_reg_id'],
                "mer_pas_key" => $merchantInfo['mer_pas_key']
            ],
            "req_timestamp" => now()->format(config('app_constants.iso_datetime_format')) . ' GMT+6',
            "feed_uri" => [
                "c_uri" =>  str_replace('#APP_ID#', $applicationId, $ekpayConfig['cancelUri']),
                "f_uri" =>  str_replace('#APP_ID#', $applicationId, $ekpayConfig['failedUri']),
                "s_uri" =>  str_replace('#APP_ID#', $applicationId, $ekpayConfig['successUri'])
            ],
            "cust_info" => [
                "cust_id" => $profile->user_id,
                "cust_email" => $profile->user->email,
                "cust_mail_addr" => $profile->presentAddress->description,
                "cust_mobo_no" => $profile->user->mobile,
                "cust_name" => $profile->fullname
            ],
            "trns_info" => [
                "ord_det" => $ekpayConfig['orderDetails'],
                "ord_id" => $currentOrderNo,
                "trnx_id" => $ekpayTransactionId,
                "trnx_amt" => $amount,
                "trnx_currency" => "BDT"
            ],
            "ipn_info" => [
                "ipn_channel" => "1",
                "ipn_email" => $ekpayConfig['ipnEmail'],
                "ipn_uri" => $ekpayConfig['ipnUri']
            ],
            "mac_addr" => $ekpayConfig['whiteListIP']
        ];
    }

    private function getCurrentEkpayTransactionId($currentOrderNo) {
        return
            now()->format('Ymd') . str_pad($currentOrderNo, self::ORDER_LENGTH, '0',STR_PAD_LEFT );
    }

    private function clientIpAddress()
    {
        try{
            return file_get_contents('https://api.ipify.org');
        } catch(\Exception $e) {
            return null;
        }
    }

    public function getEkpayInitResponse($payload) {
        $initUrl = config('app_constants.online_payment.ekpay.initUrl');

        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])->post($initUrl, $payload);
        } catch(ConnectionException $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        } catch (\InvalidArgumentException $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }

        if($response->failed()) {
            return [
                'success' => false,
                'message' => $response->clientError() ? 'Client error occured' :
                    (
                    $response->serverError() ? 'Servier error occured' : 'Error occured'
                    )
            ];
        }

        $response = $response->json();

        return [
            'success' => isset($response['secure_token']) ? true : false,
            'message' => isset($response['msg_det']) ? $response['msg_det'] : (
                isset($response['responseMessage']) ? $response['responseMessage'] : null
            ),
            'response' => $response
        ];
    }
}