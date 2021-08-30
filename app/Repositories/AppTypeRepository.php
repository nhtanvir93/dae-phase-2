<?php
namespace App\Repositories;

use App\Models\AppType;
use App\Http\Resources\AppTypeResource;
use App\Repositories\Interfaces\AppTypeRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class AppTypeRepository extends BaseRepository implements AppTypeRepositoryInterface
{
    private $with = [
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(AppType $model)
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
        $columns = [
            'name',
            'short_name',
            'description'
        ];

        $likeQueryKeys = [
            'name',
            'short_name'
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

        $data['data'] = DB::table('app_types')
            ->select('id', 'name', 'short_name', 'certificate_validity_days', 'certificate_extended_days','description')
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
            $appType = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new AppTypeResource($appType) : $appType;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

}