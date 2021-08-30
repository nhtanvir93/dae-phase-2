<?php
namespace App\Repositories;

use App\Models\IpDetail;
use App\Repositories\Interfaces\IpDetailRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Events\AppPaymentCompleted;
use App\Events\ApplicationUpdatedAfterRecheck;

class IpDetailRepository extends BaseRepository implements IpDetailRepositoryInterface
{
    public function __construct(IpDetail $model)
    {
        parent::__construct($model);
    }

    public function create(array $data)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        return DB::transaction(function()
                use ($applicationRepository, $appProductRepository, $appAttachmentRepository, $configAppTypeAttachmentRepository, $data) {
            $data['applications']['app_type_id'] = config('app_constants.app_types.IP');
            $data['applications']['applicationable_type'] = config('app_constants.models.IP');
            $applicationId = $applicationRepository->create($data['applications']);

            $configAppTypeAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(config('app_constants.app_types.IP'));
            $configAppTypeAttachments = $configAppTypeAttachments->pluck('config_attachment_id')->toArray();

            $appProductRepository->createAll($data['app_products'], $applicationId);
            $appAttachmentRepository->createAll($data['app_attachments'], $applicationId, $configAppTypeAttachments);
            $appAttachmentRepository->addMissingProfileAttachments($data['app_attachments'], $applicationId,
                $configAppTypeAttachments);

            $data['ip_details']['application_id'] = $applicationId;
            $id = parent::create($data['ip_details']);
            $applicationRepository->update(['applicationable_id' => $id], $applicationId);

            $applicationRepository->updateFeeInfo($applicationId);

            return $applicationId;
        });
    }

    public function update(array $data, $applicationId)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        return DB::transaction(function()
                use ($applicationRepository, $appProductRepository, $appAttachmentRepository, $configAppTypeAttachmentRepository, $data, $applicationId) {
            $applicationRepository->update($data['applications'], $applicationId);
            $appProductRepository->updateAll($data['app_products'], $applicationId);
            $appAttachmentRepository->updateAll($data['app_attachments'], $applicationId);

            $id = $this->getId($applicationId);

            parent::update($data['ip_details'],$id);

            $applicationRepository->updateFeeInfo($applicationId);

            $application = $applicationRepository->getDetails($applicationId);

            if($application->current_status == config('app_constants.app_statuses.RECHECKED')) {
                ApplicationUpdatedAfterRecheck::dispatch($applicationId, 'Forwarded');
            }

            return $applicationId;
        });
    }

    public function getDetails($id) {
        try {
            return $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }

    public function getDetailsByApplicationId($applicationId) {
        try {
            return $this->model->where('application_id',$applicationId)->firstOrFail();
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }

    public function getId($applicationId) {
        try {
            $ipDetail = $this->model->where('application_id', $applicationId)->firstOrFail();
            return $ipDetail->id;
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }

    public function updateByApplicationId($applicationId, $data) {
        $detailId = $this->getId($applicationId);

        return parent::update($data, $detailId);
    }
}