<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidMethod implements Rule
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        $controllerAndMethodService = resolve('App\Services\ControllerandMethodService');

        $controller = $this->data['controller'] ?? 0;
        $status = $controllerAndMethodService->isMethodValid($controller, $value);

        return $status === false ? false : true;
    }

    public function message()
    {
        return 'Invalid method';
    }
}
