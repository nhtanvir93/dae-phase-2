<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\NoticeRequest;
use Illuminate\Database\QueryException;

class NoticeController extends Controller
{
    public function index()
    {
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        $notices = $noticeRepository->lists();

        return response()->json([
            'success' => $notices->isEmpty() ? false : true,
            'data' => $notices
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        $data = $noticeRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(NoticeRequest $request)
    {
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        try {
            $id = $noticeRepository->create($request->validated());

            return response()->json([
                'notice_id' => $id,
                'success' => true,
                'message' => 'A notice is created successfully',
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
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        $notice = $noticeRepository->getDetails($id, true);

        return response()->json([
            'success' => $notice ? true : false,
            'data' => $notice ? $notice : null,
        ],$notice ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(NoticeRequest $request, $id)
    {
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        try {
            $noticeRepository->update($request->validated(), $id);

            return response()->json([
                'success' => true,
                'message' => 'The notice information is updated successfully',
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
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        if(!$noticeRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such notice information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $noticeRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The notice information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        return $noticeRepository->getDetails($id);
    }

    public function getActiveNotices() {
        $noticeRepository = resolve('App\Repositories\Interfaces\NoticeRepositoryInterface');

        $data = $noticeRepository->getActiveNotices();

        return response()->json([
            'success' => $data['data']->count() > 0 ? true : false,
            'data' => $data['data']->count() > 0 ? $data['data'] : null,
            'pagination_info' => $data['data']->count() > 0 ? $data['pagination_info'] : null,
        ],Response::HTTP_OK);
    }
}
