<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class StageFlow extends Model
{
    use SoftDeletes;
    use \Awobaz\Compoships\Compoships;

    protected $table = 'stage_flows';

    public $timestamps = false;

    protected $guarded = [];

    protected $with = [
        'stage:id,name,is_lab_test_type,is_inspection_type',
        'roles:id,process_flow_id,stage_level,role_id,user_from_stage', 'roles.role:id,name',
        'tasks:stage_flow_tasks.id,stage_flow_tasks.process_flow_id,stage_flow_tasks.stage_level,stage_flow_tasks.process_task_id',
        'tasks.processTask:id,name,remarks,is_scrutinize_task,is_addon,is_inspection_sms,is_scrutinize_task,separate_form_url,position',
        'tasks.taskFields:task_field_stages.id,task_field_stages.process_flow_id,task_field_stages.stage_level,task_field_stages.process_task_id,task_field_stages.task_field_id,task_field_stages.is_required,default_value,task_field_stages.forwarding_user_stage_level',
        'tasks.taskFields.taskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query',
        'buttons:stage_buttons.id,stage_buttons.process_flow_id,stage_buttons.stage_level,stage_buttons.process_button_id,stage_buttons.shown_for_role_ids,stage_buttons.alignment_position',
        'buttons.processButton:id,name,type'
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

    public function processFlow() {
        return $this->belongsTo(ProcessFlow::class);
    }

    public function stage() {
        return $this->belongsTo(Stage::class);
    }

    public function buttons() {
        return $this->hasMany(StageButton::class, ['process_flow_id', 'stage_level'], ['process_flow_id', 'level']);
    }

    public function tasks() {
        return $this->hasMany(StageFlowTask::class, ['process_flow_id', 'stage_level'], ['process_flow_id', 'level']);
    }

    public function roles() {
        return $this->hasMany(ProcessStageRole::class, ['process_flow_id', 'stage_level'], ['process_flow_id', 'level']);
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
