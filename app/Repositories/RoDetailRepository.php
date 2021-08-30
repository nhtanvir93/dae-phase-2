<?php
namespace App\Repositories;

use App\Models\RoDetail;
use App\Repositories\Interfaces\RoDetailRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Events\ApplicationUpdatedAfterRecheck;

class RoDetailRepository extends BaseRepository implements RoDetailRepositoryInterface
{
    const TABLE_NAME = 'ro_details';

    public function __construct(RoDetail $model)
    {
        parent::__construct($model);
    }

    public function create(array $data)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');
        $memoRepository = resolve('App\Repositories\Interfaces\MemoRepositoryInterface');
        $roIpApplicationRepository = resolve('App\Repositories\Interfaces\RoIpApplicationRepositoryInterface');
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');
        $commonService = resolve('App\Services\CommonService');
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function()
                use ($memoRepository, $applicationRepository, $appProductRepository, $appAttachmentRepository,
                    $roIpApplicationRepository, $configAppTypeAttachmentRepository, $data, $cnfIpAssignmentRepository, $commonService,
                    $attachmentRepository) {
            if(isset($data['applications']['cnf_ip_assignment_id'])) {
                $cnfIpAssignment = $cnfIpAssignmentRepository->getDetails($data['applications']['cnf_ip_assignment_id'], true);
                $data['applications']['applicant_id'] = $cnfIpAssignment->ipApplication->applicant_id;
                $data['applications']['cnf_user_id'] = auth()->user()->id;
            }

            if(isset($data['attachments']['extension_attachment'])) {
                $attachmentRepository->setPath(config('app_constants.path.attachment'));
                $file = [
                    'file' => $data['attachments']['extension_attachment']
                ];

                $data['ro_details']['extension_attachment_id'] = $attachmentRepository->create($file);

                unset($data['attachments']);
            }

            $data['applications']['app_type_id'] = config('app_constants.app_types.RO');
            $data['applications']['applicationable_type'] = config('app_constants.models.RO');
            $applicationId = $applicationRepository->create($data['applications']);

            $configAppTypeAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(config('app_constants.app_types.RO'));
            $configAppTypeAttachments = $configAppTypeAttachments->pluck('config_attachment_id')->toArray();

            $appProductRepository->createAll($data['app_products'], $applicationId);
            $updatedAttachmentAttributes = $appAttachmentRepository->createAll($data['app_attachments'], $applicationId, $configAppTypeAttachments);
            $appAttachmentRepository->addMissingProfileAttachments($data['app_attachments'], $applicationId,
                $configAppTypeAttachments);

            if(isset($data['memo_attachment'])) {
                $data['memo_attachment']['attachment'] = $data['attachments']['attachment'];
                $data['ro_details']['memo_id'] = $memoRepository->create($data['memo_attachment']);
            } elseif(isset($data['application_ids']) && $data['application_ids']->count() > 0) {
                $roIpApplicationRepository->createAll($data['application_ids']->toArray(), $applicationId);
            }

            $data['ro_details'] = array_merge($commonService->deleteEmptyColumnValues(self::TABLE_NAME, $updatedAttachmentAttributes),
                $data['ro_details']);
            $data['ro_details']['application_id'] = $applicationId;

            $id = parent::create($data['ro_details']);

            $applicationRepository->update(['applicationable_id' => $id], $applicationId);

            $fumigationCost = $this->getFumigationCost($data['ro_details']);

            $applicationRepository->updateFeeInfo($applicationId, $fumigationCost);

            return $applicationId;
        });
    }

    public function update(array $data, $applicationId)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');
        $memoRepository = resolve('App\Repositories\Interfaces\MemoRepositoryInterface');
        $roIpApplicationRepository = resolve('App\Repositories\Interfaces\RoIpApplicationRepositoryInterface');
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $commonService = resolve('App\Services\CommonService');

        return DB::transaction(function()
                use ($memoRepository, $applicationRepository, $appProductRepository, $appAttachmentRepository,
                    $roIpApplicationRepository, $configAppTypeAttachmentRepository, $data, $applicationId, $commonService) {
            $applicationRepository->update($data['applications'], $applicationId);
            $appProductRepository->updateAll($data['app_products'], $applicationId);
            $updatedAttachmentAttributes = $appAttachmentRepository->updateAll($data['app_attachments'], $applicationId);

            $roDetails = $this->getId($applicationId);

            $data['ro_details'] = array_merge($commonService->deleteEmptyColumnValues(self::TABLE_NAME, $updatedAttachmentAttributes), $data['ro_details']);

            parent::update($data['ro_details'],$roDetails->id);

            $fumigationCost = $this->getFumigationCost($data['ro_details']);

            $applicationRepository->updateFeeInfo($applicationId, $fumigationCost);

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
            return $this->model->where('application_id', $applicationId)->firstOrFail();
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }

    public function getFumigationCost($data) {
        $chemicalCharge = isset($data['chemical_charge']) && $data['chemical_charge'] > 0 ? $data['chemical_charge'] : 0;
        $serviceCharge = isset($data['service_charge']) && $data['service_charge'] > 0 ? $data['service_charge'] : 0;

        $fumigationCost = $chemicalCharge + $serviceCharge;

        return $fumigationCost;
    }

    public function setProductReleaseQuantity($applicationId, $userId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $roIpApplicationRepository = resolve('App\Repositories\Interfaces\RoIpApplicationRepositoryInterface');

        $ipApplicationIds = $roIpApplicationRepository->getIps($applicationId)->pluck('ip_application_id')->toArray();
        $applicationRepository->setProductReleasedQuantity($userId, $ipApplicationIds);
    }

    public function updateUsingAttachmentAttributes($data, $id) {
        return parent::update($data, $id);
    }
}