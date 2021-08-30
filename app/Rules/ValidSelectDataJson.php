<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidSelectDataJson implements Rule
{
    public function passes($attribute, $json)
    {
        $selectData = json_decode($json);

        if(!$json || !$selectData) {
            return true;
        }

        foreach($selectData as $singleSelectData) {
            if(!isset($singleSelectData->value) || !isset($singleSelectData->text)
                || (count((array)$singleSelectData) != 2) ) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid select json (exmaple : [{"value":"1","text":"Yes"},{"value":"0","text":"No"}])';
    }
}
