<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckUserFromStageExist implements Rule
{
    public function passes($attribute, $processStageRoles)
    {
        foreach($processStageRoles as $processStageRole) {
            if($processStageRole['user_from_stage'] != null && count($processStageRoles) > 1) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'As user from stage is given, only one row should exist';
    }
}
