<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 7/29/2020
 * Time: 11:46 AM
 */

namespace App\Repositories;

use App\Models\Designation;
use App\Http\Resources\DesignationResource;
use App\Repositories\Interfaces\DesignationRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class DesignationRepository extends BaseRepository implements DesignationRepositoryInterface
{
    private $with = [
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Designation $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'title')
            ->orderBy('title', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $columns = [
            'title',
            'full_name',
            'bn_full_name',
            'description'
        ];

        $likeQueryKeys = [
            'title',
            'full_name',
            'bn_full_name'
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

        $data['data'] = DB::table('designations')
            ->select('id', 'title', 'full_name', 'bn_full_name', 'description')
            ->whereNull('deleted_at')
            ->where($filterConditions)
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false) {
        try {
            $designation = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new DesignationResource($designation) : $designation;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function sortDesignations($data) {

        return DB::transaction(function() use ($data) {
            $designations = $data['designations'];
            foreach($designations as $key => $designationId) {
                $position = $key + 1;
                $designation = [
                    'level' => $position
                ];

                parent::update($designation, $designationId);
            }
        });
    }

    public function getLevelWiseList() {
        return $this->model
            ->select('id', 'title')
            ->orderBy('level', 'ASC')
            ->get();
    }
}