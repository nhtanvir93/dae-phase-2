<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;
use App\Rules\ValidController;
use App\Rules\ValidMethod;
use App\Rules\ValidParentMenu;

class MenuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');
        $menu = $menuRepository->getDetails($this->route('menu'));

        $menuId = $menu ? $menu->id : 0;

        $isSubMenu = request()->get('is_sub_menu');

        $rules = [
            'name' => ['required', "unique:menus,name,$menuId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'short_name' => ['nullable', "unique:menus,short_name,$menuId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'description' => 'nullable|max:150'
        ];

        if($isSubMenu == 1) {
            $method = request()->get('method');

            $rules['parent_id'] = ['required', new ValidParentMenu];
            $rules['uri'] = 'nullable|max:150';
            $rules['controller'] = ['required', 'max:150', "unique:menus,controller,$menuId,id,method," . $method . ",deleted_at,NULL",
                new ValidController];
            $rules['method'] = ['required', 'max:150', new ValidMethod(request()->all())];
        } else {
            $rules['parent_id'] = ['nullable', new ValidParentMenu];
        }

        $rules['is_visible'] = 'required|in:0,1';
        $rules['is_sub_menu'] = 'required|in:0,1';

        return $rules;
    }

    public function attributes(){

        return [
            'parent_id' => 'parent menu',
            'is_visible' => 'visibility'
        ];

    }

    public function messages()
    {
        return [
            'controller.unique' => 'Menu with same controller and same method already exists'
        ];
    }
}
