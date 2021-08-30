<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckValidUserAndRoles
{
    public function handle($request, Closure $next)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $applicationId = $request->route('application_id') ? $request->route('application_id') : $request->get('application_id');
        $application = $applicationRepository->getDetails($applicationId);

        if(!$application) {
            return response()->json([
                'success' => false,
                'message' => 'Application not found'
            ],Response::HTTP_NOT_FOUND);
        } elseif ($application->is_approved == 1 || $application->is_cancelled == 1) {
            return response()->json([
                'success' => false,
                'message' => 'Application is either approved or rejected already'
            ],Response::HTTP_UNPROCESSABLE_ENTITY);
        } elseif ($application->is_paid == 0 || $application->current_status == config('app_constants.app_statuses.RECHECKED')) {
            return response()->json([
                'success' => false,
                'message' => 'Either application total fee is not paid or application is rechecked'
            ],Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $appHoldingUserId = $application->app_holding_user_id > 0 ? $application->app_holding_user_id : 0;

        if(!$appHoldingUserId) {
            return response()->json([
                'success' => false,
                'message' => 'No DAE user is set for this application'
            ],Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $appType = $appTypeRepository->getDetails($application->app_type_id);
        $businessType = $appType->type;

        if(!$businessType) {
            return response()->json([
                'success' => false,
                'message' => 'No export/import type is defined for this type of application'
            ],Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $extraRoleIdForProcessing =  config("app_constants.roles.$businessType");

        $isValidUser = false;
        $proxyUser = $userRepository->getProxyUser($appHoldingUserId);

        if($proxyUser && auth()->user()->id != $proxyUser->proxy_user_id) {
            return response()->json([
                'success' => false,
                'message' => 'Proxy user and logged-in user are not same'
            ],Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        if(!$proxyUser && $appHoldingUserId == auth()->user()->id) {
            $stageRoles = $applicationRepository->getCurrentStageRoles($applicationId);

            if($stageRoles->count() > 0) {
                foreach($stageRoles as $stageRoleId) {
                    if($userRoleRepository->hasRoles(auth()->user()->id, [
                        $stageRoleId,
                        $extraRoleIdForProcessing
                    ])) {
                        $isValidUser = true;
                        break;
                    }
                }

                if(!$isValidUser) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Valid user with invalid roles'
                    ],Response::HTTP_UNPROCESSABLE_ENTITY);
                }
            }
        } elseif(!$proxyUser && $appHoldingUserId != auth()->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid user for processing application'
            ],Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $next($request);
    }
}
