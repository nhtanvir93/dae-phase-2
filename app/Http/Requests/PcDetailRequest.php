<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;
use App\Rules\EmptyAppProduct;
use App\Rules\ValidOrganizationOnTransportType;
use App\Rules\CheckRequiredAttachmentsOnPurpose;
use App\Rules\ValidConfigAttachmentAttribute;

class PcDetailRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getPcConfigAttachmentString($pcConfigAttachments) {
        $pcConfigAttachmentString = '';

        foreach($pcConfigAttachments as $pcConfigAttachment) {
            $pcConfigAttachmentString .= $pcConfigAttachment->config_attachment_id . ',';
        }

        return substr($pcConfigAttachmentString,0,strlen($pcConfigAttachmentString) - 1);
    }

    public function rules()
    {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $pcConfigAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(config('app_constants.app_types.PC'));
        $pcConfigAttachmentString = $this->getPcConfigAttachmentString($pcConfigAttachments);
        $max = $pcConfigAttachments->count();

        $applicationId = $this->route('pc_application',0);

        $pcDetails = request()->get('pc_details');

        $appAttachmentService = resolve('App\Services\AppAttachmentService',[
            'appTypeId' => config('app_constants.app_types.PC'),
            'userId' =>  auth()->user()->id,
            'purposeId' => $pcDetails['purpose_id'] ? $pcDetails['purpose_id'] : 0
        ]);
        $ruleForAppAttachment = $appAttachmentService->hasRequiredConfigAttachment() ? 'required' : 'nullable';

        if($applicationId > 0) {
            $rules1 = [];
        } else {
            $rules1 = [
                'applications.organization_id' => 'required|exists:organizations,id'
            ];
        }

        $rules2 = [
            'pc_details.exporter_name' => ['required', 'max:150', new EnglishName],
            'pc_details.exporter_address' => 'required|max:150',
            'pc_details.contact_person_name' => ['required', 'max:150', new EnglishName],
            'pc_details.contact_person_phone' => 'required|max:20',
            'pc_details.contact_person_email' => 'required|email:filter|max:150',
            'pc_details.contact_person_details' => 'required|max:150',
            'app_products' => ['required', 'array', 'min:1', new EmptyAppProduct],
            'app_products.*.product_type_id' => 'required|exists:app_product_types,product_type_id,app_type_id,' . config('app_constants.app_types.PC') . ',deleted_at,NULL',
            'app_products.*.product_id' => 'nullable|exists:products,id,is_active,1',
            'app_products.*.product_name' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.botanical_name' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.variety' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.pack_size' => ['required', 'max:150'],
            'app_products.*.quantity' => 'required|gt:0',
            'applications.total_pallet' => 'nullable|min:0|max:100000',
            'applications.per_pallet_charge' => 'required_with:applications.total_pallet|min:0|max:9999.99',
            'pc_details.means_of_transport_id' => 'required|exists:config_means_of_transports,id',
            'pc_details.exit_organization_id' => ['required', new ValidOrganizationOnTransportType($pcDetails)],
            'pc_details.purpose_id' => 'required|exists:config_purposes,id',
            'pc_details.consignee_name' => ['required', 'max:150', new EnglishName],
            'pc_details.consignee_address' => ['required', 'max:150', new EnglishName],
            'pc_details.origin_country_id' => 'required_without:pc_details.origin_country_name|exists:countries,id',
            'pc_details.origin_country_name' => 'required_without:pc_details.origin_country_id|max:150',
            'pc_details.exporting_country_id' => 'required_without:pc_details.exporting_country_name|exists:countries,id',
            'pc_details.exporting_country_name' => 'required_without:pc_details.exporting_country_id|max:150',
            'pc_details.contract_no' => 'nullable|max:150',
            'pc_details.contract_date' => 'nullable|date_format:d/m/Y',
            'pc_details.entry_port' => 'required|max:150',
            'pc_details.shipment_date' => 'required|date_format:d/m/Y',
            'pc_details.treatment_type' => 'required|in:FUMIGATION,OTHER,NO',
            'manual_fumigation_service_charge' => 'nullable|numeric|gt:0',
            'pc_details.fumigation_total_tablets' => 'required_if:pc_details.treatment_type,FUMIGATION|numeric|gt:0' ,
            'pc_details.fumigation_per_tablet_charge' => 'required_if:pc_details.treatment_type,FUMIGATION|numeric|gt:0',
            'pc_details.treatment_details' => 'required_if:pc_details.treatment_type,OTHER,FUMIGATION|max:150',
            'pc_details.proforma_invoice_no' => 'nullable|max:150',
            'pc_details.proforma_invoice_date' => 'nullable|date_format:d/m/Y',
            'pc_details.distinguishing_mark' => 'nullable|max:150',
            'pc_details.godown_address' => 'required|max:150',
            'applications.remarks' => 'nullable|max:150'
        ];

        if($applicationId > 0) {
            $rules3 = [
                'app_attachments' => ['nullable', 'array', "max:$max",
                    new ValidConfigAttachmentAttribute(request()->get('app_attachments')),
                    new CheckRequiredAttachmentsOnPurpose($pcDetails,config('app_constants.app_types.PC'), $applicationId)],
                'app_attachments.*.config_attachment_id' => "required|distinct|in:$pcConfigAttachmentString",
                'app_attachments.*.attributes' => 'nullable|array',
                'app_attachments.*.attachment' => 'required|mimes:jpg,jpeg,png,pdf|max:2000'
            ];
        } else {
            $rules3 = [
                'app_attachments' => [$ruleForAppAttachment, 'array', "max:$max",
                    new ValidConfigAttachmentAttribute(request()->get('app_attachments')),
                    new CheckRequiredAttachmentsOnPurpose($pcDetails,config('app_constants.app_types.PC'), $applicationId)],
                'app_attachments.*.config_attachment_id' => "required|distinct|in:$pcConfigAttachmentString",
                'app_attachments.*.attributes' => 'nullable|array',
                'app_attachments.*.attachment' => 'required|mimes:jpg,jpeg,png,pdf|max:2000'
            ];
        }

        $rules = array_merge($rules1, $rules2, $rules3);

        return $rules;
    }

    public function attributes(){
        return [
            'applications.organization_id' => 'organization',
            'pc_details.exporter_name' => 'exporter name',
            'pc_details.exporter_address' => 'exporter address',
            'pc_details.contact_person_name' => 'contact person name',
            'pc_details.contact_person_phone' => 'contact person phone',
            'pc_details.contact_person_email' => 'contact person email',
            'pc_details.contact_person_details' => 'contact person details',
            'app_products.*.product_type_id' => 'product type',
            'app_products.*.product_id' => 'product',
            'app_products.*.product_name' => 'product name',
            'app_products.*.botanical_name' => 'botanical name',
            'app_products.*.variety' => 'variety',
            'app_products.*.pack_size' => 'pack size',
            'app_products.*.quantity' => 'quantity',
            'applications.total_pallet' => 'total pallet',
            'applications.per_pallet_charge' => 'per pallet charge',
            'applications.total_pallet_fee' => 'total pallet fee',
            'pc_details.means_of_transport_id' => 'means of transport',
            'pc_details.exit_organization_id' => 'port of exit (Bangladesh)',
            'pc_details.purpose_id' => 'purpose of export',
            'pc_details.other_purpose_name' => 'other purpose name',
            'pc_details.consignor_name' => 'consignor name',
            'pc_details.consignor_address' => 'consignor address',
            'pc_details.origin_country_id' => 'origin country',
            'pc_details.origin_country_name' => 'origin country name',
            'pc_details.exporting_country_id' => 'exporting country',
            'pc_details.exporting_country_name' => 'exporting country name',
            'pc_details.contract_no' => 'contract no',
            'pc_details.contract_date' => 'contract date',
            'pc_details.entry_port' => 'point of entry',
            'pc_details.shipment_date' => 'expected date of shipment',
            'pc_details.treatment_type' => 'treatment type',
            'pc_details.fumigation_total_tablets' => 'no of tablets',
            'pc_details.fumigation_per_tablet_charge' => 'per tablet charge (with service charge)',
            'pc_details.treatment_details' => 'treatment details',
            'pc_details.distinguishing_mark' => 'distinguishing mark',
            'pc_details.godown_address' => 'address of godown',
            'applications.remarks' => 'nullable|max:150',
            'app_attachments.*.config_attachment_id' => "configuration attachment",
            'app_attachments.*.attachment' => 'attachment'
        ];
    }
}
