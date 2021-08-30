<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationMutipleIdRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ids' => 'required|array|min:1',
            'ids.*' => 'exists:notifications,id,user_id,' . auth()->user()->id
        ];
    }
}
