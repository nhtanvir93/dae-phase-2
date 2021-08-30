<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');
        $certificate = $certificateRepository->getDetails($this->route('certificate'));

        $certificateId = $certificate ? $certificate->id : 0;
        $appTypeId = request()->get('app_type_id',0);

        return [
            'app_type_id' => 'required|exists:app_types,id,deleted_at,NULL',
            'certificate_no' => ['required', 'min:1', 'max:150',
                "unique:certificates,certificate_no,$certificateId,id,app_type_id,$appTypeId,deleted_at,NULL",
                "unique:applications,certificate_no,0,id,app_type_id,$appTypeId,is_approved,1,deleted_at,NULL"],
            'issue_date' => 'required|date_format:d/m/Y',
            'attachments.certificate' => $certificateId == 0 ?
                'required|mimes:jpg,jpeg,png,pdf|max:1000' : 'nullable|mimes:jpg,jpeg,png,pdf|max:1000',
        ];
    }
}
