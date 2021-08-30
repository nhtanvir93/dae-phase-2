<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class VarietyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');
        $variety = $varietyRepository->getDetails($this->route('variety'));

        $varietyId = $variety ? $variety->id : 0;

        return [
            'name' => ['required', "unique:varieties,name,$varietyId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150',
            'purposes' => 'required|array|min:1',
            'purposes.*' => 'exists:config_purposes,id'
        ];
    }
}
