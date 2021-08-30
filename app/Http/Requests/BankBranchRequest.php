<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class BankBranchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');
        $bankBranch = $bankBranchRepository->getDetails($this->route('bank_branch'));

        $bankBranchId = $bankBranch ? $bankBranch->id : 0;

        $bankId = request()->get('bank_id',0);
        $districtId = request()->get('district_id',0);

        return [
            'name' => ['required', "unique:bank_branches,name,$bankBranchId,id,bank_id,$bankId,district_id,$districtId,deleted_at,NULL", 'max:150', new EnglishName],
            'bank_id' => 'required|exists:banks,id',
            'district_id' => 'required|exists:districts,id'
        ];
    }

    public function attributes(){
        return [
            'bank_id' => 'bank',
            'district_id' => 'district'
        ];
    }
}
