<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class MethodList extends Controller
{
    public function __invoke($controller)
    {
        $controllerAndMethodService = resolve('App\Services\ControllerandMethodService');

        $methods = $controllerAndMethodService->getMethods($controller);

        return response()->json([
            'success' => $methods ? true : false,
            'data' => $methods ? $methods : []
        ],$methods ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
