<?php
namespace App\Repositories;

use App\Models\RoIpApplication;
use App\Repositories\Interfaces\RoIpApplicationRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RoIpApplicationRepository extends BaseRepository implements RoIpApplicationRepositoryInterface {

    public function __construct(RoIpApplication $model)
    {
        parent::__construct($model);
    }

    public function createAll($ipApplications, $roApplicationId) {
        foreach($ipApplications as $ipApplicationId) {
            $roIpApplication['ip_application_id'] = $ipApplicationId;
            $roIpApplication['ro_application_id'] = $roApplicationId;
            parent::create($roIpApplication);
        }
    }

    public function updateAll($ipApplications, $roApplicationId) {
        $this->deleteAll($roApplicationId);
        $this->createAll($ipApplications, $roApplicationId);
    }

    public function deleteAll($roApplicationId) {
        $this->model->where('ro_application_id', $roApplicationId)->delete();
    }

    public function getIps($roApplicationId) {
        return $this->model
            ->select('id', 'ro_application_id', 'ip_application_id')
            ->where('ro_application_id', $roApplicationId)
            ->get();
    }

    public function getIpApplicationIdForRo($ipApplicationIds) {
        $newIpApplicationIds = $this->model
            ->select(DB::raw('distinct ip_application_id'))
            ->whereIn('ro_application_id', function($query) use ($ipApplicationIds) {
                $query->select('ro_application_id')
                    ->from('ro_ip_application')
                    ->whereIn('ip_application_id', $ipApplicationIds);
            })
            ->pluck('ip_application_id')
            ->toArray();

        if(count($ipApplicationIds) == 0 || count($newIpApplicationIds) == 0) {
            return $ipApplicationIds;
        }

        $differentIpApplicationIds = array_diff($newIpApplicationIds, $ipApplicationIds);
        $ipApplicationIds = array_merge($ipApplicationIds, $differentIpApplicationIds);

        return count($differentIpApplicationIds) == 0 ? $ipApplicationIds : $this->getIpApplicationIdForRo($ipApplicationIds);
    }
}