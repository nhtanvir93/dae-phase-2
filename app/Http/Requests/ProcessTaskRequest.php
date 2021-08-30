<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;
use App\Rules\ValidFormUriWithoutParam;

class ProcessTaskRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');
        $processTask = $processTaskRepository->getDetails($this->route('process_task'));

        $processTaskId = $processTask ? $processTask->id : 0;

        $scrutinizeValueString =
            request()->get('is_addon') == 1 || request()->get('is_inspection_sms') == 1
                || request()->get('is_suggestion_for_ac') ? '0' : '0,1';
        $addonValueString = request()->get('is_scrutinize_task') == 1 || request()->get('is_inspection_sms') == 1
                || request()->get('is_suggestion_for_ac') ? '0' : '0,1';
        $inspectionSmsValueString = request()->get('is_scrutinize_task') == 1 || request()->get('is_addon') == 1
                || request()->get('is_suggestion_for_ac') ? '0' : '0,1';
        $acSuggestionValueString = request()->get('is_scrutinize_task') == 1 || request()->get('is_addon') == 1
                || request()->get('is_inspection_sms') ? '0' : '0,1';

        $rules = [
            'name' => ['required', "unique:process_tasks,name,$processTaskId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'is_scrutinize_task' => "required|in:$scrutinizeValueString",
            'is_addon' => "required|in:$addonValueString",
            'is_inspection_sms' => "required|in:$inspectionSmsValueString",
            'is_suggestion_for_ac' => "required|in:$acSuggestionValueString"
        ];

        if(request()->get('is_scrutinize_task',0) == 0
            && request()->get('is_addon',0) == 0
            && request()->get('is_inspection_sms',0) == 0) {
            $rules['separate_form_url'] = ['nullable', 'max:150', new ValidFormUriWithoutParam];
        }

        $rules['remarks'] = 'nullable|max:150';

        return $rules;
    }
}
