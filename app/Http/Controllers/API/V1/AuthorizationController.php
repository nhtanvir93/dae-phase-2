<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ControllerMethodAccessRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class AuthorizationController extends Controller
{
    public function isGivenUriAllowed() {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $roleMenuRepository = resolve('App\Repositories\Interfaces\RoleMenuRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');

        $uri = request()->query('uri');

        if(!$uri) {
            return response()->json([
                'success' => false,
                'message' => 'No uri is given'
            ],Response::HTTP_OK);
        }

        if($userRepository->isAdmin(auth()->user()->id)) {
            return response()->json([
                'success' => true,
                'data' => [
                    'is_given_uri_allowed' => true
                ]
            ],Response::HTTP_OK);
        }

        $userRoles = $userRoleRepository->getRoles(auth()->user()->id);

        if($userRoles->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No role is set yet'
            ],Response::HTTP_BAD_REQUEST);
        }

        $roleIds = $userRoles->pluck('role_id')->toArray();

        try {
            if(!$menuRepository->searchByUri($uri)) {
                return response()->json([
                    'success' => true,
                    'data' => [
                        'is_given_uri_allowed' => true
                    ]
                ],Response::HTTP_OK);
            }

            $isGivenUriAllowed = $roleMenuRepository->isGivenUriAllowed($uri, $roleIds);

            return response()->json([
                'success' => true,
                'data' => [
                    'is_given_uri_allowed' => $isGivenUriAllowed
                ]
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isGivenMethodAllowed(ControllerMethodAccessRequest $request) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $roleMenuRepository = resolve('App\Repositories\Interfaces\RoleMenuRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $controllerMethods = $request->validated()['controllerMethods'];

        if($userRepository->isAdmin(auth()->user()->id)) {
            foreach($controllerMethods as $key => $controllerMethod) {
                $controllerMethods[$key]['has_access'] = true;
            }

            return response()->json([
                'success' => true,
                'data' => $controllerMethods
            ],Response::HTTP_OK);
        }

        $userRoles = $userRoleRepository->getRoles(auth()->user()->id);

        if($userRoles->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No role is set yet'
            ],Response::HTTP_BAD_REQUEST);
        }

        $roleIds = $userRoles->pluck('role_id')->toArray();

        try {
            $data = $roleMenuRepository->isGivenMethodAllowed($request->validated()['controllerMethods'], $roleIds);

            return response()->json([
                'success' => true,
                'data' => $data
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
