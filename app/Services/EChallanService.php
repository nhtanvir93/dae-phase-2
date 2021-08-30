<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Carbon\Carbon;
use Illuminate\Support\Str;

class EChallanService
{
    public function createEChallan($transactionId, $purpose) {
        $transactionRepository = resolve('App\Repositories\Interfaces\TransactionRepositoryInterface');
        $profileRepository = resolve('App\Repositories\Interfaces\ProfileRepositoryInterface');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $echallanRepository = resolve('App\Repositories\Interfaces\EChallanRepositoryInterface');

        $transaction = $transactionRepository->getDetails($transactionId);

        $profile = $profileRepository->getDetails($transaction->user_id);

        $authPayload = $this->getAuthPayload();

        $authResponse = $this->getAuthResponse($authPayload);

        $requestId = $this->getRequestId();

        $challanTransactionId = $echallanRepository->create([
            'request_id' => $requestId,
            'transaction_date' => $this->getTransactionDate($transaction),
            'ekpay_transaction_id' => $transaction->ekpay_transaction_id,
            'auth_payload' => $authPayload,
            'auth_response' => $authResponse,
            'auth_status_code' => isset($authResponse['response']['msg_code']) ?
                $authResponse['response']['msg_code'] : null
        ]);

        if(!$authResponse['success']) {
            return $authResponse;
        }

        $authResponse = $authResponse['response'];

        $challanPayload = $this->getEChallanPayload($requestId, $transaction, $profile, $purpose);

        $challanResponse = $this->getChallanResponse($challanPayload, $authResponse['jwt_token']);

        $echallanRepository->update([
            'challan_payload' => $challanPayload,
            'challan_response' => $challanResponse,
            'challan_status_code' => isset($challanResponse['response']['STATUS']) ?
                $challanResponse['response']['STATUS'] : null
        ], $challanTransactionId);

        if($challanResponse['success'] && isset($transaction->application_id)) {
            $applicationRepository->update(['is_challan_done' => 1], $transaction->application_id);
        }

        return $challanResponse;
    }

    private function getAuthPayload() {
        $echallanConfig = config('app_constants.online_payment.echallan');

        return [
            'username' => $echallanConfig['username'],
            'key' => $echallanConfig['key']
        ];
    }

    public function getAuthResponse($payload) {
        $echallanConfig = config('app_constants.online_payment.echallan');

        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])->post($echallanConfig['authUrl'], $payload);
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
            'success' => isset($response['jwt_token']) ? true : false,
            'message' => isset($response['msg_details']) ? $response['msg_details'] : null,
            'response' => $response
        ];
    }

    public function getChallanResponse($payload, $jwtToken) {
        $echallanConfig = config('app_constants.online_payment.echallan');

        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $jwtToken
            ])->post($echallanConfig['createUrl'], $payload);
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

        $status = isset($response['STATUS']) ? $response['STATUS'] : null;

        return [
            'success' =>
                $status == config('app_constants.online_payment.echallan.echallan_success_code') ? true : false,
            'message' => isset($response['MESSAGE']) ? $response['MESSAGE'] : null,
            'response' => $response
        ];
    }

    public function getEChallanPayload($requestId, $transaction, $applicant, $purpose) {
        $echallanConfig = config('app_constants.online_payment.echallan');
        $challanTypes = config('app_constants.chalan_types');

        $ekpayTransactionId = $transaction->ekpay_transaction_id;

        $payload = [
            "REQUEST_ID" => $requestId,
            "REF_NO" => $this->getRefNo(),
            "TRAN_DATE" => $this->getTransactionDate($transaction),
            "APPLICANT_NAME" => $applicant->fullname,
            "REFERENCE_NAME" => $applicant->fullname,
            "MOBILE_NO" => $applicant->user->mobile,
            "ADDRESS" => $applicant->presentAddress->description,
            "PURPOSE" => $purpose,
            "TRANAMOUNT" => $transaction->transaction_amount,
            "PAY_TRXID" => $ekpayTransactionId
        ];

        if(isset($transaction->echallan_details)) {
            $echallanTypes = array_column($transaction->echallan_details,'type');
            $slNo = 1;

            if(array_search($challanTypes['APPLICATION_FEE'], $echallanTypes) >= 0) {
                $key = array_search($challanTypes['APPLICATION_FEE'], $echallanTypes);
                $payload['CREDIT_INFO'][] = [
                    "SLNO" => $slNo++,
                    "CREDIT_ACCOUNT" => $echallanConfig['appFeeCreditaccount'],
                    "AMOUNT" => $transaction->echallan_details[$key]->amount
                ];
            }

            if(array_search($challanTypes['VAT'], $echallanTypes) >= 0) {
                $key = array_search($challanTypes['VAT'], $echallanTypes);
                $payload['CREDIT_INFO'][] = [
                    "SLNO" => $slNo++,
                    "CREDIT_ACCOUNT" => isset($applicant->user->areaVatCode->vat_code) ?
                        $applicant->user->areaVatCode->vat_code : $echallanConfig['vatFeeCreditaccount'],
                    "AMOUNT" => $transaction->echallan_details[$key]->amount
                ];
            }
        } else {
            $payload['CREDIT_INFO'] = [
                [
                    "SLNO" => 1,
                    "CREDIT_ACCOUNT" => $echallanConfig['appFeeCreditaccount'],
                    "AMOUNT" => $transaction->transaction_amount
                ]
            ];
        }

        return $payload;
    }

    private function getRequestId() {
        return 'RI-' . Str::uuid();
    }

    private function getRefNo() {
        return 'RN-' . Str::uuid();
    }

    private function getTransactionDate($transaction) {
        return Carbon::parse($transaction->getRawOriginal('updated_at'))->format('Y-m-d');
    }

    public function searchEChallan($echallanId) {
        $echallanRepository = resolve('App\Repositories\Interfaces\EChallanRepositoryInterface');

        $echallan = $echallanRepository->getDetailsWithoutRelations($echallanId);

        $authPayload = $this->getAuthPayload();

        $authResponse = $this->getAuthResponse($authPayload);

        if(!$authResponse['success']) {
            unset($authResponse['response']);
            return $authResponse;
        }

        $authResponse = $authResponse['response'];

        $searchChallanPayload = [
            'REQUEST_ID' => $echallan->request_id,
            'TRAN_DATE' => $echallan->transaction_date
        ];

        $searchChallanResponse = $this->getSearchChallanResponse($searchChallanPayload, $authResponse['jwt_token']);

        if(!$searchChallanResponse['success']) {
            unset($searchChallanResponse['response']);
            return $searchChallanResponse;
        }

        $echallanRepository->update([
            'challan_response' => $searchChallanResponse,
            'challan_status_code' => isset($searchChallanResponse['response']['STATUS']) ?
                $searchChallanResponse['response']['STATUS'] : null
        ], $echallanId);
    }

    public function getSearchChallanResponse($payload, $jwtToken) {
        $echallanConfig = config('app_constants.online_payment.echallan');

        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $jwtToken
            ])->get($echallanConfig['searchUrl'], $payload);
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

        $status = isset($response['STATUS']) ? $response['STATUS'] : null;

        return [
            'success' =>
                $status == config('app_constants.online_payment.echallan.echallan_success_code') ? true : false,
            'message' => isset($response['MESSAGE']) ? $response['MESSAGE'] : null,
            'response' => $response
        ];
    }
}