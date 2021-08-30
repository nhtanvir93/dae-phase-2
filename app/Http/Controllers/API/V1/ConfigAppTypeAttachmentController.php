<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\ConfigAttachmentUpdateRequiredFieldRequest;
use App\Http\Requests\AppWiseAttachmentSortRequest;

class ConfigAppTypeAttachmentController extends Controller
{
    public function getAppTypeConfigAttachments($appTypeId) {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        $configAppTypeAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments($appTypeId);

        return response()->json([
            'success' => $configAppTypeAttachments->isEmpty() ? false : true,
            'data' => $configAppTypeAttachments
        ],Response::HTTP_OK);
    }

    public function updateRequiredColumn(ConfigAttachmentUpdateRequiredFieldRequest $request) {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        try {
            $data = $request->validated();
            $appTypeId = $data['app_type_id'];
            $configAttachments = $data['config_attachments'];

            $configAppTypeAttachmentRepository->updateRequiredColumn($configAttachments, $appTypeId);

            return response()->json([
                'success' => true,
                'message' => 'Configuration attachments are updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function sortAppWiseAttachment(AppWiseAttachmentSortRequest $request) {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        try {
            $data = $request->validated();
            $appTypeId = $data['app_type_id'];
            $configAttachments = $data['config_attachments'];

            $configAppTypeAttachmentRepository->sortAppWiseAttachment($configAttachments, $appTypeId);

            return response()->json([
                'success' => true,
                'message' => 'Configuration attachments are sorted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAppTypeAttachmentWithAttributes($appTypeId) {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        $configAttachmentAttributes = $configAppTypeAttachmentRepository->getAppTypeAttachmentWithAttributes($appTypeId);

        return response()->json([
            'success' => $configAttachmentAttributes->isEmpty() ? false : true,
            'data' => $configAttachmentAttributes
        ],Response::HTTP_OK);
    }
}
