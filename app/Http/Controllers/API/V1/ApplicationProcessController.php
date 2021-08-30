<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Repositories\ApplicationRepository;
use App\Services\ProcessFlowService;
use App\Services\AppTaskFieldProcessService;
use App\Http\Requests\AppProcessRequest;
use Illuminate\Support\Facades\DB;

class ApplicationProcessController extends Controller
{
    const FORWARD = 'FORWARD';
    const BACKWARD = 'BACKWARD';
    const RECHECK = 'RECHECK';
    const APPROVE = 'APPROVE';
    const REJECT = 'REJECT';

    public function __invoke(AppProcessRequest $request,$applicationId)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $processFlowService = resolve('App\Services\ProcessFlowService');
        $appTaskFieldProcessService = resolve('App\Services\AppTaskFieldProcessService');

        $application = $applicationRepository->getDetails($applicationId);

        if(!$application || ($application && empty($application->process_flow_id))) {
            return response()->json([
                'success' => false,
                'message' => 'Application not found or process flow not set for this application type',
            ],Response::HTTP_NOT_FOUND);
        }

        $data = $request->validated();

        $eventType = isset($data['event_type']) ? $data['event_type'] : null;

        try {
            DB::beginTransaction();

            $comment = $appTaskFieldProcessService->createOrUpdate($applicationId, $data);

            switch ($eventType) {
                case self::FORWARD :
                    $status = $processFlowService->forwardApplication($applicationId, $comment);

                    if(!$status) {
                        DB::rollBack();

                        return response()->json([
                            'success' => false,
                            'message' => 'Failed to forward the application'
                        ],Response::HTTP_OK);
                    }

                    DB::commit();

                    return response()->json([
                        'success' => true,
                        'message' => 'Application forwarded successfully'
                    ],Response::HTTP_OK);

                case self::BACKWARD :
                    $status = $processFlowService->backwardApplication($applicationId, $comment);

                    if(!$status) {
                        DB::rollBack();

                        return response()->json([
                            'success' => false,
                            'message' => 'Failed to backward the application'
                        ],Response::HTTP_OK);
                    }

                    DB::commit();

                    return response()->json([
                        'success' => true,
                        'message' => 'Application backwarded successfully'
                    ],Response::HTTP_OK);

                case self::RECHECK :
                    $status = $processFlowService->recheckApplication($applicationId, $comment);

                    if(!$status) {
                        DB::rollBack();

                        return response()->json([
                            'success' => false,
                            'message' => 'Failed to recheck the application'
                        ],Response::HTTP_OK);
                    }

                    DB::commit();

                    return response()->json([
                        'success' => true,
                        'message' => 'Application rechecked successfully'
                    ],Response::HTTP_OK);

                case self::APPROVE :
                    $status = $processFlowService->approveApplication($applicationId, $comment);

                    if(!$status) {
                        DB::rollBack();

                        return response()->json([
                            'success' => false,
                            'message' => 'Failed to approve the application'
                        ],Response::HTTP_OK);
                    }

                    DB::commit();

                    return response()->json([
                        'success' => true,
                        'message' => 'Application approved successfully'
                    ],Response::HTTP_OK);

                case self::REJECT :
                    $status = $processFlowService->rejectApplication($applicationId, $comment);

                    if(!$status) {
                        DB::rollBack();

                        return response()->json([
                            'success' => false,
                            'message' => 'Failed to reject the application'
                        ],Response::HTTP_OK);
                    }

                    DB::commit();

                    return response()->json([
                        'success' => true,
                        'message' => 'Application rejected successfully'
                    ],Response::HTTP_OK);

                default :
                    DB::rollBack();

                    return response()->json([
                        'success' => false,
                        'message' => 'No such application processing event found'
                    ],Response::HTTP_OK);
            }
        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
