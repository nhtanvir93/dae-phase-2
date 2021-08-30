<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdditionalConditionSuggestionsByProductIdRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\AdditionalConditionSuggestionRequest;
use Illuminate\Database\QueryException;

class AdditionalConditionSuggestionController extends Controller
{
    public function paginatedIndex()
    {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        $data = $additionalConditionSuggestionRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(AdditionalConditionSuggestionRequest $request)
    {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        try {
            $id = $additionalConditionSuggestionRepository->create($request->validated());

            return response()->json([
                'additional_condition_suggestion_id' => $id,
                'success' => true,
                'message' => 'An additional condition suggestion is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show($id)
    {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        $additionalConditionSuggestion = $additionalConditionSuggestionRepository->getDetails($id, true);

        return response()->json([
            'success' => $additionalConditionSuggestion ? true : false,
            'data' => $additionalConditionSuggestion ? $additionalConditionSuggestion : null,
        ],$additionalConditionSuggestion ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(AdditionalConditionSuggestionRequest $request, $id)
    {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        try {
            $additionalConditionSuggestionRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The additional condition suggestion information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        if(!$additionalConditionSuggestionRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such additional condition suggestion information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $additionalConditionSuggestionRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The additional condition suggestion information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAllByProductIds(AdditionalConditionSuggestionsByProductIdRequest $request) {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        $validatedData = $request->validated();
        $additionalConditionSuggestiones =
            $additionalConditionSuggestionRepository->getAllByProductIds($validatedData['app_type_id'], $validatedData['product_ids']);

        return response()->json([
            'success' => $additionalConditionSuggestiones->isEmpty() ? false : true,
            'data' => $additionalConditionSuggestiones
        ],Response::HTTP_OK);
    }

    public function getAllByAppId($applicationId) {
        $additionalConditionSuggestionService = resolve('App\Services\AdditionalConditionSuggestionService');

        $additionalConditionSuggestiones =
            $additionalConditionSuggestionService->getAppProductWiseAdditionalCondtions($applicationId);

        return response()->json([
            'success' => $additionalConditionSuggestiones->isEmpty() ? false : true,
            'data' => $additionalConditionSuggestiones
        ],Response::HTTP_OK);
    }

    public function isEditable($id) {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        return $additionalConditionSuggestionRepository->getDetails($id);
    }
}
