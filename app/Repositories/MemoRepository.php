<?php
namespace App\Repositories;

use App\Models\Memo;
use App\Repositories\Interfaces\MemoRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MemoRepository extends BaseRepository implements MemoRepositoryInterface
{
    private $with = [
        'attachment:id,name,extension,path', 'purpose:id,name', 'createdUser:id,fullname', 'updatedUser:id,fullname', 'deletedUser:id,fullname'
    ];

    public function __construct(Memo $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
        try {
            $memo = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }
        return $memo;
    }

    public function create(array $data)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        $attachmentRepository->setPath(config('app_constants.path.attachment'));
        $file = [
            'file' => $data['attachment']
        ];

        $data['memos']['attachment_id'] = $attachmentRepository->create($file);

        return parent::create($data['memos']);
    }

    public function update(array $data, $id)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        if(isset($data['attachment'])) {
            $attachmentRepository->setPath(config('app_constants.path.attachment'));
            $file = [
                'file' => $data['attachment']
            ];

            $memo = $this->getDetails($id);

            $attachmentRepository->delete($memo->attachment_id);
            $data['memos']['attachment_id'] = $attachmentRepository->create($file);
        }

        return parent::update($data['memos'], $id);
    }

    public function isUniqueWithApprovalDate($memoNo, $approvalDate, $excludedId) {
        $totalFound = $this->model
            ->select('ro_details.id AS ro_details_id', 'ro_details.application_id', 'memos.memo_no', 'memos.approval_date')
            ->join('ro_details','memos.id','=','ro_details.memo_id')
            ->where([
                ['ro_details.application_id', '!=', $excludedId],
                'memos.memo_no' => $memoNo,
                'memos.approval_date' => $approvalDate
            ])->count();

        return $totalFound > 0 ? false : true;
    }

}