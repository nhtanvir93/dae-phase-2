<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Notice extends Model
{
    use SoftDeletes;

    protected $table = 'notices';

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

    public function userType() {
        return $this->belongsTo(UserType::class);
    }

    public function attachment() {
        return $this->belongsTo(Attachment::class);
    }

    public function setFromDateAttribute($fromDate)
    {
        if(!$fromDate) {
            $this->attributes['from_date'] = null;
            return;
        }
        $fromDate = Carbon::createFromFormat(config('app_constants.date_format'), $fromDate)->toDateString();
        $this->attributes['from_date'] = $fromDate;
    }

    public function setToDateAttribute($toDate)
    {
        if(!$toDate) {
            $this->attributes['to_date'] = null;
            return;
        }
        $toDate = Carbon::createFromFormat(config('app_constants.date_format'), $toDate)->toDateString();
        $this->attributes['to_date'] = $toDate;
    }

    public function getFromDateAttribute($fromDate) {
        if(!$fromDate) {
            return null;
        }
        $fromDate = Carbon::parse($fromDate);
        return $fromDate->format(config('app_constants.date_format'));
    }

    public function getToDateAttribute($toDate) {
        if(!$toDate) {
            return null;
        }
        $toDate = Carbon::parse($toDate);
        return $toDate->format(config('app_constants.date_format'));
    }

    public function setDocIssueDateAttribute($docIssueDate)
    {
        if(!$docIssueDate) {
            $this->attributes['doc_issue_date'] = null;
            return;
        }
        $docIssueDate = Carbon::createFromFormat(config('app_constants.date_format'), $docIssueDate)->toDateString();
        $this->attributes['doc_issue_date'] = $docIssueDate;
    }

    public function getDocIssueDateAttribute($docIssueDate) {
        if(!$docIssueDate) {
            return null;
        }
        $docIssueDate = Carbon::parse($docIssueDate);
        return $docIssueDate->format(config('app_constants.date_format'));
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

    public function deletedUser() {
        return $this->belongsTo(Profile::class, 'deleted_by', 'user_id');
    }

    public function getDeletedAtAttribute($deletedAt) {
        if(!$deletedAt) {
            return null;
        }
        $deletedAt = Carbon::parse($deletedAt);
        return $deletedAt->format(config('app_constants.datetime_format'));
    }
}
