<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidController implements Rule
{
    public function passes($attribute, $value)
    {
        $controllerAndMethodService = resolve('App\Services\ControllerandMethodService');

        $status = $controllerAndMethodService->isControllerValid($value);

        return $status === false ? false : true;
    }

    public function message()
    {
        return 'Invalid controller';
    }
}
