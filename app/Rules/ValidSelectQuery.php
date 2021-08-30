<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class ValidSelectQuery implements Rule
{
    private $isStageUserQuery;

    public function __construct($isStageUserQuery = false)
    {
        $this->isStageUserQuery = $isStageUserQuery;
    }

    public function passes($attribute, $query)
    {
        if(!$query) {
            return true;
        }

        $pattern = '#^(?:delete|update|drop|alter|create).+$#i';

        if(preg_match($pattern, $query)) {
            return false;
        }

        if($this->isStageUserQuery && !strpos($query,"'#ORGANIZATION_ID#'")) {
            return false;
        }

        try {
            DB::statement($query);
            return true;
        } catch (QueryException $exception) {
            return false;
        }
    }

    public function message()
    {
        return 'Invalid select query';
    }
}
