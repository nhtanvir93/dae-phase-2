<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StageRequest;
use Illuminate\Database\QueryException;

class StageController extends Controller
{
    public function index()
    {
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        $stages = $stageRepository->lists();

        return response()->json([
            'success' => $stages->isEmpty() ? false : true,
            'data' => $stages
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        $data = $stageRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(StageRequest $request)
    {
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        try {
            $id = $stageRepository->create($request->validated());

            return response()->json([
                'stage_id' => $id,
                'success' => true,
                'message' => 'A stage is created successfully',
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
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        $stage = $stageRepository->getDetails($id, true);

        return response()->json([
            'success' => $stage ? true : false,
            'data' => $stage ? $stage : null,
        ],$stage ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(StageRequest $request, $id)
    {
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        try {
            $stageRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The stage information is updated successfully',
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
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        if(!$stageRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such stage information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $stageRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The stage information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');

        return $stageRepository->getDetails($id);
    }
}
