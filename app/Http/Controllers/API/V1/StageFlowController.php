<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class StageFlowController extends Controller
{
    public function getCurrentStageDetails($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        try {
            $stageDetails = $applicationRepository->getCurrentStageDetails($applicationId);

            return response()->json([
                'success' => $stageDetails ? true : false,
                'data' => $stageDetails,
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
