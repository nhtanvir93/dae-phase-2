<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class RouteController extends Controller
{
    public function getApiFormRoutes() {
        $routeService = resolve('App\Services\RouteService');

        $routes = $routeService->getFormApiRoutes();

        return response()->json([
            'success' => count($routes) == 0 ? false : true,
            'data' => $routes
        ],Response::HTTP_OK);
    }
}
