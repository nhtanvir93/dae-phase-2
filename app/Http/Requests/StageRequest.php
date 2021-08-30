<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class StageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $stageRepository = resolve('App\Repositories\Interfaces\StageRepositoryInterface');
        $stage = $stageRepository->getDetails($this->route('stage'));

        $stageId = $stage ? $stage->id : 0;

        return [
            'name' => ['required', "unique:stages,name,$stageId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'is_lab_test_type' => 'required|in:0,1',
            'is_inspection_type' => 'required|in:0,1',
            'description' => 'nullable|max:150'
        ];
    }

    public function attributes(){

        return [
            'is_lab_test_type' => 'lab test type ?',
            'is_inspection_type' => 'inspection type ?'
        ];

    }
}
