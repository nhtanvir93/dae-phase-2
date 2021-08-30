<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class UnitRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $unitRepository = resolve('App\Repositories\Interfaces\UnitRepositoryInterface');
        $unit = $unitRepository->getDetails($this->route('unit'));

        $unitId = $unit ? $unit->id : 0;

        $rules = [
            'name' => ['required', "unique:units,name,$unitId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'short_name' => ['nullable',"unique:units,short_name,$unitId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150',
            'parent_id' => "nullable|exists:units,id|not_in:$unitId"
        ];

        if(request()->get('parent_id') > 0) {
            $rules['conversion_rate'] = 'required|numeric|gt:0|max:999999';
        }

        return $rules;
    }

    public function attributes(){

        return [
            'parent_id' => 'parent unit'
        ];

    }
}
