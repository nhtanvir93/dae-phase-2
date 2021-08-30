<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ChallanTransaction extends Model
{
    public $timestamps = false;

    public $hidden = [
        'created_at', 'created_by', 'updated_at', 'updated_by'
    ];

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

    public function setAuthPayloadAttribute($authPayload)
    {
        if(isset($authPayload) && is_array($authPayload)) {
            $this->attributes['auth_payload'] = json_encode($authPayload);
        }
    }

    public function setAuthResponseAttribute($authResponse)
    {
        if(isset($authResponse) && is_array($authResponse)) {
            $this->attributes['auth_response'] = json_encode($authResponse);
        }
    }

    public function setChallanPayloadAttribute($challanPayload)
    {
        if(isset($challanPayload) && is_array($challanPayload)) {
            $this->attributes['challan_payload'] = json_encode($challanPayload);
        }
    }

    public function setChallanResponseAttribute($challanResponse)
    {
        if(isset($challanResponse) && is_array($challanResponse)) {
            $this->attributes['challan_response'] = json_encode($challanResponse);
        }
    }

    public function getAuthPayloadAttribute($authPayload) {
        return json_decode($authPayload);
    }

    public function getAuthResponseAttribute($authResponse) {
        return json_decode($authResponse);
    }

    public function getChallanPayloadAttribute($challanPayload) {
        return json_decode($challanPayload);
    }

    public function getChallanResponseAttribute($challanResponse) {
        return json_decode($challanResponse);
    }

    public function createdBy()
    {
        return $this->belongsTo(Profile::class, 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo(Profile::class, 'updated_by');
    }

    public function deletedBy()
    {
        return $this->belongsTo(Profile::class, 'deleted_by');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'ekpay_transaction_id', 'ekpay_transaction_id');
    }
}
