<?php
namespace App\Repositories;

use App\Models\Menu;
use App\Http\Resources\MenuResource;
use App\Repositories\Interfaces\MenuRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{
    private $with = [
        'parentMenu:id,name,short_name,description', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->selectRaw('id,name,short_name,uri,position,description,parent_id,controller,method,is_visible')
            ->with(['parentMenu:id,name,short_name,uri,position,description,controller,method,is_visible'])
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'menus.name',
            'menus.short_name',
            'parent_menus.name',
            'menus.is_visible',
            'menus.description',
            'menus.controller',
            'menus.method'
        ];

        $likeQueryKeys = [
            'menus.name',
            'menus.short_name'
        ];

        $zeroExcludedKeys = [
            'parent_menus.id'
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
        $queryFiltered = DB::table('menus')
            ->leftJoin('menus AS parent_menus','menus.parent_id','=','parent_menus.id')
            ->select('menus.id', 'menus.name', 'menus.short_name', 'menus.description', 'parent_menus.name AS parent_menu',
                'menus.controller', 'menus.method', 'menus.is_visible')
            ->whereNull('menus.deleted_at')
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
            $menu = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new MenuResource($menu) : $menu;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getAllParents($includedIds = []) {
        return $this->model
            ->select('id', 'name')
            ->whereNull(['controller', 'method'])
            ->when(!empty($includedIds), function($query) use ($includedIds) {
                $query->whereIn('id', $includedIds);
            })
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function isParentMenu($id) {
        try {
            $this->model->where('id',$id)->whereNull(['controller', 'method'])->firstOrFail();
            return true;
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getMenusArray($includedIds = []) {
        $parentMenus = $this->getAllParents($includedIds)->toArray();
        $subMenuIds = [];

        foreach($parentMenus as $key => $parentMenu) {
            $result = $this->getSubMenus($parentMenu['id'], $includedIds);
            if(isset($result['sub_menus'])) {
                $parentMenus[$key]['sub_menus'] = $result['sub_menus'];
                $subMenuIds = array_unique(array_merge($subMenuIds, $result['sub_menu_ids']));
            }
        }

        return $this->deleteMenu($parentMenus,$subMenuIds);
    }

    private function deleteMenu($menus, $menuIds) {
        foreach($menus as $key => $menu) {
            if(in_array($menu['id'], $menuIds)) {
                unset($menus[$key]);
            }
        }
        return array_values($menus);
    }

    public function getSubMenus($id, $includedIds = []) {
       $query = empty($includedIds) ?
           $this->model->select('id','name','uri','controller','method','is_visible')->where('parent_id',$id)
           : $this->model->select('id','name','uri','controller','method','is_visible')
               ->where('parent_id',$id)->whereIn('id', $includedIds);

       if($query->count() > 0) {
           $submenus = $query->get()->toArray();
           $menuIds = [];

           foreach($submenus as $key => $submenu) {
               $result = empty($includedIds) ? $this->getSubMenus($submenu['id']) : $this->getSubMenus($submenu['id'], $includedIds);
               if(isset($result['sub_menus']) && $result['sub_menus']) {
                   $menuIds[] = $submenu['id'];
                   $submenus[$key]['parent_menu_id'] = $id;
                   $submenus[$key]['sub_menus'] = $result['sub_menus'];
               } else {
                   $submenus[$key]['parent_menu_id'] = $id;
               }
           }

           return [
               'sub_menu_ids' => array_unique($menuIds),
               'sub_menus' => $submenus
           ];
       } else {
           return [];
       }
    }

    public function searchByControllerandMethod($controller, $method) {
        return $this->model
            ->selectRaw('id,name,short_name,uri,position,description,parent_id,controller,method,is_visible')
            ->with(['parentMenu:id,name,short_name,uri,position,description,controller,method,is_visible'])
            ->where([
                'controller' => $controller,
                'method' => $method
            ])->first();
    }

    public function searchByUri($uri) {
        return $this->model
            ->selectRaw('id,name,short_name,uri,position,description,parent_id,controller,method,is_visible')
            ->with(['parentMenu:id,name,short_name,uri,position,description,controller,method,is_visible'])
            ->where([
                'uri' => $uri
            ])->first();
    }
}
