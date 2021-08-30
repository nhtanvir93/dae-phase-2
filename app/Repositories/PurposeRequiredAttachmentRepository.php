<?php
namespace App\Repositories;

use App\Models\PurposeRequiredAttachment;
use App\Repositories\Interfaces\PurposeRequiredAttachmentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class PurposeRequiredAttachmentRepository extends BaseRepository implements PurposeRequiredAttachmentRepositoryInterface
{
    public function __construct(PurposeRequiredAttachment $model)
    {
        parent::__construct($model);
    }

    public function createAll($configAttachments, $appTypeId, $purposeId) {
        foreach($configAttachments as $configAttachmentId) {
            $purposeRequiredAttachment = [
                'app_type_id' => $appTypeId,
                'purpose_id' => $purposeId,
                'config_attachment_id' => $configAttachmentId
            ];

            parent::create($purposeRequiredAttachment);
        }
    }

    public function updateAll($configAttachments, $appTypeId, $purposeId) {
        $this->deleteAll($appTypeId, $purposeId);
        $this->createAll($configAttachments, $appTypeId, $purposeId);
    }

    public function deleteAll($appTypeId, $purposeId) {
        $this->model->where([
            'app_type_id' => $appTypeId,
            'purpose_id' => $purposeId
        ])->delete();
    }

    public function getAppTypeAndPurposeWise($appTypeId, $purposeId) {
        return $this->model->with(['appType:id,name', 'purpose:id,name', 'configAttachment:id,name'])
            ->select('id', 'app_type_id', 'purpose_id', 'config_attachment_id')
            ->where([
                'app_type_id' => $appTypeId,
                'purpose_id' => $purposeId
            ])
            ->get();
    }
}