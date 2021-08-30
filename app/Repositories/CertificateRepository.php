<?php
namespace App\Repositories;

use App\Models\Certificate;
use App\Repositories\Interfaces\CertificateRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CertificateResource;

class CertificateRepository extends BaseRepository implements CertificateRepositoryInterface
{
    private $with = [
        'appType:id,name', 'attachment:id,name,extension,path', 'createdUser:id,user_id,fullname',
        'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Certificate $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'app_type_id', 'certificate_no', 'issue_date')
            ->with(['appType:id,name,short_name'])
            ->orderBy('issue_date', 'DESC')
            ->get();
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'app_types.name',
            'certificates.certificate_no',
            'certificates.issue_date'
        ];

        $likeQueryKeys = [
            'certificates.certificate_no'
        ];

        $zeroExcludedKeys = [
            'app_types.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $this->model->count();
        $queryFiltered = DB::table('certificates')
            ->leftJoin('app_types','certificates.app_type_id','=','app_types.id')
            ->select('certificates.id', 'certificates.certificate_no', DB::raw('DATE_FORMAT(certificates.issue_date, "%d/%m/%Y") AS issue_date'),
                'app_types.name AS app_type')
            ->whereNull('certificates.deleted_at')
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false)
    {
        try {
            $certificate = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new CertificateResource($certificate) : $certificate;
    }

    public function create(array $data)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $data) {

            $attachmentRepository->setPath(config('app_constants.path.certificate'));
            $file = [
                'file' => $data['attachments']['certificate']
            ];

            $data['attachment_id'] = $attachmentRepository->create($file);

            unset($data['attachments']);

            return parent::create($data);
        });
    }

    public function update(array $data, $id)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $data, $id) {
            $certificate = $this->getDetails($id);

            if(isset($data['attachments']['certificate'])) {
                $attachmentRepository->setPath(config('app_constants.path.certificate'));
                $file = [
                    'file' => $data['attachments']['certificate']
                ];

                $data['attachment_id'] = isset($certificate->attachment_id) ?
                    $attachmentRepository->update($file, $certificate->attachment_id)
                    : $attachmentRepository->create($file);

                unset($data['attachments']);
            }

            return parent::update($data, $id);
        });
    }

    public function delete($id)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $id) {
            $certificate = $this->getDetails($id);

            $attachmentRepository->delete($certificate->attachment_id);

            return parent::delete($id);
        });
    }

    public function searchCertificate($appTypeId, $certificateNo) {
        return $this->model
            ->with(['appType:id,name', 'attachment:id,name,extension,path'])
            ->select('id','app_type_id','issue_date','certificate_no','attachment_id')
            ->where([
                'app_type_id' => $appTypeId,
                'certificate_no' => $certificateNo
            ])
            ->first();
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }
}