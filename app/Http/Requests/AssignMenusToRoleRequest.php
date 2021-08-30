<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignMenusToRoleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'role_id' => 'required|exists:roles,id',
            'menus' => 'nullable|array',
            'menus.*' => 'exists:menus,id'
        ];
    }

    public function attributes(){
        return [
            'role_id' => 'role'
        ];
    }
}
