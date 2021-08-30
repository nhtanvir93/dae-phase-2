<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckMaximumChalanGiven implements Rule
{
    private $challanType;
    private $totalGivenChallans;
    private $maxChallans;

    public function __construct($challanType, $totalGivenChallans, $maxChallans)
    {
        $this->challanType = $challanType;
        $this->totalGivenChallans = $totalGivenChallans;
        $this->maxChallans = $maxChallans;
    }

    public function passes($attribute, $value)
    {
        if(!$this->challanType) {
            return true;
        }

        return $this->totalGivenChallans < $this->maxChallans;
    }

    public function message()
    {
        return $this->maxChallans == 1 ? $this->maxChallans . " chalan is already been added" : $this->maxChallans . " chalans are already been added";
    }
}
