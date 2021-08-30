<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ValidParentMenu implements Rule
{
    public function passes($attribute, $value)
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        return $menuRepository->isParentMenu($value);
    }

    public function message()
    {
        return 'Invalid parent menu';
    }
}
