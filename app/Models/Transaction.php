<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Profile;

class Transaction extends Model
{
    protected $table = 'transactions';
    public $timestamps = false;

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $query->updated_by = auth()->user()->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function payment() {
        return $this->hasOne(Payment::class,'transaction_id');
    }

    public function setPiPayloadAttribute($piPayload)
    {
        if(isset($piPayload) && is_array($piPayload)) {
            $this->attributes['pi_payload'] = json_encode($piPayload);
        }
    }

    public function setPiResponseAttribute($piResponse)
    {
        if(isset($piResponse) && is_array($piResponse)) {
            $this->attributes['pi_response'] = json_encode($piResponse);
        }
    }

    public function setIpnResponseAttribute($ipnResponse)
    {
        if(isset($ipnResponse) && is_array($ipnResponse)) {
            $this->attributes['ipn_response'] = json_encode($ipnResponse);
        }
    }

    public function setEchallanDetailsAttribute($echallanDetails)
    {
        if(isset($echallanDetails) && is_array($echallanDetails)) {
            $this->attributes['echallan_details'] = json_encode($echallanDetails);
        }
    }

    public function echallan() {
        return $this->hasOne(ChallanTransaction::class,
            'ekpay_transaction_id', 'ekpay_transaction_id');
    }

    public function getPiPayloadAttribute($piPayload) {
        return json_decode($piPayload);
    }

    public function getPiResponseAttribute($piResponse) {
        return json_decode($piResponse);
    }

    public function getIpnResponseAttribute($ipnResponse) {
        return json_decode($ipnResponse);
    }

    public function getEchallanDetailsAttribute($echallanDetails) {
        return json_decode($echallanDetails);
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function updatedUser() {
        return $this->belongsTo(Profile::class, 'updated_by');
    }

    public function getUpdatedAtAttribute($updatedAt) {
        if(!$updatedAt) {
            return null;
        }
        $updatedAt = Carbon::parse($updatedAt);
        return $updatedAt->format(config('app_constants.datetime_format'));
    }
}
