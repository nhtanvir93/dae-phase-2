<?php

namespace App\Services;

class MenuService
{
    private function getFilteredMenu($menu) {
        if(isset($menu['sub_menus']) && count($menu['sub_menus']) == 0) {
            return false;
        } elseif (isset($menu['sub_menus']) && count($menu['sub_menus']) > 0) {
            return $this->getFilteredMenu($menu['sub_menus']);
        }

        $menus = collect($menu);
        $parentMenus = $menus->whereNull('controller');
        $subMenus = $menus->whereNotNull('controller');

        $deleteParentMenuIds = [];

        if($parentMenus->count() > 0) {
            foreach($parentMenus->toArray() as $parentMenu) {
                $filteredMenus = $this->getFilteredMenu($parentMenu['sub_menus']);

                if(!$filteredMenus) {
                    $deleteParentMenuIds[] = $parentMenu['id'];
                }
            }
        }

        $menus = $menus->whereNotIn('id', $deleteParentMenuIds)->toArray();

        $hiddenMenus = $subMenus->where('is_visible',0);

        return $hiddenMenus->count() == $subMenus->count()
            && count($deleteParentMenuIds) == $parentMenus->count() ? false : $menus;
    }

    public function removeParentMenuWithHiddenSubMenu($menus) {
        foreach($menus as $key => $menu) {
            $filteredMenus = $this->getFilteredMenu($menu);

            if($filteredMenus) {
                $menus[$key]['sub_menus'] = $filteredMenus;
            } else {
                unset($menus[$key]);
            }
        }

        return array_values($menus);
    }
}