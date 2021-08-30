<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UnitRequest;
use Illuminate\Database\QueryException;

class UnitController extends Controller
{
    public function index()
    {
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        $units = $unitRepository->lists();

        return response()->json([
            'success' => $units->isEmpty() ? false : true,
            'data' => $units
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        $data = $unitRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(UnitRequest $request)
    {
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        try {
            $id = $unitRepository->create($request->validated());

            return response()->json([
                'unit_id' => $id,
                'success' => true,
                'message' => 'An unit is created successfully',
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
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        $unit = $unitRepository->getDetails($id, true);

        return response()->json([
            'success' => $unit ? true : false,
            'data' => $unit ? $unit : null,
        ],$unit ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(UnitRequest $request, $id)
    {
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        try {
            $unitRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The unit information is updated successfully',
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
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        if(!$unitRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such unit information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $unitRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The unit information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');

        return $unitRepository->getDetails($id);
    }
}
