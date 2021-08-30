<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $productCategoryRepository = resolve('App\Repositories\Interfaces\ProductCategoryRepositoryInterface');

        $productCategories = $productCategoryRepository->lists();

        return response()->json([
            'success' => $productCategories->isEmpty() ? false : true,
            'data' => $productCategories
        ],Response::HTTP_OK);
    }
}
