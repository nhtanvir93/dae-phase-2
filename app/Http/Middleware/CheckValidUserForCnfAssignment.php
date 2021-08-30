<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckValidUserForCnfAssignment
{
    public function handle($request, Closure $next)
    {
        $cnfIpAssignment = $request->get('cnf_ip_assignments');

        if(isset($cnfIpAssignment['ip_application_id'])) {
            $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

            $application = $applicationRepository->getDetails($cnfIpAssignment['ip_application_id']);

            if($application && $application->applicant_id != auth()->user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Only applicant of this application can assign C&F for ro application'
                ],Response::HTTP_EXPECTATION_FAILED);
            }
        }

        return $next($request);
    }
}
