<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Psy\Exception\ErrorException;

class CheckRoleOrUserFromStage implements Rule
{
    public function passes($attribute, $processStageRoles)
    {
        foreach($processStageRoles as $processStageRole) {
            if(
                ($processStageRole['role_id'] !== null && $processStageRole['user_from_stage'] !== null)
                ||  ($processStageRole['role_id'] === null && $processStageRole['user_from_stage'] === null)
            ) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Either role or user from stage should have a valid value';
    }
}
