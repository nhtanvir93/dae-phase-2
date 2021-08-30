<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Events\UserLoggedout;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest)
    {
        $proxyUserLogRepository = resolve('App\Repositories\Interfaces\ProxyUserLogRepositoryInterface');
        $userLogRepository = resolve('App\Repositories\Interfaces\UserLogRepositoryInterface');

        $credentials = $loginRequest->validated();
        $credentials['is_active'] = true;
        $token = auth()->attempt($credentials);
        $hasProxy = $token ? $proxyUserLogRepository->hasProxy(auth()->user()->id) : false;

        if ($hasProxy || !$token) {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $userLogRepository->createFromUserId(auth()->user()->id);

        return $this->respondWithToken($token);
    }

    public function me()
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $user = $userRepository->getDetails(auth()->user()->id, true);

        return response()->json([
            'success' => $user ? true : false,
            'data' => $user ? $user : null,
        ],$user ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function logout()
    {
        $user = auth()->user();

        UserLoggedout::dispatch($user->id, true);

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ],Response::HTTP_OK);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'success' => true,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 3600
        ],Response::HTTP_OK);
    }

    public function registration(RegistrationRequest $request) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        try {
            $inputs = $request->validated();

            $cnfCompanyType = config('app_constants.company_types.CNF');
            $cnfRoleId = config('app_constants.roles.CNF');
            $publicUserRoleId = config('app_constants.roles.PUBLIC_USER');

            $userId = $userRepository->create($inputs);

            $roleId = $inputs['company_type'] == $cnfCompanyType ? $cnfRoleId : $publicUserRoleId;

            $userRoleRepository->createAll([$roleId], $userId);

            return response()->json([
                'success' => true,
                'data' => [
                    'user_id' => $userId
                ],
                'message' => config('app_constants.registration.success'),
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function logoutAutomatically() {
        $user = auth()->user();

        UserLoggedout::dispatch($user->id);

        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ],Response::HTTP_OK);
    }
}
