<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\AssignMenusToRoleRequest;
use Illuminate\Database\QueryException;

class RoleMenuController extends Controller
{
    public function getMenusForRole($roleId) {
        $roleMenuRepository = resolve('App\Repositories\Interfaces\RoleMenuRepositoryInterface');

        $menus = $roleMenuRepository->getMenusForRole($roleId);

        return response()->json([
            'success' => $menus->isEmpty() ? false : true,
            'data' => $menus
        ],Response::HTTP_OK);
    }

    public function assignToRole(AssignMenusToRoleRequest $request) {
        $roleMenuRepository = resolve('App\Repositories\Interfaces\RoleMenuRepositoryInterface');

        try {
            $roleMenuRepository->assignToRole($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Menus assigned to role operation is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
