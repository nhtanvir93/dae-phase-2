<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AppTaskFieldProcessService
{
    const TYPE_VALUE_FIELDS = [
        'BOOLEAN' => 'value_no',
        'COMMENT' => 'value_text',
        'DATE' => 'value_date',
        'INDIVIDUAL_LONG_TEXT' => 'value_long_text',
        'IS_INSPECTION_ENABLED' => 'value_no',
        'IS_LAB_TEST_ENABLED' => 'value_no',
        'LONG_TEXT' => 'value_long_text',
        'MANUAL_CHALAN' => 'value_no',
        'MULTI_DATE' => 'value_date',
        'MULTI_LONG_TEXT' => 'value_long_text',
        'MULTI_NUMBER' => 'value_no',
        'MULTI_SELECT' => 'value_no',
        'MULTI_TEXT' => 'value_text',
        'NUMBER' => 'value_no',
        'SELECT' => 'value_no',
        'STAGE_USER' => 'value_no',
        'TEXT' => 'value_text'
    ];

    const APP_TYPE_MODELS = [
        '',
        ['model' => 'App\Models\PcDetail', 'table' => 'pc_details'],
        ['model' => 'App\Models\RoDetail', 'table' => 'ro_details'],
        ['model' => 'App\Models\IpDetail', 'table' => 'ip_details']
    ];

    public function getTaskFieldValue($inputType) {
        return self::TYPE_VALUE_FIELDS[$inputType];
    }

    public function createOrUpdate($applicationId, $data) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appTaskFieldRepository = resolve('App\Repositories\Interfaces\AppTaskFieldRepositoryInterface');
        $commonService = resolve('App\Services\CommonService');

        $application = $applicationRepository->getDetails($applicationId);
        $taskFields = $applicationRepository->getCurrentStageTaskFields($applicationId);

        $model = null;
        $tableColumns = [];

        if(array_key_exists($application->app_type_id, self::APP_TYPE_MODELS)) {
            $model = resolve(self::APP_TYPE_MODELS[$application->app_type_id]['model']);
            $model = $model->find($application->applicationable_id);

            $table = self::APP_TYPE_MODELS[$application->app_type_id]['table'];
            $tableColumns = $commonService->getColumnNames($table);
        }

        if($taskFields->count() == 0) {
            return false;
        }

        return DB::transaction(function()
                use ($applicationId, $taskFields, $data, $appTaskFieldRepository, $applicationRepository, $tableColumns, $model) {
            $comment = null;

            foreach($data['task_fields'] as $appTaskField) {
                $taskField = $taskFields->where('id', $appTaskField['id']);

                if($taskField->count() > 0) {
                    $taskField = $taskField->first();

                    $data = [
                        'application_id' => $applicationId,
                        'task_field_id' => $taskField['id']
                    ];

                    switch ($taskField['input_type']) {

                        case config('app_constants.task_field_input_types.COMMENT') :

                            $comment = $appTaskField['value'];

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];
                            $appTaskFieldRepository->create($data);
                            break;

                        case config('app_constants.task_field_input_types.STAGE_USER') :
                        case config('app_constants.task_field_input_types.BOOLEAN') :
                        case config('app_constants.task_field_input_types.DATE') :
                        case config('app_constants.task_field_input_types.LONG_TEXT') :
                        case config('app_constants.task_field_input_types.NUMBER') :
                        case config('app_constants.task_field_input_types.SELECT') :
                        case config('app_constants.task_field_input_types.TEXT') :

                            if(count($tableColumns) > 0 && in_array($taskField['task_field_name'], $tableColumns)) {
                                $model->update([
                                    "{$taskField['task_field_name']}" => $appTaskField['value']
                                ]);
                            }

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];
                            $appTaskFieldRepository->updateByTaskFieldId($applicationId, $taskField['id'], $data);
                            break;

                        case config('app_constants.task_field_input_types.IS_INSPECTION_ENABLED') :

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];
                            $appTaskFieldRepository->updateByTaskFieldId($applicationId, $taskField['id'], $data);

                            $applicationRepository->update([
                              'is_inspection_enabled' => $appTaskField['value']
                            ], $applicationId);

                            break;

                        case config('app_constants.task_field_input_types.IS_LAB_TEST_ENABLED') :

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];
                            $appTaskFieldRepository->updateByTaskFieldId($applicationId, $taskField['id'], $data);

                            $applicationRepository->update([
                                'is_lab_test_enabled' => $appTaskField['value']
                            ], $applicationId);

                            break;

                        case config('app_constants.task_field_input_types.MANUAL_CHALAN') :

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];

                            $previousTaskField = $appTaskFieldRepository->getDetailsByApplicationIdAndTaskFieldId($applicationId, $appTaskField['id']);

                            $application = $applicationRepository->getDetails($applicationId);

                            if($previousTaskField) {
                                $fumigationFee = $application->fumigation_fee + $appTaskField['value'] - $previousTaskField->value;
                                $totalFee = $application->total_fee + $appTaskField['value'] - $previousTaskField->value;
                                $paidPayment = $application->paid_payment + $appTaskField['value'] - $previousTaskField->value;
                            } else {
                                $fumigationFee = $application->fumigation_fee + $appTaskField['value'];
                                $totalFee = $application->total_fee + $appTaskField['value'];
                                $paidPayment = $application->paid_payment + $appTaskField['value'];
                            }

                            $applicationRepository->update([
                                'fumigation_fee' => $fumigationFee,
                                'total_fee' => $totalFee,
                                'paid_payment' => $paidPayment
                            ], $applicationId);

                            $appTaskFieldRepository->updateByTaskFieldId($applicationId, $taskField['id'], $data);

                            break;

                        case config('app_constants.task_field_input_types.MULTI_DATE') :
                        case config('app_constants.task_field_input_types.MULTI_LONG_TEXT') :
                        case config('app_constants.task_field_input_types.MULTI_NUMBER') :
                        case config('app_constants.task_field_input_types.MULTI_SELECT') :
                        case config('app_constants.task_field_input_types.MULTI_TEXT') :

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];
                            $appTaskFieldRepository->create($data);
                            break;

                        case config('app_constants.task_field_input_types.INDIVIDUAL_LONG_TEXT') :

                            $data[self::TYPE_VALUE_FIELDS[$taskField['input_type']]] = $appTaskField['value'];
                            $appTaskFieldRepository->updateByTaskFieldId($applicationId, $taskField['id'], $data, true);
                            break;

                        case config('app_constants.task_field_input_types.FILE') :

                            $appTaskFieldRepository->createAttachmentTaskField($applicationId, $taskField['id'], [
                                'attachment_title' => $appTaskField['attachment_title'],
                                'attachment' => $appTaskField['attachment']
                            ]);
                            break;
                    }
                }
            }

            return $comment;
        });
    }

    public function setTaskFieldValues($applicationId, $taskFields) {

        if(!$taskFields) {
            return null;
        }

        $appTaskFieldRepository = resolve('App\Repositories\Interfaces\AppTaskFieldRepositoryInterface');
        
        $taskFieldIds = array_column($taskFields, 'task_field_id');
        $appTaskFields = $appTaskFieldRepository->getTaskFieldDetails($applicationId, $taskFieldIds);

        foreach($taskFields as $key => $taskField) {
            switch ($taskField['task_field']['input_type']) {
                case config('app_constants.task_field_input_types.STAGE_USER') :
                case config('app_constants.task_field_input_types.BOOLEAN') :
                case config('app_constants.task_field_input_types.IS_INSPECTION_ENABLED') :
                case config('app_constants.task_field_input_types.IS_LAB_TEST_ENABLED') :
                case config('app_constants.task_field_input_types.DATE') :
                case config('app_constants.task_field_input_types.LONG_TEXT') :
                case config('app_constants.task_field_input_types.NUMBER') :
                case config('app_constants.task_field_input_types.SELECT') :
                case config('app_constants.task_field_input_types.TEXT') :

                    if($appTaskFields->count() == 0) {
                        $taskFields[$key]['value'] = null;
                    } else {
                        $currentAppTaskFields = $appTaskFields->where('task_field_id', $taskField['task_field_id']);

                        if($currentAppTaskFields->count() > 0) {
                            $taskFields[$key]['task_field']['value'] = $currentAppTaskFields->first()->value;
                        } else {
                            $taskFields[$key]['task_field']['value'] = null;
                        }
                    }

                    break;

                case config('app_constants.task_field_input_types.INDIVIDUAL_LONG_TEXT') :

                    if($appTaskFields->count() == 0) {
                        $taskFields[$key]['task_field']['value'] = null;
                    } else {
                        $currentAppTaskFields = $appTaskFields->where('task_field_id', $taskField['task_field_id'])->where('created_by', auth()->user()->id);

                        if($currentAppTaskFields->count() > 0) {
                            $taskFields[$key]['task_field']['value'] = $currentAppTaskFields->first()->value;
                        } else {
                            $taskFields[$key]['task_field']['value'] = null;
                        }
                    }

                    break;

                default :

                    $taskFields[$key]['value'] = null;

                    if($appTaskFields->count() == 0) {
                        $taskFields[$key]['task_field']['previous_values'] = null;
                    } else {
                        $currentAppTaskFields = $appTaskFields->where('task_field_id', $taskField['task_field_id']);

                        if($currentAppTaskFields->count() > 0) {
                            $taskFields[$key]['task_field']['previous_values'] = $currentAppTaskFields->all();
                        } else {
                            $taskFields[$key]['task_field']['previous_values'] = null;
                        }
                    }

                    break;
            }
        }

        return $taskFields;
    }
}