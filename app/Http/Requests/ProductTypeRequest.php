<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class ProductTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $productTypeRepository = resolve('App\Repositories\Interfaces\ProductTypeRepositoryInterface');
        $productType = $productTypeRepository->getDetails($this->route('product_type'));

        $productTypeId = $productType ? $productType->id : 0;

        return [
            'name' => ['required', "unique:product_types,name,$productTypeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'unit_id' => "required|exists:units,id",
            'description' => 'nullable|max:150',
            'is_seed' => 'required|in:0,1',
            'app_types' => 'required|array|min:1',
            'app_types.*' => 'exists:app_types,id'
        ];
    }

    public function attributes(){

        return [
            'unit_id' => 'unit',
            'is_seed' => 'type',
            'app_types' => 'application types'
        ];
    }
}
