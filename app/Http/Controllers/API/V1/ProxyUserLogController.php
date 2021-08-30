<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProxyUserLogRequest;
use Illuminate\Database\QueryException;

class ProxyUserLogController extends Controller
{
    public function setUser(ProxyUserLogRequest $request)
    {
        $proxyUserLogRepository = resolve('App\Repositories\Interfaces\ProxyUserLogRepositoryInterface');

        try {
            $id = $proxyUserLogRepository->setUser($request->validated());

            return response()->json([
                'proxy_user_log_id' => $id,
                'success' => true,
                'message' => 'A proxy user log is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function unsetUser($userId) {
        $proxyUserLogRepository = resolve('App\Repositories\Interfaces\ProxyUserLogRepositoryInterface');

        if(!$proxyUserLogRepository->hasProxy($userId)) {
            return response()->json([
                'success' => false,
                'message' => 'This user has no proxy user currently',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $proxyUserLogRepository->unsetUser($userId);

            return response()->json([
                'success' => true,
                'message' => 'The proxy user for this user is unset successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getProxyUserLogs($userId) {
        $proxyUserLogRepository = resolve('App\Repositories\Interfaces\ProxyUserLogRepositoryInterface');

        $proxyUserLogs = $proxyUserLogRepository->getProxyUserLogs($userId);

        return response()->json([
            'success' => $proxyUserLogs->isEmpty() ? false : true,
            'data' => $proxyUserLogs
        ],Response::HTTP_OK);
    }
}
