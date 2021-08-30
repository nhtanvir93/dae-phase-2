<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsProfileEligible implements Rule
{
    public function passes($attribute, $value)
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        $totalFound = $configAttachmentRepository->isProfileEligible($value);

        return $totalFound == 0 ? false : true;
    }

    public function message()
    {
        return 'Invalid profile eligible configuration attachment';
    }
}
