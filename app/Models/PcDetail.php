<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class PcDetail extends Model
{
    use SoftDeletes;

    protected $table = 'pc_details';

    protected $with = [
        'originCountry:id,name', 'exportingCountry:id,name', 'entryOrganization:id,name', 'exitOrganization:id,name',
        'meansOfTransport:id,name', 'purpose:id,name', 'productType:id,name'
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
            $data = request()->get('pc_details');

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

    public function application()
    {
        return $this->morphOne(Application::class, 'applicationable');
    }

    public function rootApplication()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }

    public function originCountry()
    {
        return $this->belongsTo(Country::class, 'origin_country_id');
    }

    public function exportingCountry()
    {
        return $this->belongsTo(Country::class, 'exporting_country_id');
    }

    public function meansOfTransport()
    {
        return $this->belongsTo(ConfigMeansOfTransport::class, 'means_of_transport_id');
    }

    public function exitOrganization()
    {
        return $this->belongsTo(Organization::class, 'exit_organization_id');
    }

    public function purpose()
    {
        return $this->belongsTo(ConfigPurpose::class, 'purpose_id');
    }

    public function entryOrganization()
    {
        return $this->belongsTo(Organization::class, 'entry_organization_id');
    }

    public function productType() {
        return $this->belongsTo(ProductType::class);
    }

    public function setContractDateAttribute($contractDate)
    {
        if(!$contractDate) {
            $this->attributes['contract_date'] = null;
            return;
        }
        $contractDate = Carbon::createFromFormat(config('app_constants.date_format'), $contractDate)->toDateString();
        $this->attributes['contract_date'] = $contractDate;
    }

    public function getContractDateAttribute($contractDate) {
        $contractDate = Carbon::parse($contractDate);
        return $contractDate->format(config('app_constants.date_format'));
    }

    public function setShipmentDateAttribute($shipmentDate)
    {
        if(!$shipmentDate) {
            $this->attributes['shipment_date'] = null;
            return;
        }
        $shipmentDate = Carbon::createFromFormat(config('app_constants.date_format'), $shipmentDate)->toDateString();
        $this->attributes['shipment_date'] = $shipmentDate;
    }

    public function getShipmentDateAttribute($shipmentDate) {
        $shipmentDate = Carbon::parse($shipmentDate);
        return $shipmentDate->format(config('app_constants.date_format'));
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

    public function setProformaInvoiceDateAttribute($proformaInvoiceDate)
    {
        if(!$proformaInvoiceDate) {
            $this->attributes['proforma_invoice_date'] = null;
            return;
        }
        $proformaInvoiceDate = Carbon::createFromFormat(config('app_constants.date_format'), $proformaInvoiceDate)->toDateString();
        $this->attributes['proforma_invoice_date'] = $proformaInvoiceDate;
    }

    public function getProformaInvoiceDateAttribute($proformaInvoiceDate) {
        if(!$proformaInvoiceDate) {
            return null;
        }
        $proformaInvoiceDate = Carbon::parse($proformaInvoiceDate);
        return $proformaInvoiceDate->format(config('app_constants.date_format'));
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
