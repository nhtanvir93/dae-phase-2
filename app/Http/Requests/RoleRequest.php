<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class RoleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');
        $role = $roleRepository->getDetails($this->route('role'));

        $roleId = $role ? $role->id : 0;

        return [
            'name' => ['required', "unique:roles,name,$roleId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150'
        ];
    }
}
