<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidFormUriWithoutParam implements Rule
{
    public function passes($attribute, $value)
    {
        $routeService = resolve('App\Services\RouteService');

        return $routeService->formApiRouteExists($value);
    }

    public function message()
    {
        return "Invalid form url or url not found (example : " . url('/') . "/api/registration)";
    }
}
