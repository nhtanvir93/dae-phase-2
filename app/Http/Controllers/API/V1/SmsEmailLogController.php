<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\InspectionReminderRequest;
use Illuminate\Support\Str;

class SmsEmailLogController extends Controller
{
    public function sendInspectionSms(InspectionReminderRequest $request)
    {
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');
        $smsEmailService = resolve('App\Services\SmsEmailService');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        try {
            $data = $request->validated();

            $application = $applicationRepository->getDetails($data['application_id'], true);

            if(!isset($application->applicant->user->mobile)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Applicant mobile number not found',
                ],Response::HTTP_OK);
            }

            $result = $smsEmailService->sendSms($application->applicant->user->mobile, $data['message']);

            $data['subject'] = 'Inspection Reminder';
            $data['type'] = config('app_constants.notification_types.SMS');
            $data['to'] = $application->applicant_id;
            $data['event_type'] = config('app_constants.app_statuses.BEFORE_INSPECTION');
            $data['status'] = $result['success'] ?
                config('app_constants.notification_statuses.SUCCESSFULL') : config('app_constants.notification_statuses.FAILED');
            $data['request'] = isset($result['request']) ? $result['request'] : null;
            $data['response'] = isset($result['response']) ? $result['response'] : null;

            if(isset($result['text'])) {
                $data['message'] = $result['text'];
            }

            $smsEmailLogRepository->create($data);

            return response()->json([
                'success' => $result['success'] ? true : false,
                'message' => $result['success'] ? 'Sms sent successfully' : 'Failed to send sms to the applicant',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getInspectionSmsLogs($applicationId) {
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');

        $inspectionSmsLogs = $smsEmailLogRepository->getEventWiseDetails($applicationId, [
            config('app_constants.app_statuses.BEFORE_INSPECTION')
        ]);

        return response()->json([
            'success' => $inspectionSmsLogs->isEmpty() ? false : true,
            'data' => $inspectionSmsLogs
        ],Response::HTTP_OK);
    }

    public function sendConfirmationSms($userId)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');
        $smsEmailService = resolve('App\Services\SmsEmailService');

        try {
            $user = $userRepository->getDetails($userId);

            if(!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'No user found'
                ],Response::HTTP_BAD_REQUEST);
            }

            if($user->is_active) {
                return response()->json([
                    'success' => false,
                    'message' => 'You have already activated your account, you can login'
                ],Response::HTTP_BAD_REQUEST);
            }

            $randomString = Str::random(6);

            $userRepository->update([
                'confirmation_code' => $randomString
            ], $userId);

            $messageTemplate = config('app_constants.notification_templates.registration_sms');
            $message = str_replace('#CONFIRMATION_CODE#', $randomString, $messageTemplate);

            $result = $smsEmailService->sendSms($user->mobile, $message);

            $data['created_by'] = $userId;
            $data['subject'] = 'Registration Confirmation';
            $data['type'] = config('app_constants.notification_types.SMS');
            $data['to'] = $userId;
            $data['event_type'] = config('app_constants.app_statuses.REGISTRATION_CONFIRMATION');
            $data['status'] = $result['success'] ?
                config('app_constants.notification_statuses.SUCCESSFULL') : config('app_constants.notification_statuses.FAILED');
            $data['request'] = isset($result['request']) ? $result['request'] : null;
            $data['response'] = isset($result['response']) ? $result['response'] : null;

            if(isset($result['text'])) {
                $data['message'] = $result['text'];
            }

            $smsEmailLogRepository->create($data);

            return response()->json([
                'success' => $result['success'] ? true : false,
                'message' => $result['success'] ? 'Sms sent successfully' : 'Failed to send sms to the applicant',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function index()
    {
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');

        $smsEmailLogs = $smsEmailLogRepository->lists();

        return response()->json([
            'success' => $smsEmailLogs->isEmpty() ? false : true,
            'data' => $smsEmailLogs
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');

        $data = $smsEmailLogRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function show($id)
    {
        $smsEmailLogRepository = resolve('App\Repositories\Interfaces\SmsEmalLogRepositoryInterface');

        $smsEmailLog = $smsEmailLogRepository->getDetails($id, true);

        return response()->json([
            'success' => $smsEmailLog ? true : false,
            'data' => $smsEmailLog ? $smsEmailLog : null,
        ],$smsEmailLog ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
