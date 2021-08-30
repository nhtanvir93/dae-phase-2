<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ProductTypeRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\ProductTypeRequest;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        $productTypes = $productTypeRepository->lists();

        return response()->json([
            'success' => $productTypes->isEmpty() ? false : true,
            'data' => $productTypes
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        $data = $productTypeRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(ProductTypeRequest $request)
    {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        try {
            $id = $productTypeRepository->create($request->validated());

            return response()->json([
                'product_type_id' => $id,
                'success' => true,
                'message' => 'A product type is created successfully',
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
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        $productType = $productTypeRepository->getDetails($id, true);

        return response()->json([
            'success' => $productType ? true : false,
            'data' => $productType ? $productType : null,
        ],$productType ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(ProductTypeRequest $request, $id)
    {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        try {
            $productTypeRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The product type information is updated successfully',
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
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        if(!$productTypeRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such product type information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $productTypeRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The product type information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        return $productTypeRepository->getDetails($id);
    }

    public function getAppTypeWiseProductType($appTypeId) {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');

        $productTypes = $productTypeRepository->getAppTypeWiseProductType($appTypeId);

        return response()->json([
            'success' => $productTypes->isEmpty() ? false : true,
            'data' => $productTypes
        ],Response::HTTP_OK);
    }
}
