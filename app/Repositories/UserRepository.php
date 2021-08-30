<?php

namespace App\Repositories;

use App\User;
use App\Http\Resources\UserResource;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    private $with = [
        'userType:id,name', 'areaVatCode:id,area,vat_code', 'organization:id,name', 'profile', 'roles:id,name', 'designation:id,title',
        'superior.profile:id,user_id,fullname', 'profile.permanentAddress:id,description', 'profile.presentAddress:id,description',
        'profile.photoAttachment:id,name,extension,path', 'profile.signatureAttachment:id,name,extension,path', 'profile.contactPersonPhoto:id,name,extension,path',
        'profile.contactPersonSignatureAttachment:id,name,extension,path', 'createdUser:id,fullname', 'updatedUser:id,fullname',
        'deletedUser:id,fullname', 'profile.permanentAddress:id,district_id,upazilla_id,description',
        'profile.presentAddress:id,district_id,upazilla_id,description', 'profile.permanentAddress.district:id,name',
        'profile.permanentAddress.upazilla:id,name','profile.presentAddress.district:id,name', 'profile.presentAddress.upazilla:id,name',
        'profileAttachments:user_attachments.id,config_attachment_id,attachment_id,user_id','profileAttachments.configAttachment:id,name',
        'profileAttachments.attachment:id,extension,name,path','proxy:id,original_user_id,proxy_user_id,from,to',
        'proxy.originalUser:id,user_id,fullname'
    ];

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'username', 'email', 'mobile', 'user_type_id', 'organization_id', 'is_active',
                'company_type')
            ->with(['userType:id,name', 'organization:id,name', 'profile:id,user_id,fullname', 'roles:id,name'])
            ->orderBy('username', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $userTypeLabel = $this->getUserTypeLabel(auth()->user()->id);

        $columns = [
            'users.id',
            'users.username',
            'users.email',
            'users.mobile',
            'designations.title',
            'user_types.name',
            'organizations.name',
            'users.company_type',
            'users.is_profile_completed',
            'superior_users.username'
        ];

        $likeQueryKeys = [
            'users.username',
            'users.email',
            'users.mobile'
        ];

        $zeroExcludedKeys = [
            'designations.id',
            'user_types.id',
            'organizations.id',
            'superior_users.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || ($key == 'users.mobile' && $value != '')
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

        if($userTypeLabel != 'SYSTEM_ADMIN') {
            $filterConditions[] = [
                'users.user_type_id', '<>', config('app_constants.user_type.system_admin')
            ];
        }

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $this->model->count();
        $queryFiltered = DB::table('users')
            ->leftJoin('designations','users.designation_id','=','designations.id')
            ->leftJoin('user_types','users.user_type_id','=','user_types.id')
            ->leftJoin('organizations','users.organization_id','=','organizations.id')
            ->leftJoin('users AS superior_users','users.superior_id','=','superior_users.id')
            ->select('users.id', 'users.username', 'users.email', 'users.mobile', 'designations.title AS designation_name',
                'user_types.name AS user_type_name', 'organizations.name AS organization_name', 'users.company_type',
                'superior_users.username AS superior_user_username', 'users.is_profile_completed')
            ->whereNull('users.deleted_at')
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
            $user = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        $user->user_type_label = $this->getUserTypeLabel($user);

        return $with ? new UserResource($user) : $user;
    }

    public function getSuperiors($organizationId, $designationId) {
        return DB::table('users')
            ->select('users.id', 'profiles.fullname', 'organizations.name AS organization', 'designations.title AS designation')
            ->leftJoin('organizations','users.organization_id','=','organizations.id')
            ->leftJoin('designations','users.designation_id','=','designations.id')
            ->leftJoin('profiles','users.id','=','profiles.user_id')
            ->where([
                ['users.organization_id', '=', $organizationId],
                ['designations.level', '<', function($query) use ($designationId) {
                    $query->select('level')
                        ->from('designations')
                        ->where('id', $designationId);
                }]
            ])
            ->whereNotNull('profiles.fullname')
            ->orderBy('designations.level','ASC')
            ->get();
    }

    public function getOrganizationWise($organizationId) {
        return DB::table('users')
            ->select('users.id', 'profiles.fullname', 'organizations.name AS organization')
            ->leftJoin('organizations','users.organization_id','=','organizations.id')
            ->leftJoin('profiles','users.id','=','profiles.user_id')
            ->where([
                ['users.organization_id', '=', $organizationId]
            ])
            ->where([
                'users.is_proxy_user' => 0
            ])
            ->whereNotIn('users.id', function($query){
                $query->select('original_user_id')
                    ->from('proxy_user_logs')
                    ->whereNull('to');
            })
            ->whereNotNull('profiles.fullname')
            ->orderBy('profiles.fullname','ASC')
            ->get();
    }

    public function getUsersToUnsetProxy($organizationId) {
        $users = DB::table('users')
            ->select('users.id', 'original_users.fullname AS original_user', 'proxy_users.fullname AS proxy_user',
                'organizations.name AS organization', 'proxy_user_logs.reason', 'attachments.name AS attachment_name',
                'attachments.path', 'attachments.extension')
            ->leftJoin('organizations','users.organization_id','=','organizations.id')
            ->leftJoin('profiles AS original_users','users.id','=','original_users.user_id')
            ->leftJoin('proxy_user_logs','users.id', '=', 'proxy_user_logs.original_user_id')
            ->leftJoin('profiles AS proxy_users','proxy_user_logs.proxy_user_id', '=', 'proxy_users.user_id')
            ->leftJoin('attachments','proxy_user_logs.attachment_id', '=', 'attachments.id')
            ->where([
                ['users.organization_id', '=', $organizationId]
            ])
            ->whereIn('users.id', function($query){
                $query->select('original_user_id')
                    ->from('proxy_user_logs')
                    ->whereNull('to');
            })
            ->whereNull('proxy_user_logs.to')
            ->whereNotNull(['original_users.fullname', 'proxy_users.fullname'])
            ->orderBy('proxy_user_logs.from','DESC')
            ->orderBy('original_users.fullname','ASC')
            ->get();

        foreach($users as $key => $user) {
            if(isset($user->path) && isset($user->attachment_name)) {
                $file = 'storage/' . $user->path . '/' . $user->attachment_name;
                $users[$key]->attachment = asset($file);
            } else {
                $users[$key]->attachment = null;
                unset($user->extension);
            }

            unset($user->path);
            unset($user->attachment_name);
        }

        return $users;
    }

    public function validUserForProxy($userId) {
        $rowFound = DB::table('users')
            ->select('users.id')
            ->where([
                'users.id' => $userId,
                'users.is_proxy_user' => 0
            ])
            ->whereNotIn('users.id', function($query){
                $query->select('original_user_id')
                    ->from('proxy_user_logs')
                    ->whereNull('to');
            })
            ->count();

        return $rowFound == 0 ? false : true;
    }

    public function findByEmail($email) {
        try {
            $user = $this->model->where([
                'email' => $email
            ])->firstOrFail();
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $user;
    }

    public function create(array $data) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        return DB::transaction(function() use ($userRoleRepository, $data) {
            if(isset($data['users'])) {
                unset($data['users']['password_confirmation']);
            }

            $userId = isset($data['users']) ? parent::create($data['users']) : parent::create($data);

            if(isset($data['roles'])) {
                $userRoleRepository->createAll($data['roles'],$userId);
            }

            $this->checkAndUpdateIsProfileCompletedColumn($userId);

            return $userId;
        });
    }

    public function update(array $data, $id)
    {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        return DB::transaction(function() use ($userRoleRepository, $data, $id) {
            if(isset($data['users']['password_confirmation'])) {
                unset($data['users']['password_confirmation']);
            }

            if(isset($data['roles'])) {
                $userRoleRepository->updateAll($data['roles'], $id);
            }

            return isset($data['users']) ? parent::update($data['users'], $id) : parent::update($data, $id);
        });
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function isValidUser($userId, $password) {
        $user = $this->getDetails($userId);

        if(!$user) {
           return false;
        }

        return Hash::check($password, $user->password);
    }

    public function getProxyUser($userId) {
        $proxyUser = DB::table('users')
            ->select('proxy_user_logs.proxy_user_id', 'profiles.fullname as proxy_user_fullname')
            ->leftJoin('proxy_user_logs', 'users.id', '=', 'proxy_user_logs.original_user_id')
            ->leftJoin('profiles', 'proxy_user_logs.proxy_user_id', '=', 'profiles.user_id')
            ->leftJoin('users AS proxy_users', 'proxy_user_logs.proxy_user_id', '=', 'proxy_users.id')
            ->where([
                'users.id' => $userId,
                'users.is_proxy_user' => 0,
                'proxy_users.is_proxy_user' => 1
            ])
            ->whereNull('proxy_user_logs.to')
            ->orderBy('proxy_user_logs.id', 'DESC')
            ->first();

        return isset($proxyUser->proxy_user_id) && $proxyUser->proxy_user_id > 0 ? $proxyUser : false;
    }

    public function checkAndUpdateIsProfileCompletedColumn($id) {
        $profileService = resolve('App\Services\ProfileService');

        $data['is_profile_completed'] = $profileService->isProfileCompleted($id);

        $this->update($data, $id);

        return $data['is_profile_completed'] ? true : false;
    }

    public function isApplicant($id) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        $user = $this->getDetails($id);

        return $user->user_type_id == config('app_constants.user_type.applicant') && $userRoleRepository->isApplicant($id);
    }

    public function isAdmin($id) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        $user = $this->getDetails($id);

        return $user->user_type_id == config('app_constants.user_type.system_admin') && $userRoleRepository->isAdmin($id);
    }

    public function isDAEAdmin($id) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        $user = $this->getDetails($id);

        return $user->user_type_id == config('app_constants.user_type.dae_admin') && $userRoleRepository->isDAEAdmin($id);
    }

    public function isDaeOfficial($id) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        $user = $this->getDetails($id);

        return $user->user_type_id == config('app_constants.user_type.dae_user') && $userRoleRepository->isDaeOfficial($id);
    }

    public function isCnfFirm($id) {
        $user = $this->getDetails($id);

        return $user->user_type_id == config('app_constants.user_type.cnf')
            && $user->company_type == config('app_constants.company_types.CNF');
    }

    public function getCnfAgents($organizationId) {
        return $this->model
            ->select('id', 'email', 'mobile', 'card_no', 'organization_id')
            ->with(['profile:id,user_id,fullname,cnf_firm_name,designation_name', 'organization:id,name'])
            ->where([
                'user_type_id' => config('app_constants.user_type.cnf'),
                'company_type' => config('app_constants.company_types.CNF'),
                'organization_id' => $organizationId,
                'is_active' => true
            ])
            ->get();
    }

    public function checkConfirmationCodeValidity($id, $confirmationCode) {
        $result = $this->model
            ->where([
                'id' => $id,
                'confirmation_code' => $confirmationCode
            ])
            ->first();

        return $result ? true : false;
    }

    public function getUserTypeLabel($user) {
        $id = is_numeric($user) ? $user : 0;

        if($id > 0) {
            $user = $this->model->with('roles:id,name')->find($id);
        }

        $userTypes = config('app_constants.user_type');
        $roles = config('app_constants.roles');

        $roleIds = isset($user->roles) ? $user->roles->pluck('id')->toArray() : [];

        if(empty($roleIds)) {
            return 'NOT_IDENTIFIED';
        }

        $applicantRoles = [
            $roles['PUBLIC_USER']
        ];

        $cnfRoles = [
            $roles['CNF']
        ];

        $daeAdminRoles = [
            $roles['DAE_ADMIN']
        ];

        $systemAdminRoles = [
            $roles['SYSTEM_ADMIN']
        ];

        $daeUserExceptRoles = [
            $roles['SYSTEM_ADMIN'],
            $roles['DAE_ADMIN'],
            $roles['CNF'],
            $roles['PUBLIC_USER']
        ];

        if($user->user_type_id == $userTypes['applicant'] && count(array_intersect($roleIds, $applicantRoles)) == count($applicantRoles)) {
            return 'APPLICANT';
        } elseif($user->user_type_id == $userTypes['cnf'] && count(array_intersect($roleIds, $cnfRoles)) == count($cnfRoles)) {
            return 'CNF';
        } elseif($user->user_type_id == $userTypes['dae_admin'] && count(array_intersect($roleIds, $daeAdminRoles)) == count($daeAdminRoles)) {
            return 'DAE_ADMIN';
        } elseif($user->user_type_id == $userTypes['system_admin'] && count(array_intersect($roleIds, $systemAdminRoles)) == count($systemAdminRoles)) {
            return 'SYSTEM_ADMIN';
        } elseif($user->user_type_id == $userTypes['dae_user'] && count(array_intersect($roleIds, $daeUserExceptRoles)) == 0) {
            return 'DAE_USER';
        }

        return 'NOT_IDENTIFIED';
    }

    public function getUserReportForDashboard() {
        $userTypes = config('app_constants.user_type');
        $companyTypes = config('app_constants.company_types');

        $users = $this->model->count();

        $activeUsers = $this->model->where('is_active',1)->count();

        $activeCompletedProfileUsers = $this->model->where([
            'is_active' => 1,
            'is_profile_completed' => 1
        ])->count();

        $activeDaeAdminUsers = $this->model->where([
            'is_active' => 1,
            'user_type_id' => $userTypes['dae_admin']
        ])->count();
        $activeDaeUsers = $this->model->where([
            'is_active' => 1,
            'user_type_id' => $userTypes['dae_user']
        ])->count();

        $activePersonalUsers = $this->model->where([
            'is_active' => 1,
            'company_type' => $companyTypes['PERSONAL'],
            'user_type_id' => $userTypes['applicant']
        ])->count();
        $activeOrganizationalUsers = $this->model->where([
            'is_active' => 1,
            'company_type' => $companyTypes['ORGANIZATIONAL'],
            'user_type_id' => $userTypes['applicant']
        ])->count();

        $activeCnfUsers = $this->model->where([
            'is_active' => 1,
            'company_type' => $companyTypes['CNF'],
            'user_type_id' => $userTypes['cnf']
        ])->count();

        return [
            [
                'entity' => 'USER',
                'label' => 'Users',
                'count' => $users
            ],
            [
                'entity' => 'USER',
                'label' => 'Active Users',
                'count' => $activeUsers
            ],
            [
                'entity' => 'USER',
                'label' => 'Active Users (Profile Completed)',
                'count' => $activeCompletedProfileUsers
            ],
            [
                'entity' => 'USER',
                'label' => 'Active DAE Admins',
                'count' => $activeDaeAdminUsers
            ],
            [
                'entity' => 'USER',
                'label' => 'Active DAE Users',
                'count' => $activeDaeUsers
            ],
            [
                'entity' => 'USER',
                'label' => 'Active Personal Users',
                'count' => $activePersonalUsers
            ],
            [
                'entity' => 'USER',
                'label' => 'Active Organizational Users',
                'count' => $activeOrganizationalUsers
            ],
            [
                'entity' => 'USER',
                'label' => 'Active C&F Users',
                'count' => $activeCnfUsers
            ]
        ];
    }
}
