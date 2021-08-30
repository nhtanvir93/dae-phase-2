<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class BankRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');
        $bank = $bankRepository->getDetails($this->route('bank'));

        $bankId = $bank ? $bank->id : 0;

        return [
            'banks.name' => ['required', "unique:banks,name,$bankId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'addresses.district_id' => 'required|exists:districts,id',
            'addresses.upazilla_id' => 'nullable|exists:upazillas,id',
            'addresses.description' => 'required|max:150',
        ];
    }

    public function attributes(){

        return [
            'banks.name' => 'name',
            'addresses.district_id' => 'district',
            'addresses.upazilla_id' => 'upazilla',
            'addresses.description' => 'description',
        ];

    }
}
