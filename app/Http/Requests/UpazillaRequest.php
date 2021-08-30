<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class UpazillaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');
        $upazilla = $upazillaRepository->getDetails($this->route('upazilla'));

        $upazillaId = $upazilla ? $upazilla->id : 0;

        return [
            'name' => ['required', "unique:upazillas,name,$upazillaId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'district_id' => 'required|exists:districts,id',
            'description' => 'nullable|max:150'
        ];
    }

    public function attributes(){

        return [
            'district_id' => 'district'
        ];
    }
}
