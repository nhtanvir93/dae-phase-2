<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class SmsEmailService
{
    public function sendSms($mobile, $message) {
        $smsOptions = config('app_constants.sms_options');

        if(strlen($message) > $smsOptions['max_characters']) {
            return [
                'success' => false,
                'message' => 'Exceeded max characters : ' . $smsOptions['max_characters']
            ];
        }

        $mobile = '88' . $mobile;

        $smsApiUrl = str_replace('#msisdn#', $mobile, $smsOptions['api_url']);
        $smsApiUrl = str_replace('#message#', urldecode($message), $smsApiUrl);

        try {
            $response = Http::get($smsApiUrl);
        } catch(ConnectionException $exception) {
            return [
                'success' => false,
                'text' => $message,
                'message' => $exception->getMessage()
            ];
        } catch (\InvalidArgumentException $exception) {
            return [
                'success' => false,
                'text' => $message,
                'message' => $exception->getMessage()
            ];
        }

        if($response->failed()) {
            return [
                'success' => false,
                'text' => $message,
                'message' => $response->clientError() ? 'Client error occured' :
                    (
                        $response->serverError() ? 'Servier error occured' : 'Error occured'
                    )
            ];
        }

        $response = $response->json();
        $request = [
            'request_type' => 'GET',
            'url' => $smsApiUrl
        ];

        return [
            'success' => isset($response['is_success']) && $response['is_success'] == 1 ? true : false,
            'text' => $message,
            'request' => $request,
            'response' => $response
        ];
    }
}