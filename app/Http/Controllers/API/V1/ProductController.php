<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProductRequest;
use Illuminate\Database\QueryException;

class ProductController extends Controller
{
    public function index()
    {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        $products = $productRepository->lists();

        return response()->json([
            'success' => $products->isEmpty() ? false : true,
            'data' => $products
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        $data = $productRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(ProductRequest $request)
    {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        try {
            $id = $productRepository->create($request->validated());

            return response()->json([
                'product_id' => $id,
                'success' => true,
                'message' => 'A product is created successfully',
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
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        $product = $productRepository->getDetails($id, true);

        return response()->json([
            'success' => $product ? true : false,
            'data' => $product ? $product : null,
        ],$product ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function getProductsOnProductType($productTypeId)
    {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        $products = $productRepository->getProductsOnProductType($productTypeId);

        return response()->json([
            'success' => $products->isEmpty() ? false : true,
            'data' => $products,
        ],Response::HTTP_OK);
    }

    public function update(ProductRequest $request, $id)
    {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        try {
            $productRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The product information is updated successfully',
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
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        if(!$productRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such product information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $productRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The product information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        return $productRepository->getDetails($id);
    }

    public function activate($id) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        try {
            $productRepository->update(['is_active' => 1], $id);

            return response()->json([
                'success' => true,
                'message' => 'The product is activated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deactivate($id) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        try {
            $productRepository->update(['is_active' => 0], $id);

            return response()->json([
                'success' => true,
                'message' => 'The product is deactivated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function restrict($id) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        try {
            $productRepository->update(['is_restricted' => 1], $id);

            return response()->json([
                'success' => true,
                'message' => 'The product is restricted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function release($id) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        try {
            $productRepository->update(['is_restricted' => 0], $id);

            return response()->json([
                'success' => true,
                'message' => 'The product is released successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
