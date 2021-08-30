<?php

namespace App\Services;

use Illuminate\Support\Facades\Route;

class RouteService
{
    public function getFormApiRoutes() {
        $apiRoutes  = [];
        $routes = Route::getRoutes();

        $apiRoutePattern = '#^api/[^{]+$#';

        $formRequestMethods = ['POST', 'PUT', 'PATCH'];

        foreach ($routes as $route)
        {
            $apiRouteUri = $route->uri();
            $matchesMethods = array_intersect($route->methods, $formRequestMethods);

            if(preg_match($apiRoutePattern, $apiRouteUri) && count($matchesMethods) > 0) {
                $apiRoutes[] =  url('/') . '/' . $route->uri();
            }
        }

        $apiRoutes = array_unique($apiRoutes);
        return $apiRoutes;
    }

    public function formApiRouteExists($apiRoute) {
        $apiRoutes = $this->getFormApiRoutes();

        return in_array($apiRoute, $apiRoutes);
    }
}