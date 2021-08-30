<?php

namespace App\Repositories;

use App\Models\UserRole;
use App\Repositories\Interfaces\UserRoleRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class UserRoleRepository extends BaseRepository implements UserRoleRepositoryInterface
{
    public function __construct(UserRole $model)
    {
        parent::__construct($model);
    }

    public function createAll($roles, $userId) {
        foreach($roles as $roleId) {
            $userRole = [
                'user_id' => $userId,
                'role_id' => $roleId,
            ];

            parent::create($userRole);
        }
    }

    public function updateAll($roles, $userId) {
        $this->deleteAll($userId);
        $this->createAll($roles, $userId);
    }

    public function deleteAll($userId) {
        $this->model->where('user_id', $userId)->delete();
    }

    public function hasRoles($userId, $roles) {
        $totalRowFound = $this->model
            ->where('user_id', $userId)
            ->whereIn('role_id', $roles)
            ->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function getRoles($userId) {
        return $this->model
            ->where('user_id', $userId)
            ->get();
    }

    public function isApplicant($userId) {
        $roleId = config('app_constants.roles.PUBLIC_USER');

        $totalRowFound = $this->model
            ->where([
                'user_id' => $userId,
                'role_id' => $roleId
            ])
            ->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function isAdmin($userId) {
        $roleId = config('app_constants.roles.SYSTEM_ADMIN');

        $totalRowFound = $this->model
            ->where([
                'user_id' => $userId,
                'role_id' => $roleId
            ])
            ->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function isDAEAdmin($userId) {
        $roleId = config('app_constants.roles.DAE_ADMIN');

        $totalRowFound = $this->model
            ->where([
                'user_id' => $userId,
                'role_id' => $roleId
            ])
            ->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function isDaeOfficial($userId) {
        $excludedRoleIds = [
            config('app_constants.roles.SYSTEM_ADMIN'),
            config('app_constants.roles.PUBLIC_USER'),
            config('app_constants.roles.DAE_ADMIN')
        ];

        $totalRowFound = $this->model
            ->where('user_id', $userId)
            ->whereNotIn('role_id', $excludedRoleIds)
            ->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function getActiveUserUsingRoles($organizationId, $roleIds) {
        try {
            return $this->model
                ->select('users.id')
                ->leftJoin('users', 'user_role.user_id', '=', 'users.id')
                ->where([
                    'users.is_active' => 1,
                    'users.organization_id' => $organizationId
                ])
                ->where(function($query) use ($roleIds) {
                    foreach($roleIds as $key => $roleId) {
                        if($key == 0) {
                            $query->where('user_role.role_id', $roleId);
                        } else {
                            $query->orWhere('user_role.role_id', $roleId);
                        }
                    }
                })
                ->groupBy('users.id')
                ->havingRaw('COUNT(user_role.id) = ?', [count($roleIds)])
                ->inRandomOrder()
                ->firstOrFail();
        } catch(ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getDaeOfficialUserIds($organizationId) {
        $excludedRoleIds = [
            config('app_constants.roles.SYSTEM_ADMIN'),
            config('app_constants.roles.PUBLIC_USER'),
            config('app_constants.roles.DAE_ADMIN')
        ];

        $result = $this->model
            ->leftJoin('users', function ($join) use ($organizationId) {
                $join->on('user_role.user_id', '=', 'users.id');
                $join->whereNull('users.deleted_at');
            })
            ->select('user_role.user_id', DB::raw('COUNT(user_role.id) AS total_holding_roles'))
            ->whereNotIn('user_role.role_id', $excludedRoleIds)
            ->where('users.organization_id', $organizationId)
            ->groupBy('user_role.user_id')
            ->havingRaw('COUNT(user_role.id) > 0')
            ->get();

        return $result->count() > 0 ? $result->pluck('user_id')->toArray() : false;
    }
}