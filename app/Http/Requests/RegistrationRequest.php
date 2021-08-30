<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidMobileNo;
use App\Rules\EnglishName;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules2 = [];

        $companyType = request()->get('company_type');
        $companyTypes = config('app_constants.company_types');

        $rules1 = [
            'username' => ['required', 'unique:users,username,0,id,deleted_at,NULL', 'min:6', 'max:150', new EnglishName],
            'password' => 'required|confirmed|min:6|max:150',
            'company_type' => 'required|in:' . implode(',', array_keys($companyTypes))
        ];

        if($companyType == $companyTypes['CNF']) {
            $cnfOrganizationId = request()->get('organization_id');

            $cardNoUniqueRule = $cnfOrganizationId ?
                "unique:users,card_no,0,id,organization_id,$cnfOrganizationId,deleted_at,NULL" : '';

            $rules2 = [
                'card_no' => ['required', $cardNoUniqueRule, 'min:3', 'max:150'],
                'organization_id' => 'required|exists:organizations,id,deleted_at,NULL',
            ];
        }

        $rules3 = ['mobile' => ['required', new ValidMobileNo],
            'email' => 'required|unique:users,email,0,id,deleted_at,NULL|email:filter|max:150'
        ];

        return array_merge($rules1, $rules2, $rules3);
    }

    public function attributes(){

        return [
            'organization_id' => 'working port'
        ];
    }
}
