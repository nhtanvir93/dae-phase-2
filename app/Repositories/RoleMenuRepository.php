<?php
namespace App\Repositories;

use App\Models\RoleMenu;
use App\Repositories\Interfaces\RoleMenuRepositoryInterface;
use Illuminate\Support\Facades\DB;

class RoleMenuRepository extends BaseRepository implements RoleMenuRepositoryInterface
{
    public function __construct(RoleMenu $model)
    {
        parent::__construct($model);
    }

    public function createAll($menus, $roleId) {
        foreach($menus as $menuId) {
            $roleMenu = [
                'role_id' => $roleId,
                'menu_id' => $menuId,
            ];

            parent::create($roleMenu);
        }
    }

    public function updateAll($menus, $roleId) {
        $this->deleteAll($roleId);
        $this->createAll($menus, $roleId);
    }

    public function deleteAll($roleId) {
        $this->model->where('role_id', $roleId)->delete();
    }

    public function getMenusForRole($roleId) {
        return $this->model->select('id', 'role_id', 'menu_id')->with(['menu:id,name','role:id,name'])->where('role_id', $roleId)->get();
    }

    public function assignToRole($data) {
        return DB::transaction(function() use ($data) {
            $menus = isset($data['menus']) ? $data['menus'] : [];
            $this->updateAll($menus,$data['role_id']);
        });
    }

    public function getMenusForRoles($roleIds) {
        return $this->model->select(DB::raw('DISTINCT menu_id'))
            ->with([
                'menu:id,name,short_name,uri,position,description,parent_id,controller,method,is_visible',
                'role:id,name', 'menu.parentMenu:id,name,short_name,uri,position,description,controller,method,is_visible'
            ])
            ->whereIn('role_id', $roleIds)
            ->get();
    }

    public function isAllowedToAccess($roleIds, $menuId) {
        $status = $this->model->select('menu_id')
            ->whereIn('role_id', $roleIds)
            ->where('menu_id', $menuId)
            ->first();

        return $status ? true : false;
    }

    public function isGivenUriAllowed($uri, $roleIds) {
        $status = $this->model->select('menu_id')
            ->whereIn('role_id', $roleIds)
            ->whereIn('menu_id', function($query) use ($uri) {
                $query->select('id')
                    ->from('menus')
                    ->whereNull('deleted_at')
                    ->where('uri', $uri);
            })
            ->first();

        return $status ? true : false;
    }

    public function isGivenMethodAllowed($controllerMethods, $roleIds) {
        foreach($controllerMethods as $key => $controllerMethod) {
            $status = $this->model->select('menu_id')
                ->whereIn('role_id', $roleIds)
                ->whereIn('menu_id', function($query) use ($controllerMethod) {
                    $query->select('id')
                        ->from('menus')
                        ->whereNull('deleted_at')
                        ->where([
                            'controller' => $controllerMethod['controller'],
                            'method' => $controllerMethod['method']
                        ]);
                })
                ->first();

            $controllerMethods[$key]['has_access'] = $status ? true : false;
        }

        return $controllerMethods;
    }
}