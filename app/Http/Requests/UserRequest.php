<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidMobileNo;
use App\Rules\EnglishName;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $user = $userRepository->getDetails($this->route('user'));

        $userId = $user ? $user->id : 0;
        $users = request()->get('users');

        $userTypeId = isset($users['user_type_id']) ? $users['user_type_id'] : 0;

        $roles = config('app_constants.roles');
        $userTypes = config('app_constants.user_type');
        unset($userTypes['applicant']);
        unset($userTypes['cnf']);

        $allowedUserTypes = implode(',',$userTypes);

        if($userTypeId == $userTypes['system_admin']) {
            $allowedRoleIds = $roles['SYSTEM_ADMIN'];
        } elseif ($userTypeId == $userTypes['dae_admin']) {
            $allowedRoleIds = $roles['DAE_ADMIN'];
        } else {
            $excludedRoles = ['SYSTEM_ADMIN', 'PUBLIC_USER', 'CNF', 'DAE_ADMIN'];
            $allowedRoleIds = array_diff_key($roles, array_flip($excludedRoles));
            $allowedRoleIds = implode(',',$allowedRoleIds);
        }

        $rules = [
            'users.username' => ['required', "unique:users,username,$userId,id,deleted_at,NULL", 'min:6', 'max:150', new EnglishName],
        ];

        if($userId > 0) {
            $rules['users.password'] = 'nullable|min:6|max:150|same:users.password_confirmation';
            $rules['users.password_confirmation'] = 'nullable|min:6|max:150';
        } else {
            $rules['users.password'] = 'required|min:6|max:150|same:users.password_confirmation';
            $rules['users.password_confirmation'] = 'required|min:6|max:150';
        }

        $rules['users.mobile'] = ['required', new ValidMobileNo];
        $rules['users.email'] = "required|unique:users,email,$userId,id,deleted_at,NULL|email:filter|max:150";
        $rules['users.user_type_id'] = "required|in:$allowedUserTypes";

        if($userTypeId == $userTypes['dae_admin'] || $userTypeId == $userTypes['dae_user']) {
            $rules['users.organization_id'] = 'required|exists:organizations,id,deleted_at,NULL';
        }

        if($userTypeId == $userTypes['dae_user']) {
            $rules['users.designation_id'] = 'required|exists:designations,id,deleted_at,NULL';
            $rules['users.superior_id'] = 'nullable|exists:users,id,deleted_at,NULL';
        }

        $rules['roles'] = 'required|array|min:1';
        $rules['roles.*'] = "in:$allowedRoleIds|distinct";

        return $rules;
    }

    public function attributes(){
        return [
            'users.username' => 'username',
            'users.password' => 'password',
            'users.password_confirmation' => 'password confirmation',
            'users.mobile' => 'mobile',
            'users.email' => 'email',
            'users.organization_id' => 'organization',
            'users.designation_id' => 'designation',
            'users.superior_id' => 'supervisor',
            'roles.*' => 'roles'
        ];
    }
}
