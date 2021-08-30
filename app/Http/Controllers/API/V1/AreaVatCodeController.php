<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class AreaVatCodeController extends Controller
{
    public function index()
    {
        $areaVatCodeRepository = resolve('App\Repositories\Interfaces\AreaVatCodeRepositoryInterface');

        $areaVatCodes = $areaVatCodeRepository->lists();

        return response()->json([
            'success' => $areaVatCodes->isEmpty() ? false : true,
            'data' => $areaVatCodes
        ],Response::HTTP_OK);
    }
}
