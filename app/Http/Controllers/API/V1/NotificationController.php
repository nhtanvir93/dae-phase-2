<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\NotificationMutipleIdRequest;

class NotificationController extends Controller
{
    public function paginatedIndex()
    {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        $data = $notificationRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function getAll($skip, $take) {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        $notifications = $notificationRepository->getAll($skip, $take);

        return response()->json([
            'success' => $notifications->count() > 0 ? true : false,
            'data' => $notifications,
            'total' => $notifications->count(),
            'unread' => $notificationRepository->getTotalUnread()
        ],Response::HTTP_OK);
    }

    public function makeClear($id) {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        try {
            $notificationRepository->makeClear($id);

            return response()->json([
                'success' => true,
                'message' => 'Notification is cleared successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeClearAll() {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        try {
            $notificationRepository->makeClearAll(auth()->user()->id);

            return response()->json([
                'success' => true,
                'message' => 'All notifications are cleared successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeClearMultiple(NotificationMutipleIdRequest $request) {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        try {
            $notificationRepository->makeClearMultiple($request->validated()['ids']);

            return response()->json([
                'success' => true,
                'message' => 'Selected notifications are cleared successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeRead($id) {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        try {
            $notificationRepository->makeRead($id);

            return response()->json([
                'success' => true,
                'message' => 'Notification is read successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeReadAll() {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        try {
            $notificationRepository->makeReadAll(auth()->user()->id);

            return response()->json([
                'success' => true,
                'message' => 'All notifications are read successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function makeReadMultiple(NotificationMutipleIdRequest $request) {
        $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');

        try {
            $notificationRepository->makeReadMultiple($request->validated()['ids']);

            return response()->json([
                'success' => true,
                'message' => 'Selected notifications are read successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
