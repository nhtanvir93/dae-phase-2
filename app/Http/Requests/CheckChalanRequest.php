<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidBankBranch;

class CheckChalanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'bank_id' => 'required|exists:banks,id',
            'district_id' => 'required|exists:districts,id',
            'bank_branch_id' => ['required', new ValidBankBranch(request()->all())],
            'chalan_no' => ['required', 'max:150'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'issue_date' => 'required|date_format:d/m/Y'
        ];
    }

    public function attributes()
    {
        return [
            'bank_id' => 'bank',
            'district_id' => 'district',
            'bank_branch_id' => 'bank branch'
        ];
    }
}
