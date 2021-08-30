<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'app_type' => $this->when($this->whenLoaded('appType'), function() {
                return $this->appType;
            }),
            'applicant' => $this->when($this->whenLoaded('applicant'), function() {
                return $this->applicant;
            }),
            'organization' => $this->when($this->whenLoaded('organization'), function() {
                return $this->organization;
            }),
            'current_stage' => $this->current_stage,
            'app_holding_user' => $this->when($this->whenLoaded('app_holding_user'), function() {
                return $this->appHoldingUser;
            }),
            'app_holder_designation' => $this->when($this->whenLoaded('app_holder'), function() {
                return isset($this->appHolder->designation) ? $this->appHolder->designation->title : null;
            }),
            'current_status' => $this->current_status,
            'certificate_validity_date' => $this->certificate_validity_date,
            'product_fee' => $this->product_fee,
            'fumigation_fee' => $this->fumigation_fee,
            'total_pallet_fee' => $this->total_pallet_fee,
            'per_pallet_charge' => $this->per_pallet_charge,
            'total_pallet' => $this->total_pallet,
            'vat' => $this->vat,
            'vat_percentage' => $this->vat_percentage,
            'service_charge' => $this->service_charge,
            'total_fee' => $this->total_fee,
            'app_payable' => $this->app_payable,
            'paid_payment' => $this->paid_payment,
            'service_charge_payable' => $this->service_charge_payable,
            'vat_payable' => $this->vat_payable,
            'tax_payable' => $this->tax_payable,
            'is_paid' => $this->is_paid,
            'is_approved' => $this->is_approved,
            'cnf_ip_assignment_id' => $this->cnf_ip_assignment_id,
            'cnf_user_id' => $this->cnf_user_id,
            'approved_by' => $this->when($this->whenLoaded('approvedUser'), function() {
                return $this->approvedUser;
            }),
            'approval_date' => $this->approval_date,
            'is_cancelled' => $this->is_cancelled,
            'rejected_by' => $this->when($this->whenLoaded('rejectedUser'), function() {
                return $this->rejectedUser;
            }),
            'rejection_date' => $this->rejection_date,
            'last_comment' => $this->last_comment,
            'app_date' => $this->app_date,
            'payment_date' => $this->payment_date,
            'remarks' => $this->remarks,
            'certificate_no' => $this->certificate_no,
            'is_challan_done' => $this->is_challan_done,
            'is_lab_test_enabled' => $this->is_lab_test_enabled,
            'is_inspection_enabled' => $this->is_inspection_enabled,
            'qr_code' => $this->qrCode,
            'app_products' => $this->when($this->whenLoaded('appProducts'), function() {
                return $this->appProducts;
            }),
            'details' => $this->when($this->whenLoaded('details'), function() {
                return $this->details;
            }),
            'payments' => $this->when($this->whenLoaded('payments'), function() {
                return $this->payments;
            }),
            'appAttachments' => $this->when($this->whenLoaded('appAttachments'), function() {
                return $this->appAttachments;
            }),
            'attachmentAttributes' => $this->when($this->whenLoaded('attachmentAttributes'), function() {
                return $this->attachmentAttributes;
            }),
            'created_by' => $this->when($this->whenLoaded('createdUser'), function() {
                return $this->createdUser;
            }),
            'created_at' => $this->when($this->created_at, function() {
                return $this->created_at;
            }),
            'updated_by' => $this->when($this->updatedUser, function() {
                return $this->updatedUser;
            }),
            'updated_at' => $this->when($this->updated_at, function() {
                return $this->updated_at;
            }),
            'deleted_by' => $this->when($this->deletedUser, function() {
                return $this->deletedUser;
            }),
            'deleted_at' => $this->when($this->deleted_at, function() {
                return $this->deleted_at;
            })
        ];
    }
}
