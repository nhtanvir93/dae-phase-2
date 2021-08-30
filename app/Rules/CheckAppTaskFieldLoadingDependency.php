<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAppTaskFieldLoadingDependency implements Rule
{
    private $taskFields;
    private $allStageTaskFields;

    public function __construct($taskFields, $allStageTaskFields)
    {
        $this->taskFields = $taskFields;
        $this->allStageTaskFields = $allStageTaskFields;
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

            $loadingDependencyTaskFieldIds = json_decode($matchedTaskField['loading_dependency_json']);

            $totalIterationOccured = 0;

            $loadingDependencyQuery = $matchedTaskField['loading_dependency_query'];

            while($totalIterationOccured != count($loadingDependencyTaskFieldIds)) {
                $currentLoadingDependencyTaskFieldValue =
                    $appTaskFields[array_search($loadingDependencyTaskFieldIds[$totalIterationOccured], array_column($appTaskFields, 'id'))]['value'];

                $dependencyTaskFields = $this->allStageTaskFields->where('id', $loadingDependencyTaskFieldIds[$totalIterationOccured]);

                if($dependencyTaskFields->count() > 0) {
                    $dependencyTaskField = $dependencyTaskFields->first();

                    $loadingDependencyQuery = str_replace("'#" . $dependencyTaskField['task_field_name'] . "#'",
                        $currentLoadingDependencyTaskFieldValue,
                        $loadingDependencyQuery);
                }

                $totalIterationOccured++;
            }

            $values = $queryService->execute($loadingDependencyQuery);

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
        return 'Invalid loading dependency value given';
    }
}
