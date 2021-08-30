<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidUserForProxy;

class ProxyUserLogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'proxy_user_logs.original_user_id' => [ 'required', 'exists:users,id', new ValidUserForProxy],
            'proxy_user_logs.proxy_user_id' => ['required', 'different:proxy_user_logs.original_user_id',
                'exists:users,id', new ValidUserForProxy],
            'proxy_user_logs.reason' => 'required|max:150',
            'attachments.attachment' => 'nullable|mimes:jpg,jpeg,png,pdf|max:1000'
        ];
    }

    public function attributes(){
        return [
            'proxy_user_logs.original_user_id' => 'original user',
            'proxy_user_logs.proxy_user_id' => 'proxy user',
            'proxy_user_logs.reason' => 'reason',
            'attachments.attachment' => 'attachment'
        ];
    }
}
