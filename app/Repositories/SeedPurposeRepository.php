<?php
namespace App\Repositories;

use App\Models\SeedPurpose;
use App\Repositories\Interfaces\SeedPurposeRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SeedPurposeRepository extends BaseRepository implements SeedPurposeRepositoryInterface
{
    public function __construct(SeedPurpose $model)
    {
        parent::__construct($model);
    }

    public function createAll($data) {
        return DB::transaction(function() use ($data) {
            $isSeed = $data['is_seed'];
            $purposes = $data['purposes'];
            $this->deleteAll($isSeed);

            foreach($purposes as $purposeId) {
                $seedPurpose = [
                    'is_seed' => $isSeed,
                    'purpose_id' => $purposeId,
                ];

                parent::create($seedPurpose);
            }
        });
    }

    public function deleteAll($isSeed) {
        $this->model->where('is_seed', $isSeed)->delete();
    }

    public function getAll($isSeed) {
        return $this->model->select('id', 'purpose_id', 'is_seed')->with('purpose:id,name')->where('is_seed', $isSeed)->get();
    }

    public function isValidSeedPurpose($isSeed, $purposeId) {
        $totalRowFound = $this->model->where([
            'is_seed' => $isSeed,
            'purpose_id' => $purposeId
        ])->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function getDetails($id, $with = false)
    {
        return $this->model->findOrFail($id);
    }
}