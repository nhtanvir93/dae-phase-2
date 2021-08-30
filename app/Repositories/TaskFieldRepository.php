<?php
namespace App\Repositories;

use App\Models\TaskField;
use App\Http\Resources\TaskFieldResource;
use App\Repositories\Interfaces\TaskFieldRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class TaskFieldRepository extends BaseRepository implements TaskFieldRepositoryInterface
{
    private $with = [
        'processTask:id,name', 'dependentTaskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(TaskField $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'label', 'input_type')
            ->orderBy('label', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'task_fields.label',
            'task_fields.input_type',
            'process_tasks.name',

        ];

        $likeQueryKeys = [
            'task_fields.label',
            'task_fields.input_type'
        ];

        $zeroExcludedKeys = [
            'process_tasks.id'
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
        $queryFiltered = DB::table('task_fields')
            ->leftJoin('process_tasks','task_fields.process_task_id','=','process_tasks.id')
            ->select('task_fields.id', 'process_tasks.name as process_task', 'task_fields.label as task_field',
                'task_fields.input_type')
            ->whereNull('task_fields.deleted_at')
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
            $taskField = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new TaskFieldResource($taskField) : $taskField;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getProcessTaskWise($processTaskId)
    {
        return $this->model
            ->select('id', 'process_task_id', 'task_field_name', 'label', 'input_type', 'level', 'dropdown_value_query',
                'dropdown_value_json', 'loading_dependency_json', 'loading_dependency_query', 'stage_user_query')
            ->when(is_array($processTaskId), function($query) use ($processTaskId) {
                $query->whereIn('process_task_id', $processTaskId);
            })
            ->when(!is_array($processTaskId), function($query) use ($processTaskId) {
                $query->where('process_task_id', $processTaskId);
            })
            ->orderBy('level', 'ASC')
            ->get();
    }

    public function sortTaskFields($data) {

        return DB::transaction(function() use ($data) {
            $taskFields = $data['task_fields'];
            foreach($taskFields as $key => $taskFieldId) {
                $position = $key + 1;
                $taskField = [
                    'level' => $position
                ];

                parent::update($taskField, $taskFieldId);
            }
        });
    }

}
