<?php

namespace App\Http\Middleware;

use Closure;
use \Carbon\Carbon;

class ConvertCertificateNoToAppId
{
    public function handle($request, Closure $next)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $applicantId = auth()->user()->id;
        $applicationIds = collect([]);
        $isExtensionLetterRequired = false;

        if(isset($request->ro_ip_application)) {
            $inputs = $request->all();

            $certificateNos = array_column($request->ro_ip_application, 'certificate_no');

            $applyLocked = request()->isMethod('post');

            $applications = $applicationRepository->getApplicationDetails($certificateNos, config('app_constants.app_types.IP'), $applyLocked);

            $applicationIds = $applications->pluck('id');

            if($applicationIds->count() == 0
                ||
                (
                    count($certificateNos) > 0
                    && count($certificateNos) != $applicationIds->count()
                )
            ) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid IP certificate no/s given'
                ],200);
            }

            if(isset($inputs['applications']['cnf_ip_assignment_id'])) {
                $cnfIpAssignment = $cnfIpAssignmentRepository->getDetails($inputs['applications']['cnf_ip_assignment_id'], true);

                if($cnfIpAssignment->is_cancelled == 1 || $cnfIpAssignment->is_locked == 1) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid C&F assignment given'
                    ],200);
                }

                $applicantId = $cnfIpAssignment->ipApplication->applicant_id;
            }

            if($applications->where('applicant_id', $applicantId)->count() != $applications->count()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid IP certificate no/s given'
                ],200);
            }

            $newApplications = $applications->map(function($application) {

                $application->new_certificate_validity_date = Carbon::create($application->getRawOriginal('certificate_validity_date'));
                $application->new_approval_date = Carbon::create($application->getRawOriginal('approval_date'));
                $application->extended_certificate_validity_date = Carbon::create($application->getRawOriginal('certificate_validity_date'))->addMonths(2);

                return $application;
            });

            $now = now();

            foreach($newApplications as $newApplication) {
                if($newApplication->new_certificate_validity_date->greaterThanOrEqualTo($newApplication->new_approval_date)
                    && $now->lessThanOrEqualTo($newApplication->new_certificate_validity_date)) {
                    continue;
                } elseif($now->greaterThan($newApplication->new_certificate_validity_date)
                    && $now->lessThanOrEqualTo($newApplication->extended_certificate_validity_date)) {
                    $isExtensionLetterRequired = true;
                    break;
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid IP certificate no/s given'
                    ],200);
                }
            }
        }

        $request->request->add([
            'application_ids' => $applicationIds,
            'applicant_id' => $applicantId,
            'is_extension_letter_required' => $isExtensionLetterRequired
        ]);

        return $next($request);
    }
}
