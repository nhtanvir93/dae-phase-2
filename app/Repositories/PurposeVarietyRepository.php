<?php
namespace App\Repositories;

use App\Models\PurposeVariety;
use App\Repositories\Interfaces\PurposeVarietyRepositoryInterface;
use Illuminate\Support\Facades\DB;

class PurposeVarietyRepository extends BaseRepository implements PurposeVarietyRepositoryInterface
{
    public function __construct(PurposeVariety $model)
    {
        parent::__construct($model);
    }

    public function createAll($purposes, $varietyId) {
        foreach($purposes as $purposeId) {
            $purposeVariety = [
                'purpose_id' => $purposeId,
                'variety_id' => $varietyId,
            ];

            parent::create($purposeVariety);
        }
    }

    public function updateAll($purposes, $varietyId) {
        $this->deleteAll($varietyId);
        $this->createAll($purposes, $varietyId);
    }

    public function deleteAll($varietyId) {
        $this->model->where('variety_id', $varietyId)->delete();
    }
}