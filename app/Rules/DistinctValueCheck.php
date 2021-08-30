<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DistinctValueCheck implements Rule
{
    private $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function passes($attribute, $array)
    {
        $oldKeyValues = array_column($array,$this->key);
        $newKeyValues = array_unique($oldKeyValues);

        return count($oldKeyValues) == count($newKeyValues);
    }

    public function message()
    {
        return 'Invalid distinct values';
    }
}
