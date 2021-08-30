<?php
namespace App\Repositories;

use App\Models\CnfIpAssignment;
use App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CnfIpAssignmentResource;

class CnfIpAssignmentRepository extends BaseRepository implements CnfIpAssignmentRepositoryInterface
{
    private $with = [
        'ipApplication:id,applicant_id,organization_id,approved_by,is_paid,is_locked,current_status,is_approved,certificate_no,certificate_validity_date,approval_date,applicationable_id,applicationable_type',
        'ipApplication.organization:id,name', 'ipApplication.details', 'cnfUser:id,username,email,card_no,organization_id,mobile',
        'cnfUser.profile:id,user_id,fullname,cnf_firm_name,designation_name', 'ipApplication.approvedUser:id,user_id,fullname',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname',
        'cnfIpAssignmentDetails:id,cnf_ip_assignment_id,product_type_id,product_id,product_name,botanical_name,quantity,pack_size,variety',
        'cnfIpAssignmentDetails.product:id,name,botanical_name','cnfIpAssignmentDetails.productType:id,name,unit_id',
        'cnfIpAssignmentDetails.productType.unit:id,name', 'ipApplication.organization:id,name',
        'ipApplication.approvedUser:id,user_id,fullname',
        'roApplication:id,app_type_id,cnf_user_id,applicant_id,current_status,cnf_ip_assignment_id,is_paid,is_approved,is_cancelled'
    ];

    public function __construct(CnfIpAssignment $model)
    {
        parent::__construct($model);
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'cnf_ip_assignments.id',
            'organizations.name',
            'entry_organizations.name',
            'approved_users.fullname',
            'applications.approval_date',
            'cnf_ip_assignments.available_at',
            'cnf_ip_assignments.is_locked',
            'cnf_ip_assignments.is_cancelled'
        ];

        $likeQueryKeys = [
            'approved_users.fullname'
        ];

        $zeroExcludedKeys = [
            'organizations.id',
            'entry_organizations.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))
            ) {
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
        $data['recordsTotal'] = $this->model->where('cnf_user_id', auth()->user()->id)->count();
        $queryFiltered = $this->model
            ->with(['roApplication:id,app_type_id,current_status,cnf_ip_assignment_id,is_paid,is_approved,is_cancelled'])
            ->leftJoin('applications','cnf_ip_assignments.ip_application_id','=','applications.id')
            ->leftJoin('ip_details','applications.id','=','ip_details.application_id')
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('organizations AS entry_organizations','ip_details.entry_organization_id','=','entry_organizations.id')
            ->leftJoin('profiles AS approved_users','applications.approved_by','=','approved_users.user_id')
            ->selectRaw(
                "cnf_ip_assignments.id, 
                organizations.name AS organization_name, 
                entry_organizations.name AS entry_port, 
                approved_users.fullname AS approved_user, 
                DATE_FORMAT(applications.approval_date, '%d/%m/%Y') AS approval_date,
                cnf_ip_assignments.cnf_user_id,
                cnf_ip_assignments.available_at, 
                cnf_ip_assignments.is_locked, 
                cnf_ip_assignments.is_cancelled"
            )
            ->where('cnf_ip_assignments.cnf_user_id', auth()->user()->id)
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();
        return $data;
    }

    public function assignCnf(array $data) {
        $cnfIpAssignmentDetailRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentDetailRepositoryInterface');

        return DB::transaction(function() use ($cnfIpAssignmentDetailRepository, $data) {
            $cnfIpAssignmentId = parent::create($data['cnf_ip_assignments']);

            $cnfIpAssignmentDetailRepository->createAll($data['cnf_ip_assignment_details'], $cnfIpAssignmentId);

            return $cnfIpAssignmentId;
        });
    }

