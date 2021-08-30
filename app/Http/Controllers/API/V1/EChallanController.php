<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class EChallanController extends Controller
{
    public function create($appId)
    {
        $eChallanRepository = resolve('App\Repositories\Interfaces\EChallanRepositoryInterface');

        try {
            $result = $eChallanRepository->challan($appId);

            return response()->json([
                'success' => $result['status'],
                'message' => $result['message']
            ], Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
