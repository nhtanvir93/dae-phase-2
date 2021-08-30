<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class ProfileController extends Controller
{
    public function store(ProfileRequest $request)
    {
        $profileRepository = resolve('App\Repositories\Interfaces\ProfileRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $userId = auth()->user()->id;

            $profileRepository->manage($request->validated());
            $userRepository->checkAndUpdateIsProfileCompletedColumn($userId);

            return response()->json([
                'success' => true,
                'message' => 'Profile Updated Successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
