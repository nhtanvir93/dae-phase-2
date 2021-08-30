<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class SystemConfigurationController extends Controller
{
    public function isOnlinePaymentAvailable() {
        $isOnlinePaymentAvailable = config('app_constants.payment_options.is_service_charge_required');

        return response()->json([
            'success' => true,
            'data' => [
                'is_online_payment_available' => $isOnlinePaymentAvailable
            ]
        ],Response::HTTP_OK);
    }
}
