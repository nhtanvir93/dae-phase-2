<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ControllerList extends Controller
{
    public function __invoke()
    {
        $controllerAndMethodService = resolve('App\Services\ControllerandMethodService');

        $controllers = $controllerAndMethodService->getControllers();

        return response()->json([
            'success' => $controllers ? true : false,
            'data' => $controllers
        ],$controllers ? Response::HTTP_OK : Response::HTTP_NOT_FOUND);
    }
}
