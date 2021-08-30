<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidMobileNo;
use App\Rules\EnglishName;
use App\Rules\BanglaName;
use App\Rules\ValidSignature;
use App\Rules\ValidPhoto;
use Illuminate\Http\Request;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        $user = auth()->user();

        $profileRepository = resolve('App\Repositories\Interfaces\ProfileRepositoryInterface');
        $profile = $profileRepository->getDetails($user->id);

        $isCnf = $user->user_type_id == config('app_constants.user_type.cnf')
            && $user->company_type == config('app_constants.company_types.CNF');

        $isPersonalApplicant = $user->user_type_id == config('app_constants.user_type.applicant')
            && $user->company_type == config('app_constants.company_types.PERSONAL');

        $isCompanyApplicant = $user->user_type_id == config('app_constants.user_type.applicant')
            && $user->company_type == config('app_constants.company_types.ORGANIZATIONAL');

        $isDaeOfficial = $user->user_type_id == config('app_constants.user_type.dae_user')
            && $user->company_type == config('app_constants.company_types.PERSONAL');

        $rules = [
            //'users.username' => "required|unique:users,username,$user->id,id,deleted_at,NULL|min:6|max:150",
            'users.email' => "required|unique:users,email,$user->id,id,deleted_at,NULL|email:filter|max:150",
            'users.mobile' => ['required', new ValidMobileNo]
        ];

        if($isDaeOfficial) {
            $rules['users.organization_id'] = 'required|exists:organizations,id';
            $rules['users.designation_id'] = 'required|exists:designations,id';
            $rules['users.superior_id'] = 'nullable|exists:users,id';
        } elseif($isCnf) {
            $userInputs = request()->get('users');
            $cnfOrganizationId = isset($userInputs['organization_id']) ? $userInputs['organization_id'] : 0;

            $cardNoUniqueRule = $cnfOrganizationId ?
                "unique:users,card_no,$user->id,id,organization_id,$cnfOrganizationId,deleted_at,NULL" : '';

            $rules['users.card_no'] = ['required', $cardNoUniqueRule, 'min:3', 'max:150'];
            $rules['users.organization_id'] = 'required|exists:organizations,id,deleted_at,NULL';
            $rules['users.area_vat_code_id'] = 'required|exists:area_vat_codes,id,deleted_at,NULL';
        } elseif($isPersonalApplicant || $isCompanyApplicant) {
            $rules['users.area_vat_code_id'] = 'required|exists:area_vat_codes,id,deleted_at,NULL';
        }

        if($isCompanyApplicant) {
            $rules['profiles.fullname'] = ['required', new EnglishName, 'max:150'];
        } elseif($isCnf) {
            $rules['profiles.fullname'] = ['required', new EnglishName, 'max:150'];
            $rules['profiles.cnf_firm_name'] = ['required', new EnglishName, 'max:150'];
            $rules['profiles.designation_name'] = ['required', new EnglishName, 'max:150'];
        } else {
            $rules['profiles.fullname'] = ['required', new EnglishName, 'max:150'];
            $rules['profiles.bn_fullname'] = ['nullable', new BanglaName, 'max:150'];
            $rules['profiles.father_name'] = ['required', new EnglishName, 'max:150'];
            $rules['profiles.mother_name'] = ['required', new EnglishName, 'max:150'];
        }

        if($profile) {
            $rules['attachments.photo'] = ['nullable', 'mimes:jpg,jpeg,png', 'max:1000', new ValidPhoto];
            $rules['attachments.signature'] = ['nullable', 'mimes:jpg,jpeg,png', 'max:1000', new ValidSignature];
        } else {
            $rules['attachments.photo'] = ['required', 'mimes:jpg,jpeg,png', 'max:1000', new ValidPhoto];
            $rules['attachments.signature'] = ['required', 'mimes:jpg,jpeg,png', 'max:1000', new ValidSignature];
        }

        $rules['addresses.present_address.district_id'] = 'required|exists:districts,id';
        $rules['addresses.present_address.upazilla_id'] = 'nullable|exists:upazillas,id';
        $rules['addresses.present_address.description'] = 'required|max:150';

        if($isPersonalApplicant) {
            $rules['addresses.permanent_address.district_id'] = 'required|exists:districts,id';
            $rules['addresses.permanent_address.upazilla_id'] = 'nullable|exists:upazillas,id';
            $rules['addresses.permanent_address.description'] = 'required|max:150';
        }

        if($user->user_type_id == config('app_constants.user_type.applicant')) {
            if($user->company_type != config('app_constants.company_types.ORGANIZATIONAL')) {
                $rules['profiles.nid'] = 'required|max:150';
            }

            $rules['profiles.trade_licence'] = 'required|max:150';
            $rules['profiles.trade_licence_expiry_date'] = 'required|date_format:d/m/Y';
            $rules['profiles.applicant_type'] = 'required|in:EXPORTER,IMPORTER,BOTH';

            if($request->profiles['applicant_type'] == 'IMPORTER' || $request->profiles['applicant_type'] == 'BOTH') {
                $rules['profiles.irc_no'] = 'required|max:150';
                $rules['profiles.irc_expiry_date'] = 'required|date_format:d/m/Y';
            } else {
                $rules['profiles.irc_no'] = 'nullable|max:150';
                $rules['profiles.irc_expiry_date'] = 'nullable|date_format:d/m/Y';
            }

            if($request->profiles['applicant_type'] == 'EXPORTER' || $request->profiles['applicant_type'] == 'BOTH') {
                $rules['profiles.erc_no'] = 'required|max:150';
                $rules['profiles.erc_expiry_date'] = 'required|date_format:d/m/Y';
                $rules['profiles.dae_exporter_no'] = 'nullable|max:150';
            } else {
                $rules['profiles.erc_no'] = 'nullable|max:150';
                $rules['profiles.erc_expiry_date'] = 'nullable|date_format:d/m/Y';
            }

            $rules['profiles.contact_person_name'] = ['required', new EnglishName, 'max:150'];
            $rules['profiles.bn_contact_person_name'] = ['nullable', new BanglaName, 'max:150'];
            $rules['profiles.contact_person_designation'] = 'required|max:150';
            $rules['profiles.contact_person_email'] = 'required|email:filter|max:150';
            $rules['profiles.contact_person_phone'] = 'required|max:20';
        }

        if($user->user_type_id == config('app_constants.user_type.applicant') && !$profile) {
            $rules['attachments.contact_person_photo'] = ['required', 'mimes:jpg,jpeg,png', 'max:1000', new ValidPhoto];
            $rules['attachments.contact_person_signature'] = ['required', 'mimes:jpg,jpeg,png', 'max:1000', new ValidSignature];
        } elseif($user->user_type_id == config('app_constants.user_type.applicant') && $profile) {
            $rules['attachments.contact_person_photo'] = ['nullable', 'mimes:jpg,jpeg,png', 'max:1000', new ValidPhoto];
            $rules['attachments.contact_person_signature'] = ['nullable', 'mimes:jpg,jpeg,png', 'max:1000', new ValidSignature];
        }

        return $rules;
    }

    public function attributes(){
        $user = auth()->user();

        $isCnf = $user->user_type_id == config('app_constants.user_type.cnf')
            && $user->company_type == config('app_constants.company_types.CNF');

        $isCompanyApplicant = $user->user_type_id == config('app_constants.user_type.applicant')
            && $user->company_type == config('app_constants.company_types.ORGANIZATIONAL');

        return [
            'users.username' => 'username',
            'users.email' => 'email',
            'users.mobile' => 'mobile',
            'users.company_type' => 'company type',
            'users.designation_id' => 'designation',
            'users.organization_id' => $isCnf ? 'working port' : 'organization',
            'users.superior_id' => 'supervisor',
            'profiles.fullname' => $isCompanyApplicant ? 'organization name' : (
                $isCnf ? 'agent name' : 'fullname'
            ),
            'profiles.designation_name' => 'designation',
            'profiles.card_no' => 'card no',
            'profiles.bn_fullname' => 'bangla fullname',
            'profiles.father_name' => 'father name',
            'profiles.mother_name' => 'mother name',
            'profiles.nid' => 'nid',
            'profiles.trade_licence' => 'trade licence',
            'profiles.trade_licence_expiry_date' => 'trade licence expiry date',
            'profiles.applicant_type' => 'applicant type',
            'profiles.erc_no' => 'erc no',
            'profiles.erc_expiry_date' => 'erc expiry date',
            'profiles.irc_no' => 'irc no',
            'profiles.irc_expiry_date' => 'irc expiry date',
            'profiles.dae_exporter_no' => 'dae exporter no',
            'attachments.photo' => 'photo',
            'attachments.signature' => 'signature',
            'profiles.contact_person_name' => 'contact person name',
            'profiles.bn_contact_person_name' => 'bangla contact person name',
            'profiles.contact_person_designation' => 'contact person designation',
            'attachments.contact_person_photo' => 'contact person photo',
            'attachments.contact_person_signature' => 'contact person signature',
            'profiles.contact_person_email' => 'contact person email',
            'profiles.contact_person_phone' => 'contact person phone',
            'addresses.present_address.district_id' => 'district',
            'addresses.present_address.upazilla_id' => 'upazilla',
            'addresses.present_address.description' => 'description',
            'addresses.permanent_address.district_id' => 'district',
            'addresses.permanent_address.upazilla_id' => 'upazilla',
            'addresses.permanent_address.description' => 'description'
        ];
    }
}
