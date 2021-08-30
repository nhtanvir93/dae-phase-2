<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DelayedApplicationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'filter.organization_id' => 'required|exists:organizations,id,deleted_at,NULL',
            'filter.app_holding_user_id' => 'nullable|exists:users,id,deleted_at,NULL',
            'filter.delayed_days' => 'required|numeric|gte:0',
            'filter.app_type_id' => 'nullable|exists:app_types,id,deleted_at,NULL',
            'filter.app_status' => 'required|in:PROCESSING,PROCESSED',
        ];
    }

    public function attributes()
    {
        return [
            'filter.organization_id' => 'organization',
            'filter.app_holding_user_id' => 'dae officer',
            'filter.app_type_id' => 'application type'
        ];
    }
}
