<?php
namespace App\Repositories;

use App\Models\ConfigAppTypeAttachment;
use App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ConfigAppTypeAttachmentRepository extends BaseRepository implements ConfigAppTypeAttachmentRepositoryInterface
{
    public function __construct(ConfigAppTypeAttachment $model)
    {
        parent::__construct($model);
    }

    public function createAll($appTypes, $configAttachmentId) {
        foreach($appTypes as $appTypeId) {
            $appTypeAttachment = [
                'app_type_id' => $appTypeId,
                'config_attachment_id' => $configAttachmentId,
            ];

            parent::create($appTypeAttachment);
        }
    }

    public function updateAll($appTypes, $configAttachmentId) {
        $this->deleteAll($configAttachmentId);
        $this->createAll($appTypes, $configAttachmentId);
    }

    public function deleteAll($configAttachmentId) {
        $this->model->where('config_attachment_id', $configAttachmentId)->delete();
    }

    public function validAppTypeAttachment($appTypeId, $configAttachmentId) {
        $totalRowFound = $this->model->where([
            'app_type_id' => $appTypeId,
            'config_attachment_id' => $configAttachmentId
        ])->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function getId($appTypeId, $configAttachmentId) {
        $result = $this->model->where([
            'app_type_id' => $appTypeId,
            'config_attachment_id' => $configAttachmentId
        ])->first();

        return $result ? $result->id : false;
    }

    public function getAppTypeConfigAttachments($appTypeId) {

        return $this->model
            ->select('config_app_type_attachments.id', 'config_app_type_attachments.config_attachment_id',
                'app_types.name AS app_type', 'config_attachments.name AS config_attachment',
                'config_app_type_attachments.is_required')
            ->join('app_types', 'config_app_type_attachments.app_type_id', '=', 'app_types.id')
            ->join('config_attachments', 'config_app_type_attachments.config_attachment_id', '=', 'config_attachments.id')
            ->where('config_app_type_attachments.app_type_id', $appTypeId)
            ->whereNull('config_attachments.deleted_at')
            ->orderBy('config_app_type_attachments.position', 'asc')
            ->get();
    }

    public function getRequiredAppTypeConfigAttachments($appTypeId) {

        return $this->model
            ->select('config_app_type_attachments.id', 'config_app_type_attachments.config_attachment_id',
                'app_types.name AS app_type', 'config_attachments.name AS config_attachment',
                'config_app_type_attachments.is_required')
            ->join('app_types', 'config_app_type_attachments.app_type_id', '=', 'app_types.id')
            ->join('config_attachments', 'config_app_type_attachments.config_attachment_id', '=', 'config_attachments.id')
            ->where([
                'config_app_type_attachments.app_type_id' => $appTypeId,
                'config_app_type_attachments.is_required' => 1
            ])
            ->orderBy('config_app_type_attachments.position', 'asc')
            ->get();
    }

    public function updateRequiredColumn($configAttachments, $appTypeId) {
        $appTypeAttachments = $this->getAppTypeConfigAttachments($appTypeId);

        return DB::transaction(function() use ($appTypeAttachments, $configAttachments, $appTypeId) {
            foreach($appTypeAttachments as $appTypeAttachment) {
                if(in_array($appTypeAttachment->config_attachment_id, $configAttachments)) {
                    $singleAppTypeAttachment = [
                        'is_required' => true
                    ];
                } else {
                    $singleAppTypeAttachment = [
                        'is_required' => false
                    ];
                }

                parent::update($singleAppTypeAttachment, $appTypeAttachment->id);
            }
        });
    }

    public function sortAppWiseAttachment($configAttachments, $appTypeId) {

        $appTypeAttachments = $this->getAppTypeConfigAttachments($appTypeId);

        return DB::transaction(function() use ($appTypeAttachments, $configAttachments, $appTypeId) {
            foreach($appTypeAttachments as $appTypeAttachment) {
                $position = array_search($appTypeAttachment->config_attachment_id, $configAttachments) + 1;
                $configAppTypeAttachment = [
                    'position' => $position
                ];

                parent::update($configAppTypeAttachment, $appTypeAttachment->id);
            }
        });
    }

    public function getAppTypeAttachmentWithAttributes($appTypeId) {
        return $this->model
            ->with(['attachmentAttributes:id,name,config_attachment_id,type,label,is_mandatory'])
            ->select('config_app_type_attachments.id', 'config_app_type_attachments.config_attachment_id',
                'app_types.name AS app_type', 'config_attachments.name AS config_attachment',
                'config_app_type_attachments.is_required')
            ->join('app_types', 'config_app_type_attachments.app_type_id', '=', 'app_types.id')
            ->join('config_attachments', 'config_app_type_attachments.config_attachment_id', '=', 'config_attachments.id')
            ->where([
                'config_app_type_attachments.app_type_id' => $appTypeId
            ])
            ->whereNull('config_attachments.deleted_at')
            ->orderBy('config_app_type_attachments.position', 'asc')
            ->get();
    }
}