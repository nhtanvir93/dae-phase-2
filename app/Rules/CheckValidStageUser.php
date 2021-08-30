<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckValidStageUser implements Rule
{
    private $taskFields;
    private $organizationId;

    public function __construct($taskFields, $organizationId)
    {
        $this->taskFields = $taskFields;
        $this->organizationId = $organizationId;
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

            $stageUserQuery = str_replace("'#ORGANIZATION_ID#'", $this->organizationId, $matchedTaskField['stage_user_query']);

            $values = $queryService->execute($stageUserQuery);

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

        return true;
    }

    public function message()
    {
        return 'Invalid stage wise user given';
    }
}
