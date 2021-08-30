<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\PurposeRequiredAttachmentRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class PurposeRequiredAttachmentController extends Controller
{
    public function update(PurposeRequiredAttachmentRequest $request) {
        $purposeRequiredAttachmentRepository = resolve('App\Repositories\Interfaces\PurposeRequiredAttachmentRepositoryInterface');

        try {
            $data = $request->validated();
            $appTypeId = $data['app_type_id'];
            $purposeId = $data['purpose_id'];
            $configAttachments = $data['purpose_required_attachments'];

            $purposeRequiredAttachmentRepository->updateAll($configAttachments, $appTypeId, $purposeId);

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

    public function getAppTypeAndPurposeWise($appTypeId, $purposeId) {
        $purposeRequiredAttachmentRepository = resolve('App\Repositories\Interfaces\PurposeRequiredAttachmentRepositoryInterface');

        $configAppTypeAttachments = $purposeRequiredAttachmentRepository->getAppTypeAndPurposeWise($appTypeId, $purposeId);

        return response()->json([
            'success' => $configAppTypeAttachments->isEmpty() ? false : true,
            'data' => $configAppTypeAttachments
        ],Response::HTTP_OK);
    }
}
