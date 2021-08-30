<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidBankBranch implements Rule
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        if(empty($this->data['bank_id']) || empty($this->data['district_id'])) {
            return true;
        }

        return $bankBranchRepository->isValidBankBranch($value, $this->data['bank_id'], $this->data['district_id']);
    }

    public function message()
    {
        return 'Invalid bank branch';
    }
}
