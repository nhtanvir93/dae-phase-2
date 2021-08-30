<?php
namespace App\Repositories;

use App\Models\AppAttachment;
use App\Repositories\Interfaces\AppAttachmentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class AppAttachmentRepository extends BaseRepository implements AppAttachmentRepositoryInterface
{
    public function __construct(AppAttachment $model)
    {
        parent::__construct($model);
    }

    public function createAll($appAttachments, $applicationId) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $attachmentAttributeRepository = resolve('App\Repositories\Interfaces\AttachmentAttributeRepositoryInterface');

        $updatedAttachmentAttributes = [];

        foreach($appAttachments as $appAttachment) {
            $attachmentRepository->setPath(config('app_constants.path.attachment'));
            $file = [
                'file' => $appAttachment['attachment']
            ];

            $singleAppAttachment = [
                'application_id' => $applicationId,
                'config_attachment_id' => $appAttachment['config_attachment_id'],
                'attachment_id' => $attachmentRepository->create($file)
            ];

            if(isset($appAttachment['attributes']) && count($appAttachment['attributes']) > 0) {
                $tempUpdatedAttachmentAttributes = $attachmentAttributeRepository->createAll($appAttachment['attributes'], $appAttachment['config_attachment_id'], $applicationId);
                $updatedAttachmentAttributes = array_merge($updatedAttachmentAttributes, $tempUpdatedAttachmentAttributes);
            }

            parent::create($singleAppAttachment);
        }

        return $updatedAttachmentAttributes;
    }

    public function updateAll($appAttachments, $applicationId) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $attachmentAttributeRepository = resolve('App\Repositories\Interfaces\AttachmentAttributeRepositoryInterface');

        $updatedAttachmentAttributes = [];

        foreach($appAttachments as $appAttachment) {
            if($appAttachment['attachment']) {
                $attachmentRepository->setPath(config('app_constants.path.attachment'));
                $file = [
                    'file' => $appAttachment['attachment']
                ];

                $result = $this->getAppAttachment($applicationId, $appAttachment['config_attachment_id']);

                if($result) {
                    $attachmentRepository->delete($result->attachment_id);
                }

                if($result) {
                    $singleAppAttachment = [
                        'application_id' => $applicationId,
                        'config_attachment_id' => $appAttachment['config_attachment_id'],
                        'attachment_id' => $attachmentRepository->create($file),
                        'is_processed' => 0,
                        'is_valid' => 0,
                        'processed_by' => null,
                        'process_datetime' => null
                    ];
                } else {
                    $singleAppAttachment = [
                        'application_id' => $applicationId,
                        'config_attachment_id' => $appAttachment['config_attachment_id'],
                        'attachment_id' => $attachmentRepository->create($file)
                    ];
                }

                $result ? parent::update($singleAppAttachment, $result->id) : parent::create($singleAppAttachment);
            }

            if(isset($appAttachment['attributes']) && count($appAttachment['attributes']) > 0) {
                $tempUpdatedAttachmentAttributes = $attachmentAttributeRepository->updateAll($appAttachment['attributes'], $appAttachment['config_attachment_id'], $applicationId);
                $updatedAttachmentAttributes = array_merge($updatedAttachmentAttributes, $tempUpdatedAttachmentAttributes);
            }
        }

        return $updatedAttachmentAttributes;
    }

    public function getAppAttachment($applicationId, $configAttachmentId) {
        return $this->model->where([
            'application_id' => $applicationId,
            'config_attachment_id' => $configAttachmentId
        ])->first();
    }

    public function getAllAppAttachments($applicationId) {
        return $this->model
            ->select('id', 'application_id', 'config_attachment_id', 'attachment_id', 'is_processed', 'is_valid', 'processed_by')
            ->with(['configAttachment:id,name', 'attachment:id,name,extension,path', 'processedByUser:id,user_id,fullname'])
            ->where([
                'application_id' => $applicationId
            ])->get();
    }

    public function addMissingProfileAttachments($appAttachments, $applicationId, $configAppTypeAttachments) {
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');

        $profileAttachments = $userAttachmentRepository->getProfileAttachments(auth()->user()->id);
        $givenConfigAttachments = array_column($appAttachments,'config_attachment_id');

        foreach($profileAttachments as $profileAttachment) {
            if(!in_array($profileAttachment->config_attachment_id,$givenConfigAttachments)
                && in_array($profileAttachment->config_attachment_id,$configAppTypeAttachments)) {
                $singleAppAttachment = [
                    'application_id' => $applicationId,
                    'config_attachment_id' => $profileAttachment->config_attachment_id,
                    'attachment_id' => $profileAttachment->attachment_id
                ];

                parent::create($singleAppAttachment);
            }
        }
    }

    public function deleteAllUsingConfigAttachment($applicationId, $configAttachmentId) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        $appAttachments = $this->model->where([
            'application_id' => $applicationId,
            'config_attachment_id' => $configAttachmentId
        ])->get();

        return DB::transaction(function() use ($attachmentRepository, $appAttachments) {
            foreach($appAttachments as $appAttachment) {
                parent::delete($appAttachment->id);
                $attachmentRepository->delete($appAttachment->attachment_id);
            }
        });
    }

    public function scrutinizeAttachments($data) {
        return DB::transaction(function() use ($data) {
            foreach($data['app_attachments'] as $appAttachment) {
                $appAttachmentId = $appAttachment['id'];
                unset($appAttachment['id']);

                $appAttachment['is_processed'] = 1;
                $appAttachment['processed_by'] = auth()->user()->id;

                parent::update($appAttachment, $appAttachmentId);
            }
        });
    }
}