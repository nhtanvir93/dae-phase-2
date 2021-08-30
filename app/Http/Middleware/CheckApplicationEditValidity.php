<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckApplicationEditValidity
{
    public function handle($request, Closure $next)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $applicationId = $request->route('pc_application') ?
            $request->route('pc_application') :
                (
                    $request->route('ip_application') ?
                        $request->route('ip_application') :
                            (
                                $request->route('application_id') ? $request->route('application_id') : 0
                            )
                );
        $application = $applicationRepository->getDetails($applicationId);

        $appStatuses = config('app_constants.app_statuses');
        $processingStatuses = [
            $appStatuses['FORWARDED'],
            $appStatuses['BACKWARDED'],
        ];

        if(!$application) {
            return response()->json([
                'success' => false,
                'message' => 'Application not found',
                'data' => $request->route()
            ],Response::HTTP_NOT_FOUND);
        } elseif (!$application->cnf_ip_assignment_id && $application->applicant_id != auth()->user()->id) {
            return response()->json([
                'success' => false,
                'message' => "Unauthorized to edit the application"
            ],Response::HTTP_BAD_REQUEST);
        } elseif ($application->cnf_ip_assignment_id && $application->cnf_user_id != auth()->user()->id) {
            return response()->json([
                'success' => false,
                'message' => "Unauthorized to edit the application"
            ],Response::HTTP_BAD_REQUEST);
        } elseif ($application->is_approved == 1) {
            return response()->json([
                'success' => false,
                'message' => "Unauthorized to edit the application because application is already approved"
            ],Response::HTTP_BAD_REQUEST);
        } elseif ($application->is_cancelled == 1) {
            return response()->json([
                'success' => false,
                'message' => "Unauthorized to edit the application because application is already rejected"
            ],Response::HTTP_BAD_REQUEST);
        } elseif (!empty($application->current_status) && in_array($application->current_status, $processingStatuses)) {
            return response()->json([
                'success' => false,
                'message' => "Application is on DAE official's desk so it can't be modified"
            ],Response::HTTP_BAD_REQUEST);
        }

        return $next($request);
    }
}
