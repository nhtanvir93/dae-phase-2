<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class PortCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $portCategoryRepository = resolve('App\Repositories\Interfaces\PortCategoryRepositoryInterface');
        $portCategory = $portCategoryRepository->getDetails($this->route('port_category'));

        $portCategoryId = $portCategory ? $portCategory->id : 0;

        return [
            'name' => ['required', "unique:port_categories,name,$portCategoryId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150'
        ];
    }
}
