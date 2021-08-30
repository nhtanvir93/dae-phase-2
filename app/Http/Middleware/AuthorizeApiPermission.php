<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeApiPermission
{
    public function handle($request, Closure $next)
    {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $roleMenuRepository = resolve('App\Repositories\Interfaces\RoleMenuRepositoryInterface');
        $menuRepository = resolve('App\Repositories\Interfaces\MenuRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        if($userRepository->isAdmin(auth()->user()->id)) {
            return $next($request);
        }

        $userRoles = $userRoleRepository->getRoles(auth()->user()->id);

        if($userRoles->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No role is set yet'
            ],Response::HTTP_UNAUTHORIZED);
        }

        $roleIds = $userRoles->pluck('role_id')->toArray();

        $currentRouteAction = Route::currentRouteAction();
        $tempCurrentRouteAction = explode('@', $currentRouteAction);

        if(isset($tempCurrentRouteAction[1])) {
            $action = $tempCurrentRouteAction[1];

            $tempCurrentRouteAction = explode('\\', $tempCurrentRouteAction[0]);
            $controller = $tempCurrentRouteAction[count($tempCurrentRouteAction) - 1];

            $menu = $menuRepository->searchByControllerandMethod($controller, $action);

            if(!$menu) {
                return $next($request);
            }

            $isAuthorized = $roleMenuRepository->isAllowedToAccess($roleIds, $menu->id);

            if(!$isAuthorized) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unauthorized'
                ],Response::HTTP_FORBIDDEN);
            }
        }

        return $next($request);
    }
}
