<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ProxyUserLog extends Model
{
    use SoftDeletes;

    protected $table = 'proxy_user_logs';

    public $timestamps = false;

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->from = Carbon::today()->toDateString();
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $query->to = Carbon::today()->toDateString();
            $query->updated_by = auth()->user()->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function originalUser()
    {
        return $this->belongsTo(Profile::class, 'original_user_id','user_id');
    }

    public function proxyUser()
    {
        return $this->belongsTo(Profile::class, 'proxy_user_id','user_id');
    }

    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
    }

    public function getFromAttribute($from) {
        $from = Carbon::parse($from);
        return $from->format(config('app_constants.date_format'));
    }

    public function getToAttribute($to) {
        if(!$to) {
            return null;
        }
        $to = Carbon::parse($to);
        return $to->format(config('app_constants.date_format'));
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by','user_id');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function updatedUser() {
        return $this->belongsTo(Profile::class, 'updated_by','user_id');
    }

    public function getUpdatedAtAttribute($updatedAt) {
        if(!$updatedAt) {
            return null;
        }
        $updatedAt = Carbon::parse($updatedAt);
        return $updatedAt->format(config('app_constants.datetime_format'));
    }

    public function deletedUser() {
        return $this->belongsTo(Profile::class, 'deleted_by','user_id');
    }

    public function getDeletedAtAttribute($deletedAt) {
        if(!$deletedAt) {
            return null;
        }
        $deletedAt = Carbon::parse($deletedAt);
        return $deletedAt->format(config('app_constants.datetime_format'));
    }
}
