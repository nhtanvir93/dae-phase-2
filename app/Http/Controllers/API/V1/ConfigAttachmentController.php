<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\ConfigAttachmentRequest;

class ConfigAttachmentController extends Controller
{
    public function index()
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        $configAttachments = $configAttachmentRepository->lists();

        return response()->json([
            'success' => $configAttachments->isEmpty() ? false : true,
            'data' => $configAttachments
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        $data = $configAttachmentRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(ConfigAttachmentRequest $request)
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        try {
            $id = $configAttachmentRepository->create($request->validated());

            return response()->json([
                'config_attachment_id' => $id,
                'success' => true,
                'message' => 'An config attachment is created successfully',
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
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        $configAttachment = $configAttachmentRepository->getDetails($id, true);

        return response()->json([
            'success' => $configAttachment ? true : false,
            'data' => $configAttachment ? $configAttachment : null,
        ],$configAttachment ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(ConfigAttachmentRequest $request, $id)
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        try {
            $configAttachmentRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The config attachment information is updated successfully',
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
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        if(!$configAttachmentRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such config attachment information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $configAttachmentRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The config attachment information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        return $configAttachmentRepository->getDetails($id);
    }

    public function getProfileEligible() {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');

        $configAttachments = $configAttachmentRepository->getProfileEligible();

        return response()->json([
            'success' =>  $configAttachments->isEmpty() ? false : true,
            'data' => $configAttachments
        ],Response::HTTP_OK);
    }
}
