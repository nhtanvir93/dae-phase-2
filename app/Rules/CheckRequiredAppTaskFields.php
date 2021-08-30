<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckRequiredAppTaskFields implements Rule
{
    private $processFlowId;
    private $stageLevel;
    private $eventType;
    const BACKWARD = 'BACKWARD';
    const RECHECK = 'RECHECK';
    const REJECT = 'REJECT';

    public function __construct($processFlowId, $stageLevel, $eventType)
    {
        $this->processFlowId = $processFlowId;
        $this->stageLevel = $stageLevel;
        $this->eventType = $eventType;
    }

    public function passes($attribute, $taskFields)
    {
        $taskFieldStageRepository = resolve('App\Repositories\Interfaces\TaskFieldStageRepositoryInterface');

        if(!$this->eventType) {
            return true;
        }

        $taskFieldStages = $taskFieldStageRepository->getStageWiseTaskFields($this->processFlowId, $this->stageLevel);

        if($this->eventType == self::BACKWARD || $this->eventType == self::RECHECK || $this->eventType == self::REJECT) {
            $stageTaskFields = $taskFieldStages->pluck('taskField');

            $commentTaskFields = $stageTaskFields->where('input_type', config('app_constants.task_field_input_types.COMMENT'));

            if($commentTaskFields->count() == 0) {
                return false;
            }

            $commentTaskFieldIds = $commentTaskFields->pluck('id')->toArray();
            $appCommentTaskFieldIds = array_column($taskFields, 'id');

            $commonTaskFieldIds = array_intersect($commentTaskFieldIds, $appCommentTaskFieldIds);

            return count($commonTaskFieldIds) != count($commentTaskFieldIds) ? false : true;
        }

        $requiredTaskFields = $taskFieldStages->where('is_required', 1);

        if($requiredTaskFields->count() == 0) {
            return true;
        }

        $requiredTaskFieldIds = $requiredTaskFields->pluck('task_field_id')->toArray();

        $appTaskFieldIds = array_column($taskFields, 'id');

        $commonTaskIds = array_intersect($appTaskFieldIds, $requiredTaskFieldIds);

        if(count($commonTaskIds) != count($requiredTaskFieldIds)) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'Some or all required input fields are empty';
    }
}
