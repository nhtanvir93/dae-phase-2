<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckAppTransferValidity
{
    public function handle($request, Closure $next)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $application = $applicationRepository->getDetails($request->get('application_id'));

        if(!$application) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to transfer because application is not found'
            ],Response::HTTP_NOT_FOUND);
        } elseif($application->is_paid == 0) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to transfer because payment is not completed'
            ],Response::HTTP_NOT_FOUND);
        } elseif($application->is_approved == 1 || $application->is_cancelled == 1) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to transfer because application is either approved or rejected by DAE official'
            ],Response::HTTP_NOT_FOUND);
        } elseif($application->current_status != config('app_constants.app_statuses.FORWARDED')
            && $application->current_status != config('app_constants.app_statuses.BACKWARDED') ) {
            return response()->json([
                'success' => false,
                'message' => 'Unable to transfer because application is not on the desk of DAE official'
            ],Response::HTTP_NOT_FOUND);
        }

        return $next($request);
    }
}
