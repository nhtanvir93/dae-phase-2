<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ekpay_transaction_id' => $this->ekpay_transaction_id,
            'order_no' => $this->order_no,
            'transaction_amount' => $this->transaction_amount,
            'echallan_details' => $this->echallan_details,
            'pi_payload' => $this->pi_payload,
            'pi_response' => $this->pi_response,
            'pi_code' => $this->pi_code,
            'pi_message' => $this->pi_message,
            'pi_token' => $this->pi_token,
            'ipn_response' => $this->ipn_response,
            'ipn_url' => $this->ipn_url,
            'ipn_code' => $this->ipn_code,
            'ipn_message' => $this->ipn_message,
            'visitor' => $this->visitor,
            'white_list_ip' => $this->white_list_ip,
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
            })
        ];
    }
}
