<?php
namespace App\Repositories;

use App\Models\AdditionalInfoCondition;
use App\Repositories\Interfaces\AdditionalInfoConditionRepositoryInterface;

class AdditionalInfoConditionRepository extends BaseRepository implements AdditionalInfoConditionRepositoryInterface
{
    public function __construct(AdditionalInfoCondition $model)
    {
        parent::__construct($model);
    }

    public function createAll($conditions, $applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);

        foreach($conditions as $condition) {
            $additionalInfoCondition = [
                'application_id' => $applicationId,
                'description' => $condition,
                'stage' => $application->current_stage
            ];

            parent::create($additionalInfoCondition);
        }
    }

    public function updateAll($conditions, $applicationId) {
        $this->deleteAll($applicationId);
        $this->createAll($conditions, $applicationId);
    }

    public function deleteAll($applicationId) {
        $this->model->where('application_id', $applicationId)->delete();
    }

    public function getAllUsingApplicationId($applicationId) {
        return $this->model
            ->select('id', 'application_id', 'stage', 'description', 'created_by')
            ->with(['createdUser:id,user_id,fullname'])
            ->where('application_id', $applicationId)
            ->get();
    }
}