<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RequiedFieldGivenOrNot implements Rule
{
    private $taskFields;

    public function __construct($taskFields)
    {
        $this->taskFields = $taskFields;
    }

    public function passes($attribute, $appTaskFields)
    {
        foreach($appTaskFields as $appTaskField) {
            $taskField = $this->taskFields->where('id', $appTaskField['id']);

            if($taskField->count() == 0) {
                continue;
            }

            $taskField = $taskField->first();

            if($taskField['input_type'] == config('app_constants.task_field_input_types.FILE')
                &&
                (
                    !isset($appTaskField['attachment_title'])
                    || !isset($appTaskField['attachment'])
                    || isset($appTaskField['value'])
                )
            ) {
                return false;
            } elseif($taskField['input_type'] != config('app_constants.task_field_input_types.FILE')
                &&
                (
                    isset($appTaskField['attachment_title'])
                    || isset($appTaskField['attachment'])
                    || !isset($appTaskField['value'])
                )) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid required field/s given (example : attachment_title, attachment fields are required for FILE, value is required for all except FILE)';
    }
}
