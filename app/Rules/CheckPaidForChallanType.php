<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckPaidForChallanType implements Rule
{
    private $challanType;
    private $payableAmount;

    public function __construct($challanType, $payableAmount)
    {
        $this->challanType = $challanType;
        $this->payableAmount = $payableAmount;
    }

    public function passes($attribute, $value)
    {
        return $this->payableAmount > 0;
    }

    public function message()
    {
        return 'Payment already done for ' . implode(' ', explode('_', $this->challanType));
    }
}
