<?php
namespace App\Repositories;

use App\Models\PcDetail;
use App\Repositories\Interfaces\PcDetailRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Events\ApplicationUpdatedAfterRecheck;

class PcDetailRepository extends BaseRepository implements PcDetailRepositoryInterface
{
    public function __construct(PcDetail $model)
    {
        parent::__construct($model);
    }

    public function create(array $data)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        return DB::transaction(function() use ($applicationRepository, $appProductRepository, $appAttachmentRepository, $configAppTypeAttachmentRepository, $data) {
            $data['applications']['app_type_id'] = config('app_constants.app_types.PC');
            $data['applications']['applicationable_type'] = config('app_constants.models.PC');

            if(isset($data['applications']['total_pallet']) && isset($data['applications']['per_pallet_charge'])) {
                $data['applications']['total_pallet_fee']
                    = $data['applications']['total_pallet'] * $data['applications']['per_pallet_charge'];
            }

            $applicationId = $applicationRepository->create($data['applications']);

            $configAppTypeAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(config('app_constants.app_types.PC'));
            $configAppTypeAttachments = $configAppTypeAttachments->pluck('config_attachment_id')->toArray();

            $appProductRepository->createAll($data['app_products'], $applicationId);
            $appAttachmentRepository->createAll($data['app_attachments'], $applicationId, $configAppTypeAttachments);
            $appAttachmentRepository->addMissingProfileAttachments($data['app_attachments'], $applicationId,
                $configAppTypeAttachments);

            $data['pc_details']['application_id'] = $applicationId;
            $id = parent::create($data['pc_details']);
            $applicationRepository->update(['applicationable_id' => $id], $applicationId);

            $fumigationCost = isset($data['manual_fumigation_service_charge']) ?
                $data['manual_fumigation_service_charge'] : $this->getFumigationCost($data['pc_details']);

            $applicationRepository->updateFeeInfo($applicationId, $fumigationCost);

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

            parent::update($data['pc_details'],$id);

            $fumigationCost = isset($data['manual_fumigation_service_charge']) ?
                $data['manual_fumigation_service_charge'] : $this->getFumigationCost($data['pc_details']);

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
            $ipDetail = $this->model->where('application_id', $applicationId)->firstOrFail();
            return $ipDetail->id;
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }

    public function getFumigationCost($data) {
        $totalTablets = isset($data['fumigation_total_tablets']) && $data['fumigation_total_tablets'] > 0 ? $data['fumigation_total_tablets'] : 0;
        $perTabletCharge = isset($data['fumigation_per_tablet_charge']) && $data['fumigation_per_tablet_charge'] > 0 ? $data['fumigation_per_tablet_charge'] : 0;

        $fumigationCost = $totalTablets * $perTabletCharge;

        return $fumigationCost;
    }

    public function updateByApplicationId($applicationId, $data) {
        $detailId = $this->getId($applicationId);

        return parent::update($data, $detailId);
    }

    public function getRecentApplicationConsigneeInfo() {
        return DB::table('pc_details')
            ->selectRaw('DISTINCT consignee_name, consignee_address')
            ->join('applications', 'pc_details.application_id', '=', 'applications.id')
            ->where('applications.applicant_id', auth()->user()->id)
            ->whereNull('applications.deleted_at')
            ->orderBy('applications.id','DESC')
            ->limit(10)
            ->get();
    }
}