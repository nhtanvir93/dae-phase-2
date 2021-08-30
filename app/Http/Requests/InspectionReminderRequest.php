<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class InspectionReminderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'application_id' => 'required',
            'message' => ['required', 'max:' . config('app_constants.sms_options.max_characters'), new EnglishName]
        ];
    }
}
