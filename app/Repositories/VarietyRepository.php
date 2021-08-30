<?php
namespace App\Repositories;

use App\Models\Variety;
use App\Http\Resources\VarietyResource;
use App\Repositories\Interfaces\VarietyRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class VarietyRepository extends BaseRepository implements VarietyRepositoryInterface
{
    private $with = [
        'purposes:purpose_id,name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Variety $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $columns = [
            'name',
            'description'
        ];

        $likeQueryKeys = [
            'name'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = request()->get('filter');
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if($value != '') {
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
        $data['recordsFiltered'] = $this->model->where($filterConditions)->count();

        $data['data'] = DB::table('varieties')
            ->select('id', 'name', 'description')
            ->whereNull('deleted_at')
            ->where($filterConditions)
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false)
    {
        try {
            $variety = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new VarietyResource($variety) : $variety;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function create(array $data) {
        $purposeVarietyRepository = resolve('App\Repositories\Interfaces\PurposeVarietyRepositoryInterface');

        return DB::transaction(function() use ($purposeVarietyRepository, $data) {
            $purposes = $data['purposes'];
            unset($data['purposes']);
            $varietyId = parent::create($data);

            $purposeVarietyRepository->updateAll($purposes,$varietyId);
            return $varietyId;
        });
    }

    public function update(array $data, $id)
    {
        $purposeVarietyRepository = resolve('App\Repositories\Interfaces\PurposeVarietyRepositoryInterface');

        return DB::transaction(function() use ($purposeVarietyRepository, $data, $id) {
            $purposes = $data['purposes'];
            unset($data['purposes']);

            $purposeVarietyRepository->updateAll($purposes,$id);

            return parent::update($data, $id);
        });
    }

}