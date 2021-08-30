<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class RoDetail extends Model
{
    use SoftDeletes;

    protected $table = 'ro_details';

    protected $with = [
        'originCountry:id,name', 'exportingCountry:id,name', 'purpose:id,name,is_research',
        'extensionLetterAttachment:id,name,extension,path',
        'memo:id,memo_no,approval_date,attachment_id', 'ipApplications', 'ipApplications.details',
        'ipApplications.appType:id,name', 'ipApplications.applicant:id,user_id,fullname',
        'ipApplications.organization:id,name', 'ipApplications.appHoldingUser:id,user_id,fullname',
        'ipApplications.appProducts', 'ipApplications.appProducts.product:id,product_type_id,name,botanical_name',
        'ipApplications.appProducts.product.productType:id,name,unit_id', 'ipApplications.appProducts.product.productType.unit:id,name',
        'ipApplications.appProducts.photoAttachment:id,name,extension,path', 'ipApplications.appProducts.entryOrganization',
        'ipApplications.payments.transaction', 'ipApplications.payments.invoice',
        'ipApplications.createdUser:id,user_id,fullname', 'ipApplications.updatedUser:id,user_id,fullname', 'ipApplications.deletedUser:id,user_id,fullname'
    ];

    public $hidden = [
        'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'
    ];

    protected $guarded = [];

    public $timestamps = false;

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $data = request()->get('ro_details');

            if(isset($data['origin_country_id'])) {
                $query->origin_country_name = null;
            } elseif (isset($data['origin_country_name'])) {
                $query->origin_country_id = null;
            }

            if(isset($data['exporting_country_id'])) {
                $query->exporting_country_name = null;
            } elseif (isset($data['exporting_country_name'])) {
                $query->exporting_country_id = null;
            }

            $query->updated_by = auth()->user()->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function extensionLetterAttachment()
    {
        return $this->belongsTo(Attachment::class,'extension_attachment_id');
    }

    public function application()
    {
        return $this->morphOne(Application::class, 'applicationable');
    }

    public function rootApplication()
    {
        return $this->belongsTo(Application::class);
    }

    public function originCountry() {
        return $this->belongsTo(Country::class,'origin_country_id');
    }

    public function exportingCountry() {
        return $this->belongsTo(Country::class,'exporting_country_id');
    }

    public function purpose() {
        return $this->belongsTo(ConfigPurpose::class,'purpose_id');
    }

    public function memo() {
        return $this->belongsTo(Memo::class);
    }

    public function ipApplications() {
        return $this->belongsToMany(Application::class, 'ro_ip_application',
            'ro_application_id','ip_application_id','application_id')
            ->whereNull('ro_ip_application.deleted_at');
    }

    public function setInspectionDateAttribute($inspectionDate)
    {
        if(!$inspectionDate) {
            $this->attributes['inspection_date'] = null;
            return;
        }
        $inspectionDate = Carbon::createFromFormat(config('app_constants.date_format'), $inspectionDate)->toDateString();
        $this->attributes['inspection_date'] = $inspectionDate;
    }

    public function getInspectionDateAttribute($inspectionDate) {
        if(!$inspectionDate) {
            return null;
        }
        $inspectionDate = Carbon::parse($inspectionDate);
        return $inspectionDate->format(config('app_constants.date_format'));
    }

    public function setTreatmentDateAttribute($treatmentDate)
    {
        if(!$treatmentDate) {
            $this->attributes['treatment_date'] = null;
            return;
        }
        $treatmentDate = Carbon::createFromFormat(config('app_constants.date_format'), $treatmentDate)->toDateString();
        $this->attributes['treatment_date'] = $treatmentDate;
    }

    public function getTreatmentDateAttribute($treatmentDate) {
        if(!$treatmentDate) {
            return null;
        }
        $treatmentDate = Carbon::parse($treatmentDate);
        return $treatmentDate->format(config('app_constants.date_format'));
    }

    public function setPcCertificationDateAttribute($pcCertificationDate)
    {
        if(!$pcCertificationDate) {
            $this->attributes['pc_certification_date'] = null;
            return;
        }
        $pcCertificationDate = Carbon::createFromFormat(config('app_constants.date_format'), $pcCertificationDate)->toDateString();
        $this->attributes['pc_certification_date'] = $pcCertificationDate;
    }

    public function getPcCertificationDateAttribute($pcCertificationDate) {
        if(!$pcCertificationDate) {
            return null;
        }
        $pcCertificationDate = Carbon::parse($pcCertificationDate);
        return $pcCertificationDate->format(config('app_constants.date_format'));
    }

    public function setLcOpeningDateAttribute($lcOpeningDate)
    {
        if(!$lcOpeningDate) {
            $this->attributes['lc_opening_date'] = null;
            return;
        }
        $lcOpeningDate = Carbon::createFromFormat(config('app_constants.date_format'), $lcOpeningDate)->toDateString();
        $this->attributes['lc_opening_date'] = $lcOpeningDate;
    }

    public function getLcOpeningDateAttribute($lcOpeningDate) {
        if(!$lcOpeningDate) {
            return null;
        }
        $lcOpeningDate = Carbon::parse($lcOpeningDate);
        return $lcOpeningDate->format(config('app_constants.date_format'));
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
