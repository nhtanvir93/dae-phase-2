<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskFieldSortRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getTaskFieldString($taskFields) {
        $taskFieldIdString = '';

        foreach($taskFields as $taskField) {
            $taskFieldIdString .= $taskField->id . ',';
        }

        return substr($taskFieldIdString,0,strlen($taskFieldIdString) - 1);
    }

    public function rules()
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');
        $taskFields = $taskFieldRepository->getProcessTaskWise($this->route('process_task'));
        $taskFieldIdString = $this->getTaskFieldString($taskFields);
        $size = $taskFields->count();

        return [
            'task_fields' => "required|array|size:$size",
            'task_fields.*' => "in:$taskFieldIdString|distinct"
        ];
    }
}
