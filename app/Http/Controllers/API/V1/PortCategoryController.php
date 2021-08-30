<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\PortCategoryRequest;
use Illuminate\Database\QueryException;

class PortCategoryController extends Controller
{
    public function index()
    {
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        $portCatergories = $portCategoryRepository->lists();

        return response()->json([
            'success' => $portCatergories->isEmpty() ? false : true,
            'data' => $portCatergories
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        $data = $portCategoryRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(PortCategoryRequest $request)
    {
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        try {
            $id = $portCategoryRepository->create($request->validated());

            return response()->json([
                'port_category_id' => $id,
                'success' => true,
                'message' => 'A port category is created successfully',
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
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        $portCatergory = $portCategoryRepository->getDetails($id, true);

        return response()->json([
            'success' => $portCatergory ? true : false,
            'data' => $portCatergory ? $portCatergory : null,
        ],$portCatergory ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(PortCategoryRequest $request, $id)
    {
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        try {
            $portCategoryRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The port category information is updated successfully',
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
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        if(!$portCategoryRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such port category information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $portCategoryRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The port category information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');

        return $portCategoryRepository->getDetails($id);
    }
}
