<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkingDetailsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'organization_id' => 'required|exists:organizations,id,deleted_at,NULL',
            'from_date' => 'nullable|date_format:d/m/Y',
            'to_date' => 'nullable|date_format:d/m/Y'
        ];
    }
}
