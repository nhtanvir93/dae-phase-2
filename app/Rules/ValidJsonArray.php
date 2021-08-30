<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidJsonArray implements Rule
{
    public $validArray;

    public function __construct($validArray = [])
    {
        $this->validArray = $validArray;
    }

    public function passes($attribute, $json)
    {
        if(is_array($json)) {
            return false;
        }

        $jsonToArray = json_decode($json);

        if(!$jsonToArray) {
            return true;
        }

        foreach($jsonToArray as $arrayValue) {
            if(gettype($arrayValue) !== 'integer' || (count($this->validArray) > 0 && !in_array($arrayValue, $this->validArray))) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid json array';
    }
}
