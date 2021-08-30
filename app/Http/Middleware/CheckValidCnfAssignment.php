<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckValidCnfAssignment
{
    public function handle($request, Closure $next)
    {
        $inputs = $request->get('applications');

        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        if(isset($inputs['cnf_ip_assignment_id'])) {
            $cnfIpAssignment = $cnfIpAssignmentRepository->getDetails($inputs['cnf_ip_assignment_id'], true);

            if(!$cnfIpAssignment) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid C&F assignment given'
                ],Response::HTTP_BAD_REQUEST);
            } elseif ($cnfIpAssignment->is_locked) {
                return response()->json([
                    'success' => false,
                    'message' => 'Already an RO is applied and approved against this C&F assignment'
                ],Response::HTTP_BAD_REQUEST);
            } elseif($cnfIpAssignment->cnfUser->id != auth()->user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Assigned C&F user and applied application user are not same'
                ],Response::HTTP_BAD_REQUEST);
            } elseif($cnfIpAssignment->cnfUser->id != auth()->user()->id) {
                return response()->json([
                    'success' => false,
                    'message' => 'Assigned C&F user and applied application user are not same'
                ],Response::HTTP_BAD_REQUEST);
            }
        }

        return $next($request);
    }
}
