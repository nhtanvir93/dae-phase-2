<?php
namespace App\Repositories;

use App\Models\Upazilla;
use App\Http\Resources\UpazillaResource;
use App\Repositories\Interfaces\UpazillaRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class UpazillaRepository extends BaseRepository implements UpazillaRepositoryInterface
{
    private $with = [
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname'
    ];

    public function __construct(Upazilla $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'name')
            ->with(['district:id,name'])
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'upazillas.name',
            'districts.name'
        ];

        $likeQueryKeys = [
            'upazillas.name'
        ];

        $zeroExcludedKeys = [
            'districts.id'
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
        $queryFiltered = DB::table('upazillas')
            ->leftJoin('districts','upazillas.district_id','=','districts.id')
            ->select('upazillas.id', 'upazillas.name', 'districts.name AS district_name','upazillas.description')
            ->whereNull('upazillas.deleted_at')
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false) {
        try {
            $upazilla = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new UpazillaResource($upazilla) : $upazilla;
    }

    public function getDistrictWise($districtId) {
        return $this->model->select('id', 'name', 'district_id')
            ->with('district:id,name')->where('district_id', $districtId)
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }
}