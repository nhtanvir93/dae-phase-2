<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\AdditionalInfoConditionRequest;
use Illuminate\Database\QueryException;

class AdditionalInfoConditionController extends Controller
{
    public function store(AdditionalInfoConditionRequest $request) {
        $additionalInfoConditionRepository = resolve('App\Repositories\Interfaces\AdditionalInfoConditionRepositoryInterface');

        try {
            $data = $request->validated();

            $additionalInfoConditionRepository->createAll($data['additional_info_conditions'], $data['application_id']);

            return response()->json([
                'success' => true,
                'message' => 'Additional info conditions are created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateUsingApplicationId(AdditionalInfoConditionRequest $request) {
        $additionalInfoConditionRepository = resolve('App\Repositories\Interfaces\AdditionalInfoConditionRepositoryInterface');

        try {
            $data = $request->validated();

            $additionalInfoConditionRepository->updateAll($data['additional_info_conditions'], $data['application_id']);

            return response()->json([
                'success' => true,
                'message' => 'Additional info conditions are updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAllUsingApplicationId($applicationId) {
        $additionalInfoConditionRepository = resolve('App\Repositories\Interfaces\AdditionalInfoConditionRepositoryInterface');

        $additionalConditions = $additionalInfoConditionRepository->getAllUsingApplicationId($applicationId);

        return response()->json([
            'success' => $additionalConditions->isEmpty() ? false : true,
            'data' => $additionalConditions
        ],Response::HTTP_OK);
    }
}
