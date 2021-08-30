<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidOrganizationOnTransportType;
use App\Rules\CheckRequiredAttachmentsOnPurpose;
use App\Rules\EnglishName;
use App\Rules\EmptyAppProduct;
use App\Rules\ValidSeedNonSeedPurpose;
use App\Rules\ValidConfigAttachmentAttribute;

class IpDetailRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getIpConfigAttachmentString($ipConfigAttachments) {
        $ipConfigAttachmentString = '';

        foreach($ipConfigAttachments as $ipConfigAttachment) {
            $ipConfigAttachmentString .= $ipConfigAttachment->config_attachment_id . ',';
        }

        return substr($ipConfigAttachmentString,0,strlen($ipConfigAttachmentString) - 1);
    }

    public function rules()
    {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $ipConfigAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(config('app_constants.app_types.IP'));
        $ipConfigAttachmentString = $this->getIpConfigAttachmentString($ipConfigAttachments);
        $max = $ipConfigAttachments->count();

        $applicationId = $this->route('ip_application',0);

        $ipDetails = request()->get('ip_details');

        $appAttachmentService = resolve('App\Services\AppAttachmentService',[
            'appTypeId' => config('app_constants.app_types.IP'),
            'userId' =>  auth()->user()->id,
            'purposeId' => $ipDetails['purpose_id'] ? $ipDetails['purpose_id'] : 0
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
            'ip_details.consignee_name' => ['required', 'max:150', new EnglishName],
            'ip_details.consignee_address' => 'required|max:150',
            'ip_details.contact_person_name' => ['required', 'max:150', new EnglishName],
            'ip_details.contact_person_phone' => 'required|max:20',
            'ip_details.contact_person_email' => 'required|email:filter|max:150',
            'ip_details.contact_person_details' => 'required|max:150',
            'app_products' => ['required', 'array', 'min:1', new EmptyAppProduct],
            'app_products.*.product_type_id' => 'required|exists:app_product_types,product_type_id,app_type_id,' . config('app_constants.app_types.IP') . ',deleted_at,NULL',
            'app_products.*.product_id' => 'nullable|exists:products,id,is_active,1',
            'app_products.*.product_name' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.botanical_name' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.variety' => ['nullable', 'max:150', new EnglishName],
            'app_products.*.pack_size' => ['required', 'max:150'],
            'app_products.*.quantity' => 'required|gt:0',
            'ip_details.consignor_name' => ['required', 'max:150', new EnglishName],
            'ip_details.consignor_address' => ['required', 'max:150', new EnglishName],
            'ip_details.origin_country_id' => 'required_without:ip_details.origin_country_name|exists:countries,id',
            'ip_details.origin_country_name' => 'required_without:ip_details.origin_country_id|max:150',
            'ip_details.exporting_country_id' => 'required_without:ip_details.exporting_country_name|exists:countries,id',
            'ip_details.exporting_country_name' => 'required_without:ip_details.exporting_country_id|max:150',
            'ip_details.arrival_date' => 'required|date_format:d/m/Y',
            'ip_details.means_of_transport_id' => 'required|exists:config_means_of_transports,id',
            'ip_details.entry_organization_id' => ['required', new ValidOrganizationOnTransportType($ipDetails)],
            'ip_details.product_category_id' => ['required_without:ip_details.other_product_category_name',
                'exists:product_categories,id'],
            'ip_details.other_product_category_name' => 'required_without:ip_details.product_category_id|max:150',
            'ip_details.purpose_id' => ['required', 'exists:config_purposes,id', new ValidSeedNonSeedPurpose($ipDetails)],
            'ip_details.variety_id' => 'required_without:ip_details.other_variety_name|exists:varieties,id',
            'ip_details.other_variety_name' => 'required_without:ip_details.variety_id|max:150',
            'ip_details.locality' => 'nullable|max:150',
            'applications.remarks' => 'nullable|max:150'
        ];

        if($applicationId > 0) {
            $rules2['app_attachments'] = ['nullable', 'array', "max:$max",
                new ValidConfigAttachmentAttribute(request()->get('app_attachments')),
                new CheckRequiredAttachmentsOnPurpose($ipDetails, config('app_constants.app_types.IP'), $applicationId)];
            $rules2['app_attachments.*.config_attachment_id'] = "required|distinct|in:$ipConfigAttachmentString";
            $rules2['app_attachments.*.attributes'] = 'nullable|array';
            $rules2['app_attachments.*.attachment'] = 'required|mimes:jpg,jpeg,png,pdf|max:2000';
        } else {
            $rules2['app_attachments'] = [$ruleForAppAttachment, 'array', "max:$max",
                new ValidConfigAttachmentAttribute(request()->get('app_attachments')),
                new CheckRequiredAttachmentsOnPurpose($ipDetails, config('app_constants.app_types.IP'), $applicationId)];
            $rules2['app_attachments.*.config_attachment_id'] = "$ruleForAppAttachment|distinct|in:$ipConfigAttachmentString";
            $rules2['app_attachments.*.attributes'] = 'nullable|array';
            $rules2['app_attachments.*.attachment'] = "$ruleForAppAttachment|mimes:jpg,jpeg,png,pdf|max:2000";
        }

        $rules = array_merge($rules1, $rules2);

        return $rules;
    }

    public function attributes(){
        return [
            'applications.organization_id' => 'organization',
            'ip_details.consignee_name' => 'consignee name',
            'ip_details.consignee_address' => 'consignee address',
            'ip_details.contact_person_name' => 'contact person name',
            'ip_details.contact_person_phone' => 'contact person phone',
            'ip_details.contact_person_email' => 'contact person email',
            'ip_details.contact_person_details' => 'contact person details',
            'app_products.*.product_type_id' => 'product type',
            'app_products.*.product_id' => 'product',
            'app_products.*.product_name' => 'product name',
            'app_products.*.botanical_name' => 'botanical name',
            'app_products.*.variety' => 'variety',
            'app_products.*.pack_size' => 'pack size',
            'app_products.*.quantity' => 'quantity',
            'ip_details.consignor_name' => 'consignor name',
            'ip_details.consignor_address' => 'consignor address',
            'ip_details.origin_country_id' => 'country of origin',
            'ip_details.exporting_country_id' => 'exporting country',
            'ip_details.arrival_date' => 'date of arrival',
            'ip_details.means_of_transport_id' => 'means of transport',
            'ip_details.entry_organization_id' => 'entry organization',
            'ip_details.product_category_id' => 'product category id',
            'ip_details.other_product_category_name' => 'other product category name',
            'ip_details.purpose_id' => 'purpose',
            'ip_details.other_purpose_name' => 'other purpose name',
            'ip_details.variety_id' => 'variety',
            'ip_details.other_variety_name' => 'other variety name',
            'ip_details.locality' => 'locality',
            'applications.remarks' => 'remarks',
            'app_attachments.*.config_attachment_id' => "configuration attachment",
            'app_attachments.*.attachment' => 'attachment'
        ];
    }
}

