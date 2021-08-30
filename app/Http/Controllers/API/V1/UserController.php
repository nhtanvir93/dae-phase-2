<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Database\QueryException;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $users = $userRepository->lists();

        return response()->json([
            'success' => $users->isEmpty() ? false : true,
            'data' => $users
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $data = $userRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(UserRequest $request)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $id = $userRepository->create($request->validated());

            return response()->json([
                'user_id' => $id,
                'success' => true,
                'message' => 'An user is created successfully',
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
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $user = $userRepository->getDetails($id, true);

        return response()->json([
            'success' => $user ? true : false,
            'data' => $user ? $user : null,
        ],$user ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(UserRequest $request, $id)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $userRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The user information is updated successfully',
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
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        if(!$userRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such user information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $userRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The user information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getSuperiors($organizationId, $designationId) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $superiors = $userRepository->getSuperiors($organizationId, $designationId);

        return response()->json([
            'success' => $superiors->isEmpty() ? false : true,
            'data' => $superiors
        ],Response::HTTP_OK);
    }

    public function changePassword(ChangePasswordRequest $request) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $userRepository->update($request->only('password'), auth()->user()->id);

            return response()->json([
                'success' => true,
                'message' => 'Password has been changed successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getOrganizationWise($organizationId) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $users = $userRepository->getOrganizationWise($organizationId);

        return response()->json([
            'success' => $users->isEmpty() ? false : true,
            'data' => $users
        ],Response::HTTP_OK);
    }

    public function getUsersToUnsetProxy($organizationId) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $users = $userRepository->getUsersToUnsetProxy($organizationId);

        return response()->json([
            'success' => $users->isEmpty() ? false : true,
            'data' => $users
        ],Response::HTTP_OK);
    }

    public function isEditable($id) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        return $userRepository->getDetails($id);
    }

    public function activate($id)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $userRepository->update(['is_active' => 1], $id);

            return response()->json([
                'success' => true,
                'message' => 'The user is activated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function checkProfileCompletedOrNot($id)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $status = $userRepository->checkAndUpdateIsProfileCompletedColumn($id);

            return response()->json([
                'success' => $status,
                'message' => $status ? 'Your profile is completed' : 'Your profile is incomplete',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isApplicant() {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $isApplicant = $userRepository->isApplicant(auth()->user()->id);

        return response()->json([
            'success' => true,
            'is_applicant' => $isApplicant
        ],Response::HTTP_OK);
    }

    public function isAdmin() {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $isAdmin = $userRepository->isAdmin(auth()->user()->id);

        return response()->json([
            'success' => true,
            'is_admin' => $isAdmin
        ],Response::HTTP_OK);
    }

    public function isDAEAdmin() {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $isDAEAdmin = $userRepository->isDAEAdmin(auth()->user()->id);

        return response()->json([
            'success' => true,
            'is_dae_admin' => $isDAEAdmin
        ],Response::HTTP_OK);
    }

    public function isDaeOfficial() {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $isDaeOfficial = $userRepository->isDaeOfficial(auth()->user()->id);

        return response()->json([
            'success' => true,
            'is_dae_official' => $isDaeOfficial
        ],Response::HTTP_OK);
    }

    public function getUserFullNames() {
        $profileRepository = resolve('App\Repositories\Interfaces\ProfileRepositoryInterface');

        $users = $profileRepository->getUserFullNames(request()->user_ids);

        return response()->json([
            'success' => $users->isEmpty() ? false : true,
            'data' => $users
        ],Response::HTTP_OK);
    }

    public function getCnfAgents($organizationId) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $users = $userRepository->getCnfAgents($organizationId);

        return response()->json([
            'success' => $users->isEmpty() ? false : true,
            'data' => [
                'cnf_firms' => $users
            ]
        ],Response::HTTP_OK);
    }

    public function getMenusForUser() {


        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $roleMenuRepository = resolve('App\Repositories\Interfaces\RoleMenuRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');
        $menuService = resolve('App\Services\MenuService');

        $userTypeLabel = $userRepository->getUserTypeLabel(auth()->user()->id);

        if($userTypeLabel == 'SYSTEM_ADMIN') {
            $menus = $menuRepository->getMenusArray();

            return response()->json([
                'success' => count($menus) == 0 ? false : true,
                'data' => $menus
            ],Response::HTTP_OK);
        }

        $userRoles = $userRoleRepository->getRoles(auth()->user()->id);

        if($userRoles->isEmpty()) {
            return response()->json([
                'success' => false
            ],Response::HTTP_OK);
        }

        $userRoleIds = $userRoles->pluck('role_id')->toArray();

        $roleMenus = $roleMenuRepository->getMenusForRoles($userRoleIds);

        $menuIds = $roleMenus->whereNull('parent_id')->pluck('menu_id')->toArray();

        $menus = $menuRepository->getMenusArray($menuIds);
        $menus = $menuService->removeParentMenuWithHiddenSubMenu($menus);

        return response()->json([
            'success' => count($menus) == 0 ? false : true,
            'data' => $menus
        ],Response::HTTP_OK);
    }

    public function activateWithConfirmationCode($id, $confirmationCode) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $isValid = $userRepository->checkConfirmationCodeValidity($id, $confirmationCode);

        if(!$isValid) {
            return response()->json([
                'success' => $isValid,
                'message' => 'Wrong confirmation code is given, please try again'
            ],Response::HTTP_OK);
        }

        try {
            $userRepository->update([
                'is_active' => 1
            ], $id);

            return response()->json([
                'success' => true,
                'message' => 'Confirmation code is matched successfully, now you can login',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
