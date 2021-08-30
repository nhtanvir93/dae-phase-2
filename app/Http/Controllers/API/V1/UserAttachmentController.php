<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAttachmentRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class UserAttachmentController extends Controller
{
    public function update(UserAttachmentRequest $request) {
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        try {
            $userId = auth()->user()->id;

            $userAttachmentRepository->updateAll($request->validated(), $userId);
            $userRepository->checkAndUpdateIsProfileCompletedColumn($userId);

            return response()->json([
                'success' => true,
                'message' => 'Profile attachment is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
