<?php
namespace App\Repositories;

use App\Models\ProcessFlow;
use App\Repositories\Interfaces\ProcessFlowRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProcessFlowResource;

class ProcessFlowRepository extends BaseRepository implements ProcessFlowRepositoryInterface
{
    private $with = [
        'appType:id,name', 'organization:id,name', 'stages:id,process_flow_id,stage_id,level,is_decision_stage',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ProcessFlow $model)
    {
        parent::__construct($model);
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'process_flows.id',
            'app_types.name',
            'organizations.name',
            'process_flows.is_active'
        ];

        $likeQueryKeys = [
        ];

        $zeroExcludedKeys = [
            'app_types.id',
            'organizations.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
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
        $queryFiltered = DB::table('process_flows')
            ->leftJoin('app_types','process_flows.app_type_id','=','app_types.id')
            ->leftJoin('organizations','process_flows.organization_id','=','organizations.id')
            ->select('process_flows.id', 'app_types.name as app_type', 'organizations.name as organization',
                'process_flows.is_active',
                DB::raw('DATE_FORMAT(process_flows.activation_date, "%d/%m/%Y") AS activation_date, 
                DATE_FORMAT(process_flows.deactivation_date, "%d/%m/%Y") AS deactivation_date'))
            ->whereNull('process_flows.deleted_at')
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
            $processFlow = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ProcessFlowResource($processFlow) : $processFlow;
    }

    public function create(array $data) {
        $stageFlowRepository = resolve('App\Repositories\Interfaces\StageFlowRepositoryInterface');
        $stageButtonRepository = resolve('App\Repositories\Interfaces\StageButtonRepositoryInterface');
        $stageFlowTaskRepository = resolve('App\Repositories\Interfaces\StageFlowTaskRepositoryInterface');
        $processStageRolesRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');
        $taskFieldStageRepository = resolve('App\Repositories\Interfaces\TaskFieldStageRepositoryInterface');

        return DB::transaction(function()
                use ($stageFlowRepository, $stageButtonRepository, $stageFlowTaskRepository, $processStageRolesRepository, $taskFieldStageRepository, $data) {
            $processFlowId = parent::create($data['process_flows']);

            $stageFlowRepository->createAll($data['stage_flows'], $processFlowId);
            $stageFlowTaskRepository->createAll($data['stage_flow_tasks'], $processFlowId);
            $processStageRolesRepository->createAll($data['process_stage_roles'], $processFlowId);
            $stageButtonRepository->createAll($data['stage_buttons'], $processFlowId);
            $taskFieldStageRepository->createAll($data['task_field_stages'], $processFlowId);

            return $processFlowId;
        });
    }

    public function update(array $data, $id)
    {
        $stageFlowRepository = resolve('App\Repositories\Interfaces\StageFlowRepositoryInterface');
        $stageButtonRepository = resolve('App\Repositories\Interfaces\StageButtonRepositoryInterface');
        $stageFlowTaskRepository = resolve('App\Repositories\Interfaces\StageFlowTaskRepositoryInterface');
        $processStageRolesRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');
        $taskFieldStageRepository = resolve('App\Repositories\Interfaces\TaskFieldStageRepositoryInterface');

        return DB::transaction(function()
                use ($stageFlowRepository, $stageButtonRepository, $stageFlowTaskRepository, $processStageRolesRepository, $taskFieldStageRepository, $data, $id) {
            $stageFlowRepository->updateAll($data['stage_flows'], $id);
            $stageFlowTaskRepository->updateAll($data['stage_flow_tasks'], $id);
            $processStageRolesRepository->updateAll($data['process_stage_roles'], $id);
            $stageButtonRepository->updateAll($data['stage_buttons'], $id);
            $taskFieldStageRepository->updateAll($data['task_field_stages'], $id);

            return true;
        });
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function activate($id) {
        $processFlow = $this->getDetails($id);

        if(!$processFlow) {
            return false;
        }

        $this->deactivatePreviousProcessFlows($processFlow->app_type_id, $processFlow->organization_id, $processFlow->is_restricted, $id);

        $processFlow->update([
            'is_active' => 1,
            'activation_date' => now(),
            'deactivation_date' => null
        ]);

        return true;
    }

    public function deactivate($id) {
        $processFlow = $this->getDetails($id);

        if(!$processFlow) {
            return false;
        }

        $processFlow->update([
            'is_active' => 0,
            'deactivation_date' => now()
        ]);

        return true;
    }

    public function createOrganizationCategoryWise($data) {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        $portTypeId = $data['process_flows']['port_type_id'];
        $appTypeId = $data['process_flows']['app_type_id'];

        $organizations = $organizationRepository->getOrganizationsOnPortType($portTypeId);

        if($organizations->count() == 0) {
            return false;
        }

        unset($data['process_flows']['port_type_id']);

        return DB::transaction(function() use ($data, $organizations, $appTypeId) {
            foreach($organizations as $organization) {
                $data['process_flows']['organization_id'] = $organization->id;
                $id = $this->create($data);
                $this->deactivatePreviousProcessFlows($appTypeId, $organization->id, 0, $id);
                $this->activate($id);
            }

            return true;
        });

    }

    public function deactivatePreviousProcessFlows($appTypeId, $organizationId, $isRestricted, $exceptId) {
        $this->model
            ->where([
                'app_type_id' => $appTypeId,
                'organization_id' => $organizationId,
                'is_restricted' => $isRestricted,
                ['id', '<>', $exceptId]
            ])->update([
                'is_active' => 0,
                'deactivation_date' => now()
            ]);
    }

    public function getActiveProcessFlow($appTypeId, $organizationId, $isRestricted) {
        try {
            return $this->model
                ->where([
                    'app_type_id' => $appTypeId,
                    'organization_id' => $organizationId,
                    'is_restricted' => $isRestricted,
                    'is_active' => 1
                ])
                ->firstOrFail();
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }
}
