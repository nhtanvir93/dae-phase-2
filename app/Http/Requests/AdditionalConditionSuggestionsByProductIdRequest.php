<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdditionalConditionSuggestionsByProductIdRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'app_type_id' => 'required|exists:app_types,id,deleted_at,NULL',
            'product_ids' => 'required|array',
            'product_ids.*' => 'required|numeric'
        ];
    }
}
