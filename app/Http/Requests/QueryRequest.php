<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidSelectQuery;

class QueryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'query' => ['required', 'max:' . config('app_constants.task_field_max_value.text'), new ValidSelectQuery]
        ];
    }
}
