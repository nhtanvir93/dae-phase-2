<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckPaymentValidity
{
    public function handle($request, Closure $next)
    {
        $applicationId = $request->route('applicationId') ?
            $request->route('applicationId') :
                (
                    $request->get('application_id') ? $request->get('application_id') : 0
                );

        if($applicationId > 0) {
            $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

            $application = $applicationRepository->getDetails($applicationId);
            $authUserId = auth()->user()->id;

            if(!$application) {
                return response()->json([
                    'success' => false,
                    'message' => 'Application is not found'
                ],Response::HTTP_BAD_REQUEST);
            }

            if($application->applicant_id != $authUserId && !$application->cnf_ip_assignment_id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Application\'s applicant and logged in user are not same'
                ],Response::HTTP_BAD_REQUEST);
            } elseif($application->cnf_user_id != $authUserId && $application->cnf_ip_assignment_id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Application\'s cnf user and logged in user are not same'
                ],Response::HTTP_BAD_REQUEST);
            } elseif($application->is_paid == 1) {
                return response()->json([
                    'success' => false,
                    'message' => 'Payment is already completed for this application'
                ],Response::HTTP_BAD_REQUEST);
            }
        }

        return $next($request);
    }
}
