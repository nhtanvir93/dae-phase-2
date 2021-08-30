<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordPostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email:filter|exists:users,email|max:150',
            'password' => 'required|min:6|max:150|confirmed'
        ];
    }
}
