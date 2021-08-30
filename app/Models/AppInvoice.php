<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class AppInvoice extends Model
{
    use SoftDeletes;

    protected $table = 'app_invoices';

    public $timestamps = false;

    protected $guarded = [];

    protected $with = [
        'attachment:id,name,extension,path', 'bankBranch:id,name'
    ];

    public $hidden = [
        'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'
    ];

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

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
    }

    public function bankBranch()
    {
        return $this->belongsTo(BankBranch::class);
    }

    public function setIssueDateAttribute($issueDate)
    {
        $issueDate = Carbon::createFromFormat(config('app_constants.date_format'), $issueDate)->toDateString();
        $this->attributes['issue_date'] = $issueDate;
    }

    public function getIssueDateAttribute($issueDate) {
        $issueDate = Carbon::parse($issueDate);
        return $issueDate->format(config('app_constants.date_format'));
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
