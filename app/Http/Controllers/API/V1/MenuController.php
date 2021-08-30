<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MenuRequest;
use Illuminate\Database\QueryException;

class MenuController extends Controller
{
    public function index()
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        $menus = $menuRepository->lists();

        return response()->json([
            'success' => $menus->isEmpty() ? false : true,
            'data' => $menus
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        $data = $menuRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(MenuRequest $request)
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        try {
            $validatedData = $request->validated();
            unset($validatedData['is_sub_menu']);

            $id = $menuRepository->create($validatedData);

            return response()->json([
                'menu_id' => $id,
                'success' => true,
                'message' => 'A menu is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show($id)
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        $menu = $menuRepository->getDetails($id, true);

        return response()->json([
            'success' => $menu ? true : false,
            'data' => $menu ? $menu : null,
        ],$menu ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(MenuRequest $request, $id)
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        try {
            $validatedData = $request->validated();
            unset($validatedData['is_sub_menu']);

            $menuRepository->update($validatedData, $id);

            return response()->json([
                'success' => true,
                'message' => 'The menu information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        if(!$menuRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such menu information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $menuRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The menu information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        return $menuRepository->getDetails($id);
    }

    public function getAllParents() {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        $parentMenus = $menuRepository->getAllParents();

        return response()->json([
            'success' => $parentMenus->isEmpty() ? false : true,
            'data' => $parentMenus
        ],Response::HTTP_OK);
    }

    public function getMenusForRoleAssignment() {
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        $menus = $menuRepository->getMenusArray();

        return response()->json([
            'success' => count($menus) > 0 ? true : false,
            'data' => $menus
        ],Response::HTTP_OK);
    }
}
