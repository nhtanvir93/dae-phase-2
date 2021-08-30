<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\OldPasswordCheck;

class ChangePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'old_password' => ['required', 'min:6', 'max:150', new OldPasswordCheck(auth()->user()->id)],
            'password' => 'required|min:6|max:150|confirmed'
        ];
    }
}
