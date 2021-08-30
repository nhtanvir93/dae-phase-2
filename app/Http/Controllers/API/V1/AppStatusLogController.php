<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppStatusLogController extends Controller
{
    public function getApplicationHistory($applicationId) {
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');

        $appStatusLogs = $appStatusLogRepository->getApplicationHistory($applicationId);

        return response()->json([
            'success' => $appStatusLogs->isEmpty() ? false : true,
            'data' => $appStatusLogs,
        ],Response::HTTP_OK);
    }

    public function getLastRecheckingComment($applicationId) {
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');

        $appStatusLog = $appStatusLogRepository->getLastRecheckingComment($applicationId);

        return response()->json([
            'success' => $appStatusLog ? true : false,
            'data' => $appStatusLog,
        ],Response::HTTP_OK);
    }
}
