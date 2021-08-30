<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeedPurposeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'is_seed' => 'required|in:0,1',
            'purposes' => 'required|array|min:0',
            'purposes.*' => 'exists:config_purposes,id'
        ];
    }

    public function attributes(){
        return [
            'is_seed' => 'type'
        ];
    }
}
