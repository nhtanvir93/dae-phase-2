<?php
namespace App\Repositories;

use App\Models\AppTaskField;
use App\Repositories\Interfaces\AppTaskFieldRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\AppTaskFieldResource;

class AppTaskFieldRepository extends BaseRepository implements AppTaskFieldRepositoryInterface
{
    private $with = [
        'taskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id',
        'taskField.dependentTaskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id',
        'attachment:id,name,extension,path', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname',
        'deletedUser:id,user_id,fullname'
    ];

    public function __construct(AppTaskField $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
        try {
            $appTaskField = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new AppTaskFieldResource($appTaskField) : $appTaskField;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function createAttachmentTaskField($applicationId, $taskFieldId, $data) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        $attachmentRepository->setPath(config('app_constants.path.attachment'));
        $file = [
            'file' => $data['attachment']
        ];

        $attachmentId = $attachmentRepository->create($file);

        return parent::create([
            'application_id' => $applicationId,
            'task_field_id' => $taskFieldId,
            'attachment_title' => $data['attachment_title'],
            'attachment_id' => $attachmentId
        ]);
    }

    public function updateAttachmentTaskField($applicationId, $taskFieldId, $file, $isAuthUser = false) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        $appTaskField = $this->getDetailsByApplicationIdAndTaskFieldId($applicationId, $taskFieldId, $isAuthUser);

        $attachmentRepository->setPath(config('app_constants.path.attachment'));
        $file = [
            'file' => $file['attachment']
        ];

        $attachmentId = isset($appTaskField->attachment_id) ?
            $attachmentRepository->update($file, $appTaskField->attachment_id)
            : $attachmentRepository->create($file);

        return parent::create([
            'application_id' => $applicationId,
            'task_field_id' => $taskFieldId,
            'attachment_title' => $file['attachment_title'],
            'attachment_id' => $attachmentId
        ]);
    }

    public function getDetailsByApplicationIdAndTaskFieldId($applicationId, $taskFieldId, $isAuthUser = false) {
        $loggedInUser = auth()->user();

        return $this->model
            ->where([
                'application_id' => $applicationId,
                'task_field_id' => $taskFieldId
            ])
            ->when($isAuthUser, function($query) use ($loggedInUser) {
                $query->where('created_by', $loggedInUser->id);
            })
            ->first();
    }

    public function getTaskFieldDetails($applicationId, $taskFieldIds) {
        return $this->model
            ->select('id', 'application_id', 'task_field_id', 'value_date', 'value_no', 'value_text', 'value_long_text', 'attachment_title'
                , 'attachment_id', 'created_by'
            )
            ->with(['createdUser:id,user_id,fullname', 'attachment:id,name,extension,path'])
            ->when(is_array($taskFieldIds), function($query) use ($taskFieldIds) {
                $query->whereIn('task_field_id', $taskFieldIds);
            })
            ->when(!is_array($taskFieldIds), function($query) use ($taskFieldIds) {
                $query->where('task_field_id', $taskFieldIds);
            })
            ->where([
                'application_id' => $applicationId
            ])
            ->whereNull('deleted_at')
            ->get();
    }

    private function deleteByApplicationIdAndTaskFieldId($applicationId, $taskFieldId, $isAuthUser = false) {
        $loggedInUser = auth()->user();

        return $this->model
            ->where([
                'application_id' => $applicationId,
                'task_field_id' => $taskFieldId
            ])
            ->when($isAuthUser, function($query) use ($loggedInUser) {
                $query->where('created_by', $loggedInUser->id);
            })
            ->first()
            ->delete();
    }

    public function updateByTaskFieldId($applicationId, $taskFieldId, $data, $isAuthUser = false) {
        $appTaskField = $this->getDetailsByApplicationIdAndTaskFieldId($applicationId, $taskFieldId, $isAuthUser);

        return $appTaskField ?
            parent::update($data, $appTaskField->id) : parent::create($data);
    }

    public function getAllTaskFieldDetails($applicationId) {
        return $this->model
            ->select('id', 'application_id', 'task_field_id', 'value_date', 'value_no', 'value_text', 'value_long_text', 'attachment_title'
                , 'attachment_id', 'created_by'
            )
            ->with(['createdUser:id,user_id,fullname', 'attachment:id,name,extension,path'])
            ->where([
                'application_id' => $applicationId
            ])
            ->whereNull('deleted_at')
            ->get();
    }
}