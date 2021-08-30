<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class PurposeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');
        $purpose = $purposeRepository->getDetails($this->route('purpose'));

        $purposeId = $purpose ? $purpose->id : 0;

        return [
            'name' => ['required', "unique:config_purposes,name,$purposeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'short_name' => ['nullable', "unique:config_purposes,short_name,$purposeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'is_research' => 'required|in:0,1',
            'description' => 'nullable|max:150',
        ];
    }

    public function attributes(){

        return [
            'is_research' => 'research type'
        ];
    }
}
