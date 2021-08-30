<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;
use App\Rules\BanglaName;

class DesignationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');
        $designation = $designationRepository->getDetails($this->route('designation'));

        $designationId = $designation ? $designation->id : 0;

        return [
            'title' => ['required', "unique:designations,title,$designationId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'full_name' => ['required', "unique:designations,full_name,$designationId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'bn_full_name' => ['nullable', "unique:designations,bn_full_name,$designationId,id,deleted_at,NULL", 'max:150',
                new BanglaName],
            'description' => 'nullable|max:150'
        ];
    }

    public function attributes(){

        return [
            'bn_full_name' => 'bangla full name'
        ];
    }
}
