<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class DistrictRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');
        $district = $districtRepository->getDetails($this->route('district'));

        $districtId = $district ? $district->id : 0;

        $rules = [
            'name' => ['required', "unique:districts,name,$districtId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150'
        ];

        return $rules;
    }
}
