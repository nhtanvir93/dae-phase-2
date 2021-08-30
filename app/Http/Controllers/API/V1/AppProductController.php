<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class AppProductController extends Controller
{
    public function getAllByAppId($applicationId) {
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');

        $appProducts = $appProductRepository->getAllByAppId($applicationId);

        return response()->json([
            'success' => $appProducts->count() > 0 ? true : false,
            'data' => $appProducts,
        ],Response::HTTP_OK);
    }
}
