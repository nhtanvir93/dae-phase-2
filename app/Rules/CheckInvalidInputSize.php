<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckInvalidInputSize implements Rule
{
    private $taskFields;

    private $taskFieldMaxValues;

    public function __construct($taskFields)
    {
        $this->taskFields = $taskFields;
        $this->taskFieldMaxValues = config('app_constants.input_type_details');
    }

    public function passes($attribute, $appTaskFields)
    {
        $datePattern = '#^\d{2}/\d{2}/[1-9]\d{3}$#';

        foreach($appTaskFields as $appTaskField) {
            $taskField = $this->taskFields->where('id', $appTaskField['id']);

            if($taskField->count() == 0
                ||
                (
                    array_key_exists('value', $appTaskField)
                    && empty($appTaskField['value'])
                )
                || !array_key_exists('value', $appTaskField)
            ) {
                continue;
            }

            $taskField = $taskField->first();

            if(!array_key_exists($taskField['input_type'], $this->taskFieldMaxValues)) {
                continue;
            }

            $inputTypeDetails = $this->taskFieldMaxValues[$taskField['input_type']];

            if($inputTypeDetails['has_max_value']
                &&
                (
                    (
                        is_numeric($appTaskField['value'])
                        && $appTaskField['value'] > $inputTypeDetails['size']
                    )
                    || !is_numeric($appTaskField['value'])
                )
            ) {
                return false;
            } elseif(!$inputTypeDetails['has_max_value']
                && strlen($appTaskField['value']) > $inputTypeDetails['size']
            ) {
                return false;
            }

            if($inputTypeDetails['is_date_type']
                &&
                (
                    (
                        !is_numeric($appTaskField['value'])
                        &&
                        (
                            (
                                strlen($appTaskField['value']) != $inputTypeDetails['size']
                            )
                            ||
                            (
                                strlen($appTaskField['value']) == $inputTypeDetails['size']
                                && !preg_match($datePattern, $appTaskField['value'])
                            )
                        )
                    )
                    || is_numeric($appTaskField['value'])
                )
            ) {
                return false;
            }

            if($inputTypeDetails['is_select_type']
                && is_numeric($appTaskField['value'])
                && preg_match('#^\d+\.\d+$#', $appTaskField['value'])) {
                return false;
            }

        }

        return true;
    }

    public function message()
    {
        return 'Invalid value or invalid maximum value or invalid maximum range given';
    }
}
