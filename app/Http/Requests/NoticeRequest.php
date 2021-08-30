<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $fromDate = request()->get('from_date');
        $toDate = request()->get('to_date');

        $dateRule = 'nullable';

        if($fromDate || $toDate) {
            $dateRule = 'required';
        }

        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');
        $notice = $noticeRepository->getDetails($this->route('notice'));

        $noticeId = $notice ? $notice->id : 0;

        return [
            'user_type_id' => "nullable|exists:user_types,id,deleted_at,NULL",
            'notice_msg' => "required|unique:notices,notice_msg,$noticeId,id,deleted_at,NULL|max:150",
            'notice_details' => 'nullable',
            'doc_no' => 'nullable|max:150',
            'doc_issue_date' => 'nullable|date_format:d/m/Y',
            'from_date' => "$dateRule|date_format:d/m/Y",
            'to_date' => "$dateRule|date_format:d/m/Y",
            'is_active' => "required|boolean",
            'attachments.notice' => 'nullable|mimes:jpg,jpeg,png,pdf|max:1000'
        ];
    }
}
