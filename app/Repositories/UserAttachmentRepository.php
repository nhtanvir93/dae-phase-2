<?php
namespace App\Repositories;

use App\Models\UserAttachment;
use App\Repositories\Interfaces\UserAttachmentRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserAttachmentRepository extends BaseRepository implements UserAttachmentRepositoryInterface
{
    public function __construct(UserAttachment $model)
    {
        parent::__construct($model);
    }

    public function createAll($userAttachments, $userId) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        foreach($userAttachments as $userAttachment) {
            $attachmentRepository->setPath(config('app_constants.path.attachment'));
            $file = [
                'file' => $userAttachment['attachment']
            ];

            $this->deleteUploadedAttachment($userAttachment['config_attachment_id'], $userId);

            $singleUserAttachment = [
                'user_id' => $userId,
                'config_attachment_id' => $userAttachment['config_attachment_id'],
                'attachment_id' => $attachmentRepository->create($file)
            ];

            parent::create($singleUserAttachment);
        }

        $userRepository->checkAndUpdateIsProfileCompletedColumn($userId);
    }

    public function updateAll($userAttachments, $userId) {
        return DB::transaction(function() use ($userAttachments, $userId) {
            $this->createAll($userAttachments['userAttachments'], $userId);
        });
    }

    public function deleteUploadedAttachment($configAttachmentId, $userId) {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $configAttachmentId, $userId) {
            $userAttachments = $this->model->where([
                'config_attachment_id' => $configAttachmentId,
                'user_id' => $userId,
            ])->get();

            foreach($userAttachments as $userAttachment) {
                $attachmentRepository->delete($userAttachment->attachment_id);
                $userAttachment->delete();
            }
        });
    }

    public function getProfileAttachments($userId) {
        return $this->model->select('id','config_attachment_id','attachment_id')
            ->with(['attachment:id,name,extension,path'])
            ->where('user_id',$userId)
            ->get();
    }

    public function attachmentGiven($configAttachmentId, $userId) {
        $rowFound = $this->model->select('id','config_attachment_id','attachment_id')
            ->where([
                'config_attachment_id' => $configAttachmentId,
                'user_id' => $userId
            ])
            ->count();

        return $rowFound == 0 ? false : true;
    }
}