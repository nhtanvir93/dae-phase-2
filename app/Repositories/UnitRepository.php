<?php
namespace App\Repositories;

use App\Models\Unit;
use App\Http\Resources\UnitResource;
use App\Repositories\Interfaces\UnitRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class UnitRepository extends BaseRepository implements UnitRepositoryInterface
{
    private $with = [
        'parentUnit:id,name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Unit $model)
    {
        parent::__construct($model);
    }
    
    public function lists()
	{
        return $this->model
            ->select('id', 'name', 'short_name')
            ->orderBy('name', 'ASC')
            ->get();
	}

	public function paginatedLists()
	{
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'units.name',
            'units.short_name',
            'units.description',
            'parent_units.name',
            'units.conversion_rate',
        ];

        $likeQueryKeys = [
            'units.name',
            'units.short_name'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0)) {
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
        $queryFiltered = DB::table('units')
            ->leftJoin('units AS parent_units','units.parent_id','=','parent_units.id')
            ->select('units.id', 'units.name', 'units.short_name', 'units.description', 'parent_units.name AS parent_unit',
                'units.conversion_rate')
            ->whereNull('units.deleted_at')
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
            $unit = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new UnitResource($unit) : $unit;
	}

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }
}