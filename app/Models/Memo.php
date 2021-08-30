<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Memo extends Model
{
    use SoftDeletes;

    protected $table = 'memos';

    protected $with = [
        'attachment:id,name,extension,path'
    ];

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

    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
    }

    public function purpose()
    {
        return $this->belongsTo(ConfigPurpose::class, 'purpose_id');
    }

    public function setApprovalDateAttribute($approvalDate)
    {
        if(!$approvalDate) {
            $this->attributes['approval_date'] = null;
            return;
        }
        $approvalDate = Carbon::createFromFormat(config('app_constants.date_format'), $approvalDate)->toDateString();
        $this->attributes['approval_date'] = $approvalDate;
    }

    public function getApprovalDateAttribute($approvalDate) {
        $approvalDate = Carbon::parse($approvalDate);
        return $approvalDate->format(config('app_constants.date_format'));
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

    public function deletedUser() {
        return $this->belongsTo(Profile::class, 'deleted_by');
    }

    public function getDeletedAtAttribute($deletedAt) {
        if(!$deletedAt) {
            return null;
        }
        $deletedAt = Carbon::parse($deletedAt);
        return $deletedAt->format(config('app_constants.datetime_format'));
    }
}
