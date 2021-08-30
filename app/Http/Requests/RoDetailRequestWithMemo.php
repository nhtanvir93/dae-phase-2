<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckRequiredAttachmentsOnAppType;
use App\Rules\EnglishName;
use App\Rules\EmptyAppProduct;
use App\Rules\UniqueMemoWithApprovalDate;
use App\Rules\ValidConfigAttachmentAttribute;
use App\Rules\RequiredConfigAttachmentAttributeGiven;

class RoDetailRequestWithMemo extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getRoConfigAttachmentString($roConfigAttachments) {
        $roConfigAttachmentString = '';

        foreach($roConfigAttachments as $roConfigAttachment) {
            $roConfigAttachmentString .= $roConfigAttachment->config_attachment_id . ',';
        }

        return substr($roConfigAttachmentString,0,strlen($roConfigAttachmentString) - 1);
    }

    public function rules()
    {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $roConfigAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(config('app_constants.app_types.RO'));
        $roConfigAttachmentString = $this->getRoConfigAttachmentString($roConfigAttachments);
        $applicationId = $this->route('application_id',0);
        $max = $roConfigAttachments->count();

        $appAttachmentService = resolve('App\Services\AppAttachmentService',[
            'appTypeId' => config('app_constants.app_types.RO'),
            'userId' =>  auth()->user()->id
        ]);
        $ruleForAppAttachment = $appAttachmentService->hasRequiredConfigAttachment() ? 'required' : 'nullable';

        $memo = [
            'memo_no' => null,
            'approval_date' => null
        ];

        $memoAttachment = request()->get('memo_attachment');

        if(isset($memoAttachment['memos']['approval_date']) && isset($memoAttachment['memos']['memo_no'])) {
            $memo = $memoAttachment['memos'];
        }

        if($applicationId > 0) {
            $rules1 = [];
        } else {
            $rules1 = [
                'memo_attachment' => 'required|array',
                'memo_attachment.memos' => 'required|array',
                'memo_attachment.memos.memo_no' => ['required', 'integer', 'max:9999999', new UniqueMemoWithApprovalDate($memo, $applicationId)],
                'memo_attachment.memos.approval_date' => 'required|date_format:d/m/Y',
                'attachments.attachment' => 'required|mimes:jpg,jpeg,png,pdf|max:1000'
            ];
        }

        if($applicationId > 0) {
            $rules2 = [];
        } else {
            $rules2 = [
                'applications.organization_id' => 'required|exists:organizations,id'
            ];
        }

        $rules3 = [
            'ro_details.origin_country_id' => 'required_without:ro_details.origin_country_name|exists:countries,id',
            'ro_details.origin_country_name' => 'required_without:ro_details.origin_country_id|max:150',
            'ro_details.exporting_country_id' => 'required_without:ro_details.exporting_country_name|exists:countries,id',
            'ro_details.exporting_country_name' => 'required_without:ro_details.exporting_country_id|max:150',
            'ro_details.consignee_name' => ['required', 'max:150', new EnglishName],
            'ro_details.consignee_address' => 'required|max:150',
            'ro_details.cnf_firm_name' => ['required', 'max:150', new EnglishName],
            'ro_details.cnf_representative_name' => 'required|max:150',
            'ro_details.contact_person_card_licence_no' => 'required|max:50',
            'ro_details.contact_person_phone' => 'required|max:20',
            'ro_details.contact_person_email' => 'required|email:filter|max:150',
            'ro_details.contact_person_details' => 'required|max:150',
            'app_products' => ['required', 'array', 'min:1', new EmptyAppProduct],
            'app_products.*.product_type_id' => 'required|exists:app_product_types,product_type_id,app_type_id,' . config('app_constants.app_types.RO') . ',deleted_at,NULL',
            'app_products.*.product_id' => 'nullable|exists:products,id,is_active,1',
            'app_products.*.product_name' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.botanical_name' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.variety' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.pack_size' => ['required', 'max:150'],
            'app_products.*.quantity' => 'required|gt:0',
            'ro_details.has_treatment' => 'required|in:0,1',
            'ro_details.has_fumigation' => 'required|in:0,1',
            'ro_details.chemical_charge' => 'required_if:ro_details.has_fumigation,1|numeric|gt:0',
            'ro_details.service_charge' => 'required_if:ro_details.has_fumigation,1|numeric|gt:0',
            'ro_details.treatment_details' => 'required_if:ro_details.has_fumigation,1|required_if:ro_details.has_treatment,1|max:150',
            'ro_details.purpose_id' => 'required|exists:config_purposes,id',
            'ro_details.ship_name__flight_no' => 'nullable|max:150',
            'ro_details.rotation_no' => 'nullable|max:150',
            'applications.remarks' => 'nullable|max:150'
        ];

        if($applicationId > 0) {
            $rules4 = [
                'app_attachments' => ['nullable', 'array', "max:$max",
                    new CheckRequiredAttachmentsOnAppType(request()->all(),config('app_constants.app_types.RO'), $applicationId),
                    new ValidConfigAttachmentAttribute(request()->get('app_attachments')),
                    new RequiredConfigAttachmentAttributeGiven(request()->get('app_attachments'), config('app_constants.app_types.RO'))],
                'app_attachments.*.config_attachment_id' => "required|distinct|in:$roConfigAttachmentString",
                'app_attachments.*.attributes' => 'nullable|array',
                'app_attachments.*.attachment' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2000'
            ];
        } else {
            $rules4 = [
                'app_attachments' => [$ruleForAppAttachment, 'array', "max:$max",
                    new CheckRequiredAttachmentsOnAppType(request()->all(),config('app_constants.app_types.RO'), $applicationId),
                    new ValidConfigAttachmentAttribute(request()->get('app_attachments')),
                    new RequiredConfigAttachmentAttributeGiven(request()->get('app_attachments'), config('app_constants.app_types.RO'))],
                'app_attachments.*.config_attachment_id' => "$ruleForAppAttachment|distinct|in:$roConfigAttachmentString",
                'app_attachments.*.attributes' => 'nullable|array',
                'app_attachments.*.attachment' => "$ruleForAppAttachment|mimes:jpg,jpeg,png,pdf|max:2000"
            ];
        }

        $rules = array_merge($rules1, $rules2, $rules3, $rules4);

        return $rules;
    }

    public function attributes(){
        return [
            'memo_attachment.memos.memo_no' => 'Approved memo no',
            'memo_attachment.memos.approval_date' => 'date of memo approval',
            'memo_attachment.attachment' => 'memo attachment',
            'applications.organization_id' => 'port (Bangladesh)',
            'ro_details.origin_country_id' => 'country of origin',
            'ro_details.exporting_country_id' => 'exporting country',
            'ro_details.consignee_name' => 'consignee name',
            'ro_details.consignee_address' => 'consignee address',
            'ro_details.cnf_firm_name' => 'cnf firm name',
            'ro_details.cnf_representative_name' => 'cnf representative name',
            'ro_details.contact_person_card_licence_no' => 'card no / license no ',
            'ro_details.contact_person_phone' => 'contact person phone',
            'ro_details.contact_person_email' => 'contact person email',
            'ro_details.contact_person_details' => 'contact person details',
            'app_products.*.product_type_id' => 'product type',
            'app_products.*.product_id' => 'product',
            'app_products.*.product_name' => 'product name',
            'app_products.*.botanical_name' => 'botanical name',
            'app_products.*.variety' => 'variety',
            'app_products.*.pack_size' => 'pack size',
            'app_products.*.quantity' => 'quantity',
            'ro_details.has_treatment' => 'treatment required',
            'ro_details.has_fumigation' => 'fumigation required',
            'ro_details.chemical_charge' => 'chemical charge',
            'ro_details.service_charge' => 'service charge',
            'ro_details.treatment_details' => 'treatment details',
            'ro_details.purpose_id' => 'purpose',
            'applications.remarks' => 'remarks',
            'app_attachments.*.config_attachment_id' => "configuration attachment",
            'app_attachments.*.attachment' => 'attachment'
        ];
    }
}
