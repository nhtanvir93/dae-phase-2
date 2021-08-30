<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RecoverPassword extends Model
{
    protected $table = 'recover_passwords';

    protected $guarded = [];

    public $timestamps = false;

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->created_at = Carbon::now();
            $query->token_last_validity = Carbon::now()->addMinutes(30);
        });
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function getTokenLastValidityAttribute($tokenLastValidity) {
        $tokenLastValidity = Carbon::parse($tokenLastValidity);
        return $tokenLastValidity->format(config('app_constants.datetime_format'));
    }
}
