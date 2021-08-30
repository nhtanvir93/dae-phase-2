<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckChalanRequest;
use App\Http\Requests\DelayedApplicationRequest;
use App\Http\Requests\WorkingDetailsRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\GlobalCertificateSearchRequest;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function getMatchedChalanDetails(CheckChalanRequest $request) {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        $appInvoices = $appInvoiceRepository->getChalanDetails(
            $request->bank_branch_id,
            $request->chalan_no,
            $request->amount,
            $request->issue_date
        );

        return response()->json([
            'success' => $appInvoices->isEmpty() ? false : true,
            'data' => $appInvoices
        ],Response::HTTP_OK);
    }

    public function getCollectionSummary()
    {
        $paymentRepository = resolve('App\Repositories\Interfaces\PaymentRepositoryInterface');

        $data = $paymentRepository->getCollectionSummary();

        return response()->json([
            'success' => $data->isEmpty() ? false : true,
            'data' => $data
        ],Response::HTTP_OK);
    }

    public function getProductWiseApplications() {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $data = $applicationRepository->getProductWiseApplications();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function getWorkingDetails(WorkingDetailsRequest $request) {
        $appStatusLogRepository = resolve('App\Repositories\Interfaces\AppStatusLogRepositoryInterface');
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');

        $validatedData = $request->validated();

        $organizationId = $validatedData['organization_id'];
        $fromDate = isset($validatedData['from_date']) ?
            Carbon::createFromFormat(config('app_constants.date_format'), $validatedData['from_date'])->format('Y-m-d') : null;
        $toDate = isset($validatedData['to_date']) ?
            Carbon::createFromFormat(config('app_constants.date_format'), $validatedData['to_date'])->format('Y-m-d') : null;

        $userIds = $userRoleRepository->getDaeOfficialUserIds($organizationId);

        if(!$userIds) {
            return response()->json([
                'success' => false,
                'data' => null
            ],Response::HTTP_OK);
        }

        $data = $appStatusLogRepository->getWorkingDetails($userIds, $fromDate, $toDate);

        return response()->json([
            'success' => $data->isEmpty() ? false : true,
            'data' => $data
        ],Response::HTTP_OK);
    }

    public function getApprovedApplicationDetails() {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $filter = request()->get('filter');

        if($filter && !$filter['app_types']['id'] && ($filter['export_import_country_id'] || $filter['origin_country_id'])) {
            return response()->json([
                'success' => false,
                'message' => 'App type should be given for filtering'
            ],Response::HTTP_OK);
        }

        $data = $applicationRepository->getApprovedApplicationDetails();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function getUserLogs()
    {
        $userLogRepository = resolve('App\Repositories\Interfaces\UserLogRepositoryInterface');

        $data = $userLogRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function getIpProductReleaseDetails()
    {
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');

        $data = $appProductRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function searchCertificateGlobally(GlobalCertificateSearchRequest $request) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $data = $request->validated();

        $application = $applicationRepository->searchCertificate($data['app_type_id'], $data['certificate_no']);

        return response()->json([
            'success' => $application ? true : false,
            'data' => $application
        ],Response::HTTP_OK);
    }

    public function getDelayedApplications(DelayedApplicationRequest $request) {
        $delayedAppService = resolve('App\Services\DelayedAppService');

        $data = $delayedAppService($request->get('filter'));
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function getDashboardReport() {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');
        $paymentService = resolve('App\Services\PaymentService');

        $user = auth()->user();

        $userTypeLabel = $userRepository->getUserTypeLabel($user->id);

        if($userTypeLabel == 'NOT_IDENTIFIED') {
            return response()->json([
                'success' => false,
                'data' => null
            ],Response::HTTP_OK);
        }

        $userReport = $userRepository->getUserReportForDashboard();
        $productReport = $productRepository->getProductReportForDashboard();
        $applicationReport = $applicationRepository->getApplicationForDashboard($user->id, $userTypeLabel, $user->organization_id);
        $paymentReport = $paymentService->getDashboardResult($user, $userTypeLabel);

        return response()->json([
            'success' => true,
            'data' => [
                'setup' => array_merge($userReport, $productReport),
                'application' => array_merge($applicationReport, $paymentReport)
            ]
        ],Response::HTTP_OK);
    }
}
