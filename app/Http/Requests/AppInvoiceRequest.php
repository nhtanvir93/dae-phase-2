<?php

namespace App\Http\Requests;

use App\Rules\CheckPaidForChallanType;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidBankBranch;
use App\Rules\CheckMaximumChalanGiven;
use App\Rules\DuplicateChalanCheck;
use Illuminate\Support\Facades\Validator;

class AppInvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $appInvoice = $appInvoiceRepository->getDetails($this->route('app_invoice'));

        $appInvoiceId = $appInvoice ? $appInvoice->id : 0;

        $applicationId = $appInvoiceId == 0 ? request()->get('application_id') : $appInvoice->application_id;
        $application = $applicationRepository->getDetails($applicationId);

        $rules1 = [];

        $isVatEnabled = config('app_constants.payment_options.is_vat_required');

        $oldInvoiceAmount = 0;

        $chalanTypes = $tempChalanTypes = config('app_constants.chalan_types');

        $amount = 0;

        $challanType = request()->get('chalan_type');
        $maxChalans = in_array($challanType, $chalanTypes) ?
            config('app_constants.total_' . strtolower($challanType) . '_chalan') : 0;
        $totalGivenChalans = isset($applicationId) && isset($challanType) ?
            $appInvoiceRepository->getTotalAddedChalanCount($applicationId, $challanType) : 0;

        if($totalGivenChalans > 0) {
            $totalGivenChalans = $appInvoiceId > 0 ? --$totalGivenChalans : $totalGivenChalans;
        }

        if($appInvoiceId == 0) {
            $appIdExistRule = isset($application->cnf_ip_assignment_id) ?
                'exists:applications,id,is_paid,0,cnf_user_id,' . auth()->user()->id . ',deleted_at,NULL'
                : 'exists:applications,id,is_paid,0,applicant_id,' . auth()->user()->id . ',deleted_at,NULL';

            $rules1 = [
                'application_id' => ['required', "$appIdExistRule",
                    new CheckMaximumChalanGiven($challanType, $totalGivenChalans, $maxChalans)]
            ];
        } else {
            $oldInvoiceAmount = $appInvoice->amount;
        }

        $appPayable = $application ? $application->app_payable + $oldInvoiceAmount : 0;
        $vatPayable = $application ? $application->vat_payable + $oldInvoiceAmount : 0;

        if($appInvoiceId == 0 && in_array($challanType, $chalanTypes)) {
            $amount = $challanType == $chalanTypes['VAT'] ? $vatPayable : (
                $challanType == $chalanTypes['APPLICATION_FEE'] ? $appPayable : 0
            );

            $rules1['application_id'][] = new CheckPaidForChallanType($challanType, $amount);
        } elseif ($appInvoiceId > 0) {
            $amount = $appInvoice->chalan_type == $chalanTypes['VAT'] ? $vatPayable : (
                $challanType == $chalanTypes['APPLICATION_FEE'] ? $appPayable : 0
            );
        }

        $amountRule = $maxChalans - $totalGivenChalans == 1 ? "min:$amount" : '';

        if(!$isVatEnabled) {
            unset($tempChalanTypes['VAT']);
        }

        if($appInvoiceId > 0) {
            $tempChalanTypes = [$appInvoice->chalan_type];
        }

        $rules2 = [
            'chalan_type' => 'required|in:' . implode(',', $tempChalanTypes),
            'bank_id' => 'required|exists:banks,id,deleted_at,NULL',
            'district_id' => 'required|exists:districts,id,deleted_at,NULL',
            'bank_branch_id' => ['required', new ValidBankBranch(request()->all())],
            'chalan_no' => ['required', 'max:150', new DuplicateChalanCheck(request()->all(), $appInvoiceId)],
            'amount' => ['required', 'numeric', 'gt:0', $amountRule],
            'issue_date' => 'required|date_format:d/m/Y',
            'attachments.invoice' => $appInvoiceId == 0 ?
                'required|mimes:jpg,jpeg,png,pdf|max:1000' : 'nullable|mimes:jpg,jpeg,png,pdf|max:1000',
            'remarks' => 'nullable|max:150'
        ];

        $rules = array_merge($rules1, $rules2);

        return $rules;
    }

    public function attributes()
    {
        return [
            'bank_id' => 'bank',
            'district_id' => 'district',
            'bank_branch_id' => 'bank branch'
        ];
    }
}
