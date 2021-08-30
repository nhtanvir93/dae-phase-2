<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\QueryService;

class CheckValidSelectAppTaskFieldValue implements Rule
{
    private $taskFields;

    public function __construct($taskFields)
    {
        $this->taskFields = $taskFields;
    }

    public function passes($attribute, $appTaskFields)
    {
        $queryService = resolve('App\Services\QueryService');

        if($this->taskFields->count() == 0) {
            return true;
        }

        foreach($appTaskFields as $appTaskField) {
            $matchedTaskFields = $this->taskFields->where('id', $appTaskField['id']);

            if($matchedTaskFields->count() == 0 || !isset($appTaskField['value'])) {
                continue;
            }

            $matchedTaskField = $matchedTaskFields->first();

            if(isset($matchedTaskField['dropdown_value_json'])) {
                $dropdownValueJson = json_decode($matchedTaskField['dropdown_value_json']);

                $values = array_column($dropdownValueJson,'value');

                if(!in_array($appTaskField['value'], $values)) {
                    return false;
                }
            } else {
                $values = $queryService->execute($matchedTaskField['dropdown_value_query']);

                if(
                    (
                        $values->count() > 0
                        &&
                        (
                            (
                                $values->pluck('value')->count() != $values->count()
                                || $values->pluck('text')->count() != $values->count()
                            )
                            || !in_array($appTaskField['value'], $values->pluck('value')->toArray())
                        )
                    )
                    || $values->count() == 0
                ) {
                   return false;
                }
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid select type value';
    }
}
