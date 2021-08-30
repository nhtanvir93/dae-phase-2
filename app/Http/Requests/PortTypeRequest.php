<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class PortTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');
        $portType = $portTypeRepository->getDetails($this->route('port_type'));

        $portTypeId = $portType ? $portType->id : 0;

        return [
            'name' => ['required', "unique:port_types,name,$portTypeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150'
        ];
    }
}
