<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessTaskSortRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getProcessTaskIdString($processTasks) {
        $processTaskString = '';

        foreach($processTasks as $processTask) {
            $processTaskString .= $processTask->id . ',';
        }

        return substr($processTaskString,0,strlen($processTaskString) - 1);
    }

    public function rules()
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');
        $processTasks = $processTaskRepository->lists();
        $processTaskString = $this->getProcessTaskIdString($processTasks);
        $size = $processTasks->count();

        return [
            'process_tasks' => "required|array|size:$size",
            'process_tasks.*' => "in:$processTaskString|distinct"
        ];
    }
}
