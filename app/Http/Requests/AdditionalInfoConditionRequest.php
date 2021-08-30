<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdditionalInfoConditionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'application_id' => 'required',
            'additional_info_conditions' => 'required|array|min:1',
            'additional_info_conditions.*' => 'required|max:150'
        ];
    }
}
