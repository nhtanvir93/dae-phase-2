<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProcessFlowRequest;
use Illuminate\Database\QueryException;

class ProcessFlowController extends Controller
{
    public function paginatedIndex()
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');

        $data = $processFlowRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(ProcessFlowRequest $request)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');
        $convertProcessFlowDataService = resolve('App\Services\ConvertProcessFlowDataService');

        try {
            $data = $convertProcessFlowDataService->convert($request->validated());
            $id = $processFlowRepository->create($data);

            return response()->json([
                'process_flow_id' => $id,
                'success' => true,
                'message' => 'A process flow is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show($id)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');

        $processFlow = $processFlowRepository->getDetails($id, true);

        return response()->json([
            'success' => $processFlow ? true : false,
            'data' => $processFlow ? $processFlow : null,
        ],$processFlow ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(ProcessFlowRequest $request, $id)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');
        $convertProcessFlowDataService = resolve('App\Services\ConvertProcessFlowDataService');

        try {
            $data = $convertProcessFlowDataService->convert($request->validated());
            $processFlowRepository->update($data, $id);

            return response()->json([
                'success' => true,
                'message' => 'The process flow information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy($id)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');

        if(!$processFlowRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such process flow information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $processFlowRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The process flow information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');

        return $processFlowRepository->getDetails($id);
    }

    public function activate($id)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');

        try {
            $status = $processFlowRepository->activate($id);

            return response()->json([
                'success' => $status,
                'message' => $status ?
                    'The process flow is activated successfully' : 'No process flow found to activate',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deactivate($id)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');

        try {
            $status = $processFlowRepository->deactivate($id);

            return response()->json([
                'success' => $status,
                'message' => $status ?
                    'The process flow is deactivated successfully' : 'No process flow found to deactivate',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function createOrganizationCategoryWise(ProcessFlowRequest $request)
    {
        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');
        $convertProcessFlowDataService = resolve('App\Services\ConvertProcessFlowDataService');

        try {
            $data = $convertProcessFlowDataService->convert($request->validated());
            $processFlowRepository->createOrganizationCategoryWise($data);

            return response()->json([
                'success' => true,
                'message' => 'Process flows are created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getProcessFlowDetails($organizationId, $appTypeId) {
        $processFlowService = resolve('App\Services\ProcessFlowService');

        $response = $processFlowService->getProcessFlowDetails($organizationId, $appTypeId);

        return response()->json($response,Response::HTTP_OK);
    }
}
