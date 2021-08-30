<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\ScrutinizeRequest;

class AppAttachmentController extends Controller
{
    public function deleteAllUsingConfigAttachment($applicationId, $configAttachmentId)
    {
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');

        $appAttachment = $appAttachmentRepository->getAppAttachment($applicationId, $configAttachmentId);

        if(!$appAttachment) {
            return response()->json([
                'success' => false,
                'message' => 'No attachment found',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $appAttachmentRepository->deleteAllUsingConfigAttachment($applicationId, $configAttachmentId);

            return response()->json([
                'success' => true,
                'message' => 'The application attachment is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function scrutinizeAttachments(ScrutinizeRequest $request) {
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');

        try {
            $appAttachmentRepository->scrutinizeAttachments($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'The application attachments is/are scrutinized successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAllAttachments($applicatioId) {
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');

        try {
            $appAttachments = $appAttachmentRepository->getAllAppAttachments($applicatioId);

            return response()->json([
                'success' => true,
                'message' => $appAttachments,
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
