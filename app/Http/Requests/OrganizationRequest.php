<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;
use App\Rules\BanglaName;

class OrganizationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');
        $organization = $organizationRepository->getDetails($this->route('organization'));

        $organizationId = $organization ? $organization->id : 0;

        return [
            'organizations.name' => ['required', "unique:organizations,name,$organizationId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'organizations.bn_name' => ['nullable', "unique:organizations,bn_name,$organizationId,id,deleted_at,NULL", 'max:150', new BanglaName],
            'organizations.type' => 'required|in:HQ,PORT',
            'organizations.port_category_id' => 'required|exists:port_categories,id',
            'organizations.port_type_id' => 'required|exists:port_types,id',
            'organizations.means_of_transport_id' => 'required|exists:config_means_of_transports,id',
            'organizations.phone' => ['required',"unique:organizations,phone,$organizationId,id,deleted_at,NULL",'max:20'],
            'organizations.email' => "required|unique:organizations,email,$organizationId,id,deleted_at,NULL|email:filter|max:150",
            'organizations.website' => 'nullable|url|max:150',
            'organizations.custom_house' => 'required|max:150',
            'addresses.district_id' => 'required|exists:districts,id',
            'addresses.upazilla_id' => 'nullable|exists:upazillas,id',
            'addresses.description' => 'required|max:150',
        ];
    }

    public function attributes(){

        return [
            'organizations.name' => 'name',
            'organizations.bn_name' => 'bangla name',
            'organizations.type' => 'type',
            'organizations.port_category_id' => 'port category',
            'organizations.port_type_id' => 'port type',
            'organizations.means_of_transport_id' => 'means of transport',
            'organizations.phone' => 'phone',
            'organizations.email' => 'email',
            'organizations.website' => 'website',
            'organizations.custom_house' => 'custom house',
            'addresses.district_id' => 'district',
            'addresses.upazilla_id' => 'upazilla',
            'addresses.description' => 'description',
            'attachments.logo' => 'logo'
        ];
    }
}
