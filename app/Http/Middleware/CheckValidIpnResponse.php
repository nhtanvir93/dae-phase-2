<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckValidIpnResponse
{
    const LOG_FILE_NAME = 'ipn_response';
    const IS_DAILY_LOG = 1;

    public function handle($request, Closure $next)
    {
        $transactionRepository = resolve('App\Repositories\Interfaces\TransactionRepositoryInterface');
        $logService = resolve('App\Services\LogService');

        $ipnResponse = $request->all();
        $ipnResponseJson = json_encode($ipnResponse,JSON_PRETTY_PRINT);

        $message = "IPN received at " . now()->format(config('app_constants.datetime_format')) . "\n\n";

        $error = "Errors:\n\n";
        $errorCount = 0;

        if(!isset($ipnResponse['trnx_info']['mer_trnx_id'])) {
            $errorCount++;
            $error .= "$errorCount. Ekpay transaction id is missing\n";

            $message .= "IPN response :\n\n$ipnResponseJson\n\n$error\n\n";

            $logService->writeLog(self::LOG_FILE_NAME, $message, self::IS_DAILY_LOG);

            return response()->json([
                'success' => false,
                'message' => 'Ekpay transaction id is missing'
            ],Response::HTTP_OK);
        }

        $ekpayTransactionId = isset($ipnResponse['trnx_info']['mer_trnx_id']) ?
            $ipnResponse['trnx_info']['mer_trnx_id'] : null;

        $amount = isset($ipnResponse['trnx_info']['trnx_amt']) ?
            $ipnResponse['trnx_info']['trnx_amt'] : null;

        $messageCode = isset($ipnResponse['msg_code']) ?
            $ipnResponse['msg_code'] : null;

        if(!$ekpayTransactionId) {
            $errorCount++;
            $error .= "$errorCount. Ekpay transaction id is not found\n";
        }

        if(!$amount) {
            $errorCount++;
            $error .= "$errorCount. Transaction amount is not found\n";
        }

        if(!$messageCode) {
            $errorCount++;
            $error .= "$errorCount. Message code is not found\n";
        }

        $transaction = $transactionRepository->getDetailsByEkpayTransactionId($ekpayTransactionId);

        if(!$transaction) {
            $errorCount++;
            $error .= "$errorCount. No transaction found\n";

            $message .= "IPN response :\n\n$ipnResponseJson\n\n$error\n\n";

            $logService->writeLog(self::LOG_FILE_NAME, $message, self::IS_DAILY_LOG);

            return response()->json([
                'success' => false,
                'message' => 'No transaction found'
            ],Response::HTTP_OK);
        }

        $message .= "IPN response :\n\n$ipnResponseJson\n\n$error\n\n";

        $logService->writeLog(self::LOG_FILE_NAME, $message, self::IS_DAILY_LOG);

        return $next($request);
    }
}
