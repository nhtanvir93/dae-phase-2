<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class EditValidityCheck
{
    private $ignoreUri = [
        'get-ip-for-ro',
        'process-additional-conditions'
    ];

    public function handle($request, Closure $next)
    {
        if(request()->isMethod('put') || request()->isMethod('patch')) {
            $uriSegments = explode('/', request()->path());

            if(!in_array($uriSegments[1], $this->ignoreUri)) {
                $id = $uriSegments[count($uriSegments) - 1];

                $controller = Route::current()->controller;

                $isEditable = $controller->isEditable($id);

                if(!$isEditable) {
                    return response()->json(['message' => 'No record found to update'],Response::HTTP_BAD_REQUEST);
                }
            }
        }

        return $next($request);
    }
}
