<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class AppTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');
        $appType = $appTypeRepository->getDetails($this->route('app_type'));

        $appTypeId = $appType ? $appType->id : 0;

        return [
            'name' => ['required', "unique:app_types,name,$appTypeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'short_name' => ['required', "unique:app_types,short_name,$appTypeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'type' => 'required|in:EXPORT,IMPORT',
//            'certificate_validity_days' => "required|numeric|gt:0",
//            'certificate_extended_days' => "nullable|numeric|gt:0",
            'description' => 'nullable|max:150'
        ];
    }
}
