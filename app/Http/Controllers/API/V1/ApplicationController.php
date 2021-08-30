<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppTransferRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class ApplicationController extends Controller
{
    public function index()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $applications = $applicationRepository->lists();

        return response()->json([
            'success' => $applications->isEmpty() ? false : true,
            'data' => $applications
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $data = $applicationRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function newApplicationsPaginatedIndex()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $data = $applicationRepository->newApplicationPaginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function show($id)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $applicationService = resolve('App\Services\ApplicationService');

        $application = $applicationRepository->getDetails($id, true);

        if($application) {
            $application->qrCode = $applicationService->getQrCodeFromDetails($application);
        }

        return response()->json([
            'success' => $application ? true : false,
            'data' => $application ? $application : null,
        ],$application ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function isEditable($id) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        return $applicationRepository->getDetails($id);
    }

    public function getIpInfoForRo() {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $applicantId = request()->get('applicant_id');
        $ipAppDetails = $applicationRepository->getAvailableProductsInfo($applicantId, true);
        $success = $applicationRepository->isValidIpsForRo($ipAppDetails);

        return response()->json([
            'success' => $success,
            'data' => $success ? $ipAppDetails : [],
        ],Response::HTTP_OK);
    }

    public function calculateFee($applicationId) {
        $feeCalculationService = resolve('App\Services\FeeCalculationService');

        return $feeCalculationService->getFeeCalculation($applicationId);
    }

    public function getApprovedIpDetails() {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $certificateNos = request()->get('certificate_nos', []);

        if(count($certificateNos) == 0) {
            return response()->json([
                'success' => false,
                'data' => null,
            ],Response::HTTP_BAD_REQUEST);
        }

        $applications = $applicationRepository->getApprovedIpDetails($certificateNos);

        return response()->json([
            'success' => $applications->count() == count($certificateNos) ? true : false,
            'data' => $applications,
        ],$applications->count() == count($certificateNos) ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function checkIpLock() {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        return $applicationRepository->checkIpLockedAndUpdate(8648, 58);
    }

    public function getAppTaskDetails($applicationId) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $appTasks = $applicationRepository->getAppTaskDetails($applicationId);

        if(!$appTasks) {
            return response()->json([
                'success' => false,
                'data' => null,
            ],Response::HTTP_OK);
        }

        return response()->json([
            'success' => $appTasks->count() > 0 ? true : false,
            'data' => $appTasks,
        ],Response::HTTP_OK);
    }

    public function transferPaginatedLists()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $data = $applicationRepository->transferPaginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function transfer(AppTransferRequest $request)
    {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        try {
            $response = $processFlowService->transferApplication($request->validated());

            return response()->json([
                'success' => $response['success'],
                'message' => $response['message'],
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function checkApplicationValidity($applicationId, $checkAppLock = false) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $isValid = $applicationRepository->checkApprovedApplicationValidity($applicationId, $checkAppLock);

        return response()->json([
            'success' => $isValid ? true : false,
            'data' => [
                'is_valid' => $isValid
            ],
        ],Response::HTTP_OK);
    }

    public function getCnfAvailableProductInfo($applicationId) {
        $cnfIpAssignmentService = resolve('App\Services\CnfIpAssignmentService');

        $appProducts = $cnfIpAssignmentService->getAvailableProductInfo($applicationId);

        return response()->json([
            'success' => $appProducts ? true : false,
            'data' => $appProducts,
        ],Response::HTTP_OK);
    }
}