    public function getDetails($id, $with = false)
    {
        try {
            $cnfIpAssignment = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new CnfIpAssignmentResource($cnfIpAssignment) : $cnfIpAssignment;
    }

    public function getAllByApplicationId($applicationid)
    {
        return $this->model
            ->select('id', 'ip_application_id', 'cnf_user_id', 'is_locked', 'is_cancelled', 'available_at')
            ->with([
                'ipApplication:id,applicant_id,organization_id,approved_by,is_paid,is_locked,current_status,is_approved,certificate_no,certificate_validity_date,approval_date,applicationable_id,applicationable_type',
                'ipApplication.organization:id,name', 'ipApplication.approvedUser:id,user_id,fullname',
                'ipApplication.details', 'cnfUser:id,username,email,card_no,organization_id,mobile',
                'cnfUser.profile:id,user_id,fullname,cnf_firm_name,designation_name',
                'roApplication:id,app_type_id,cnf_user_id,applicant_id,current_status,cnf_ip_assignment_id,is_paid,is_approved,is_cancelled'
            ])
            ->where([
                'ip_application_id' => $applicationid,
                'is_cancelled' => 0
            ])
            ->get();
    }

    public function getAllWithDetails($applicationid)
    {
        return $this->model
            ->select('id', 'ip_application_id', 'cnf_user_id', 'is_locked', 'is_cancelled', 'available_at')
            ->with([
                'ipApplication:id,applicant_id,organization_id,approved_by,is_paid,is_locked,current_status,is_approved,certificate_no,certificate_validity_date,approval_date,applicationable_id,applicationable_type',
                'ipApplication.organization:id,name', 'ipApplication.approvedUser:id,user_id,fullname',
                'cnfIpAssignmentDetails:id,cnf_ip_assignment_id,product_type_id,product_id,product_name,botanical_name,quantity,pack_size,variety',
                'cnfIpAssignmentDetails.product:id,name,botanical_name','cnfIpAssignmentDetails.productType:id,name,unit_id',
                'cnfIpAssignmentDetails.productType.unit:id,name',
                'roApplication:id,app_type_id,cnf_user_id,applicant_id,current_status,cnf_ip_assignment_id,is_paid,is_approved,is_cancelled'
            ])
            ->where([
                'ip_application_id' => $applicationid,
                'is_cancelled' => 0
            ])
            ->get();
    }

    public function isAssignmentPossible($applicationId, $cnfUserId) {
        $cnfIpAssignments = $this->model
            ->where([
                'ip_application_id' => $applicationId,
                'cnf_user_id' => $cnfUserId,
                'is_cancelled' => 0
            ])
            ->get();

        return $cnfIpAssignments->count() == 0 ? true : false;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function hasCancelAbility($id) {
        $cnfIpAssignment = $this->model
            ->with(['roApplication:id,app_type_id,cnf_user_id,applicant_id,current_status,cnf_ip_assignment_id,is_paid,is_approved,is_cancelled'])
            ->find($id);

        if(isset($cnfIpAssignment->roApplication)
            &&
            (
                $cnfIpAssignment->roApplication->is_paid == 1
                &&
                (
                    $cnfIpAssignment->roApplication->is_cancelled == 0
                    || $cnfIpAssignment->roApplication->is_approved == 1
                )
            )
        ) {
            return false;
        }

        return true;
    }

    public function getCnfAssignmentForDashboard($userId) {
        $assignedIpApplications = $this->model
            ->where('cnf_user_id', $userId)
            ->count();

        $completedCnfAssignments = $this->model
            ->where('cnf_user_id', $userId)
            ->where([
                'is_locked' => 1
            ])
            ->count();

        return [
            [
                'entity' => 'APPLICATION',
                'label' => 'Assigned',
                'count' => $assignedIpApplications
            ],
            [
                'entity' => 'APPLICATION',
                'label' => 'Completed',
                'count' => $completedCnfAssignments
            ]
        ];
    }

    public function getAllUnlockedAssignments($userId) {
        return $this->model
            ->select('id')
            ->where([
                'cnf_user_id' => $userId,
                'is_locked' => 0
            ])
            ->pluck('id')
            ->toArray();
    }
}
