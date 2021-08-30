<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Profile extends Model
{
    use SoftDeletes;

    protected $table = 'profiles';

    protected $guarded = [];

    public $timestamps = false;

    protected $hidden = [
        'created_by', 'created_at', 'updated_by', 'updated_at', 'deleted_by', 'deleted_at'
    ];

    protected $appends = array('applicant_type');

    const EXPORTER = "EXPORTER";
    const IMPORTER = "IMPORTER";
    const BOTH = "BOTH";
    const DAE_OFFICIAL = "DAE_OFFICIAL";
    const CNF_AGENT = "CNF_AGENT";

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->user_id = auth()->user()->id;
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $query->updated_by = auth()->user()->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function getApplicantTypeAttribute()
    {
        if(isset($this->erc_no) && isset($this->irc_no)) {
            return self::BOTH;
        } elseif (isset($this->erc_no)) {
            return self::EXPORTER;
        } elseif (isset($this->irc_no)) {
            return self::IMPORTER;
        } elseif (isset($this->cnf_firm_name)) {
            return self::CNF_AGENT;
        } else {
            return self::DAE_OFFICIAL;
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function roles() {
        return $this->hasMany(UserRole::class,'user_id','user_id')
            ->join('roles', 'user_role.role_id', '=', 'roles.id');
    }

    public function permanentAddress()
    {
        return $this->belongsTo(Address::class, 'permanent_address_id');
    }

    public function presentAddress()
    {
        return $this->belongsTo(Address::class, 'present_address_id');
    }

    public function photoAttachment()
    {
        return $this->belongsTo(Attachment::class, 'photo_attachment_id');
    }

    public function signatureAttachment()
    {
        return $this->belongsTo(Attachment::class, 'signature_attachment_id');
    }

    public function contactPersonPhoto()
    {
        return $this->belongsTo(Attachment::class, 'contact_person_photo_attachment_id');
    }

    public function contactPersonSignatureAttachment()
    {
        return $this->belongsTo(Attachment::class, 'contact_person_signature_attachment_id');
    }

    public function setTradeLicenceExpiryDateAttribute($tradeLicenceExpiryDate)
    {
        if(!$tradeLicenceExpiryDate) {
            $this->attributes['trade_licence_expiry_date'] = null;
            return;
        }
        $tradeLicenceExpiryDate = Carbon::createFromFormat(config('app_constants.date_format'), $tradeLicenceExpiryDate)->toDateString();
        $this->attributes['trade_licence_expiry_date'] = $tradeLicenceExpiryDate;
    }

    public function setErcExpiryDateAttribute($ercExpiryDate)
    {
        if(!$ercExpiryDate) {
            $this->attributes['erc_expiry_date'] = null;
            return;
        }
        $ercExpiryDate = Carbon::createFromFormat(config('app_constants.date_format'), $ercExpiryDate)->toDateString();
        $this->attributes['erc_expiry_date'] = $ercExpiryDate;
    }

    public function setIrcExpiryDateAttribute($ircExpiryDate)
    {
        if(!$ircExpiryDate) {
            $this->attributes['irc_expiry_date'] = null;
            return;
        }
        $ircExpiryDate = Carbon::createFromFormat(config('app_constants.date_format'), $ircExpiryDate)->toDateString();
        $this->attributes['irc_expiry_date'] = $ircExpiryDate;
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
