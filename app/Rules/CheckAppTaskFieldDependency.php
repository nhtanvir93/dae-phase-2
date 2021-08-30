<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAppTaskFieldDependency implements Rule
{
    private $taskFields;

    public function __construct($taskFields)
    {
        $this->taskFields = $taskFields;
    }

    public function passes($attribute, $appTaskFields)
    {
        if($this->taskFields->count() == 0) {
            return true;
        }

        foreach($appTaskFields as $appTaskField) {
            $matchedTaskFields = $this->taskFields->where('id', $appTaskField['id']);

            if($matchedTaskFields->count() == 0 || !isset($appTaskField['value'])) {
               continue;
            }

            $matchedTaskField = $matchedTaskFields->first();

            $matchedIndex = array_search($matchedTaskField['dependent_task_field_id'], array_column($appTaskFields, 'id'));

            if(!isset($appTaskFields[$matchedIndex]['value'])) {
                continue;
            }

            $matchedTaskFieldValue = $appTaskFields[$matchedIndex]['value'];

            if($matchedTaskFieldValue == 0) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Either empty value found or not required value given according to dependency';
    }
}
