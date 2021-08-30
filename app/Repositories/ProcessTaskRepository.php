<?php
namespace App\Repositories;

use App\Models\ProcessTask;
use App\Http\Resources\ProcessTaskResource;
use App\Repositories\Interfaces\ProcessTaskRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ProcessTaskRepository extends BaseRepository implements ProcessTaskRepositoryInterface
{
    private $scrutinizeFormUrl;
    private $addonFormUrl;
    private $inspectionSmsFormUrl;

    private $with = [
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ProcessTask $model)
    {
        parent::__construct($model);
        $this->scrutinizeFormUrl = url('api/scrutinize-app-attachments');
        $this->addonFormUrl = url('api/process-additional-conditions');
        $this->inspectionSmsFormUrl = url('api/send-inspection-sms');
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name', 'separate_form_url', 'is_scrutinize_task', 'is_addon', 'is_inspection_sms')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $columns = [
            'name',
            'separate_form_url',
            'is_scrutinize_task',
            'is_addon',
            'is_inspection_sms',
            'remarks'
        ];

        $likeQueryKeys = [
            'name',
            'separate_form_url'
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

        $data['data'] = DB::table('process_tasks')
            ->select('id', 'name', 'is_scrutinize_task', 'is_addon', 'is_inspection_sms', 'separate_form_url', 'remarks')
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

        return $with ? new ProcessTaskResource($appType) : $appType;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function sortProcessTasks($data) {

        return DB::transaction(function() use ($data) {
            $processTasks = $data['process_tasks'];
            foreach($processTasks as $key => $processTaskId) {
                $position = $key + 1;
                $processTask = [
                    'position' => $position
                ];

                parent::update($processTask, $processTaskId);
            }
        });
    }

    public function getPositionWiseList() {
        return $this->model
            ->select('id', 'name')
            ->orderBy('position', 'ASC')
            ->get();
    }

    public function create(array $data)
    {
        if($data['is_scrutinize_task']) {
            $data['separate_form_url'] = $this->scrutinizeFormUrl;
        } elseif($data['is_addon']) {
            $data['separate_form_url'] = $this->addonFormUrl;
        } elseif($data['is_inspection_sms']) {
            $data['separate_form_url'] = $this->inspectionSmsFormUrl;
        }

        return parent::create($data);
    }
}