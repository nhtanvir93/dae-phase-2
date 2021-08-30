<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAllTaskFieldsAgainstProcessTasks implements Rule
{
    private function getProcessTaskFields($processTasks, $taskFields = []) {
        if(isset($processTasks['process_task_id'])) {
            return array_merge($taskFields, $processTasks['task_fields']);
        }

        foreach($processTasks as $processTask) {
            return $this->getProcessTaskFields($processTask, $taskFields);
        }
    }

    private function isTaskWiseAllFieldsGiven($stageFlows) {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        foreach($stageFlows as $stageFlow) {
            foreach($stageFlow['stage_flow_tasks'] as $stageFlowTask) {
                if(!isset($stageFlowTask['process_task_id'])) {
                    continue;
                }

                $taskFields = $taskFieldRepository->getProcessTaskWise($stageFlowTask['process_task_id']);
                $processFlowTaskFields = $this->getProcessTaskFields($stageFlowTask);
                if($taskFields->count() == 0 && count($processFlowTaskFields) == 0) {
                    continue;
                }

                $currentTaskFieldIds = array_column($processFlowTaskFields, 'task_field_id');
                $currentTaskFieldIsRequiredFields = array_column($processFlowTaskFields, 'is_required');

                if(count($currentTaskFieldIds) == 0
                  || count($currentTaskFieldIsRequiredFields) == 0
                  || count($currentTaskFieldIds) != count($currentTaskFieldIsRequiredFields)) {
                    return false;
                }

                if($taskFields->count() == 0 && count($processFlowTaskFields) > 0) {
                    return false;
                } elseif ($taskFields->count() > 0 && count($processFlowTaskFields) != $taskFields->count()) {
                    return false;
                }

                $processFlowTaskFieldIds = array_column($processFlowTaskFields, 'task_field_id');

                if(count($processFlowTaskFieldIds) != count(array_unique($processFlowTaskFieldIds))) {
                    return false;
                }

                $taskFieldIds = $taskFields->pluck('id')->toArray();

                if(count(array_diff($taskFieldIds, $processFlowTaskFieldIds)) > 0) {
                    return false;
                }
            }
        }

        return true;
    }

    public function passes($attribute, $stageFlows)
    {
        return $this->isTaskWiseAllFieldsGiven($stageFlows);
    }

    public function message()
    {
        return 'Either some task fields are missing or invalid task fields are given according process task or task_field_id, is_required fields are missing';
    }
}
