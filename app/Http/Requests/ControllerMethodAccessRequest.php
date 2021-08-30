<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ControllerMethodAccessRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'controllerMethods' => 'required|array',
            'controllerMethods.*.controller' => 'required|max:' . config('app_constants.task_field_max_value.string'),
            'controllerMethods.*.method' => 'required|max:' . config('app_constants.task_field_max_value.string')
        ];
    }
}
