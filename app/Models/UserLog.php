<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserLog extends Model
{
    protected $table = 'user_logs';

    protected $guarded = [];

    public $timestamps = false;

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

    public function user() {
        return $this->belongsTo(Profile::class, 'user_id', 'user_id');
    }

    public function getLoginTimeAttribute($loginTime) {
        $loginTime = Carbon::parse($loginTime);
        return $loginTime->format(config('app_constants.datetime_format'));
    }

    public function getLogoutTimeAttribute($logoutTime) {
        if(!$logoutTime) {
            return null;
        }
        $logoutTime = Carbon::parse($logoutTime);
        return $logoutTime->format(config('app_constants.datetime_format'));
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by', 'user_id');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function updatedUser() {
        return $this->belongsTo(Profile::class, 'updated_by', 'user_id');
    }

    public function getUpdatedAtAttribute($updatedAt) {
        if(!$updatedAt) {
            return null;
        }
        $updatedAt = Carbon::parse($updatedAt);
        return $updatedAt->format(config('app_constants.datetime_format'));
    }

}
