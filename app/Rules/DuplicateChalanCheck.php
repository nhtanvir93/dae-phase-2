<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DuplicateChalanCheck implements Rule
{
    private $data = [];
    private $excludedInvoiceId;

    public function __construct($requestData, $excludedInvoiceId)
    {
        $this->data = $requestData;
        $this->excludedInvoiceId = $excludedInvoiceId;
    }

    public function passes($attribute, $value)
    {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        if(empty($this->data['bank_branch_id']) || empty($this->data['chalan_no'])
           || empty($this->data['amount']) || empty($this->data['issue_date'])) {
            return true;
        }

        return $appInvoiceRepository->isValidChalan($this->data['bank_branch_id'], $this->data['chalan_no'],
            $this->data['issue_date'], $this->excludedInvoiceId);
    }

    public function message()
    {
        return 'Duplicate chalan (according to : bank branch, chalan no, issue date)';
    }
}
