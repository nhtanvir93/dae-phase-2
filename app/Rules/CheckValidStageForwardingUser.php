<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckValidStageForwardingUser implements Rule
{
    private function getProcessTaskFields($processTaskFields) {
        $taskFields = [];

        foreach($processTaskFields as $processTaskField) {
            $taskFields = array_merge($taskFields, $processTaskField['task_fields']);
        }

        return $taskFields;
    }

    private function getAllTaskFields($stageFlows) {
        $processFlowTaskFields = [];

        foreach($stageFlows as $stageFlow) {
            $processFlowTaskFields = array_merge($processFlowTaskFields, $this->getProcessTaskFields($stageFlow['stage_flow_tasks']));
        }

        return $processFlowTaskFields;
    }

    private function getAllProcessTasks($stageFlows) {
        $processFlowTasks = [];
        foreach($stageFlows as $stageFlow) {
            $processFlowTasks = array_merge($processFlowTasks, array_column($stageFlow['stage_flow_tasks'], 'process_task_id'));
        }

        return array_unique($processFlowTasks);
    }

    private function isValidForwardingUserGiven($stageFlows, $maxStageLevel) {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        $processFlowTaskFields = collect($this->getAllTaskFields($stageFlows));
        $processFlowTaskIds = $this->getAllProcessTasks($stageFlows);

        $taskFields = $taskFieldRepository->getProcessTaskWise($processFlowTaskIds);

        if($taskFields->count() == 0) {
            return false;
        }

        $stageUserTaskFields = $taskFields->filter(function($taskField) {
            return $taskField->input_type == config('app_constants.task_field_input_types.STAGE_USER');
        });

        $validStageLevels = range(0, $maxStageLevel);

        foreach($processFlowTaskFields as $processFlowTaskField) {
            $taskFields = $stageUserTaskFields->where('id', $processFlowTaskField['task_field_id']);

            if($taskFields->count() > 0
                &&
                    (
                        !isset($processFlowTaskField['forwarding_user_stage_level'])
                        || !in_array($processFlowTaskField['forwarding_user_stage_level'], $validStageLevels)
                    )
            ) {
                return false;
            } elseif($taskFields->count() == 0 && !empty($processFlowTaskField['forwarding_user_stage_level'])) {
                return false;
            }
        }

        return true;
    }

    public function passes($attribute, $stageFlows)
    {
        return $this->isValidForwardingUserGiven($stageFlows, count($stageFlows) - 1);
    }

    public function message()
    {
        return 'Valid stage is not given for forwarding user or forwarding user not given';
    }
}
