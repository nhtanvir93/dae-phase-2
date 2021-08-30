<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\User;

class Application extends Model
{
    use SoftDeletes;

    protected $table = 'applications';

    protected $hidden = [
        'form_id',
        'pivot'
    ];

    protected $guarded = [];

    public $timestamps = false;

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            if(!$query->applicant_id) {
                $query->applicant_id = auth()->user()->id;
            }
            $query->current_stage = 0;
            $query->current_status = 'NOT_PAID';
            $query->app_date = Carbon::today()->toDateString();
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $query->updated_by = optional(auth()->user())->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function appType()
    {
        return $this->belongsTo(AppType::class);
    }

    public function applicantUser()
    {
        return $this->belongsTo(User::class, 'applicant_id');
    }

    public function applicant()
    {
        return $this->belongsTo(Profile::class, 'applicant_id','user_id');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function appHoldingUser()
    {
        return $this->belongsTo(Profile::class, 'app_holding_user_id','user_id');
    }

    public function appHolder()
    {
        return $this->belongsTo(User::class, 'app_holding_user_id');
    }

    public function approvedUser()
    {
        return $this->belongsTo(Profile::class, 'approved_by','user_id');
    }

    public function rejectedUser()
    {
        return $this->belongsTo(Profile::class, 'rejected_by','user_id');
    }

    public function parentApplication()
    {
        return $this->belongsTo(Application::class, 'parent_application_id');
    }

    public function details()
    {
        return $this->morphTo(__FUNCTION__,'applicationable_type', 'applicationable_id');
    }

    public function cnfAssignments() {
        return $this->hasMany(CnfIpAssignment::class,'ip_application_id');
    }

    public function appProducts() {
        return $this->hasMany(AppProduct::class);
    }

    public function attachmentAttributes() {
        return $this->hasMany(AttachmentAttribute::class);
    }

    public function appAttachments() {
        return $this->hasMany(AppAttachment::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function ipApplications() {
        return $this->hasMany(RoIpApplication::class,'ro_application_id','id');
    }

    public function getIsPaidAttribute($isPaid) {
        return (bool)$isPaid;
    }

    public function getIsApprovedAttribute($isApproved) {
        return (bool)$isApproved;
    }

    public function getIsCancelledAttribute($isCancelled) {
        return (bool)$isCancelled;
    }

    public function getAppDateAttribute($appDate) {
        if(!$appDate) {
            return null;
        }
        $appDate = Carbon::parse($appDate);
        return $appDate->format(config('app_constants.date_format'));
    }

    public function getPaymentDateAttribute($paymentDate) {
        if(!$paymentDate) {
            return null;
        }
        $paymentDate = Carbon::parse($paymentDate);
        return $paymentDate->format(config('app_constants.date_format'));
    }

    public function getApprovalDateAttribute($approvalDate) {
        if(!$approvalDate) {
            return null;
        }
        $approvalDate = Carbon::parse($approvalDate);
        return $approvalDate->format(config('app_constants.date_format'));
    }

    public function getRejectionDateAttribute($rejectionDate) {
        if(!$rejectionDate) {
            return null;
        }
        $rejectionDate = Carbon::parse($rejectionDate);
        return $rejectionDate->format(config('app_constants.date_format'));
    }

    public function getCertificateValidityDateAttribute($certificateValidityDate) {
        if(!$certificateValidityDate) {
            return null;
        }
        $certificateValidityDate = Carbon::parse($certificateValidityDate);
        return $certificateValidityDate->format(config('app_constants.date_format'));
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

    public function challanTransaction()
    {
        return $this->hasOne(ChallanTransaction::class);
    }
}
