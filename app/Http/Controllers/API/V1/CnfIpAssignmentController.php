<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CnfIpAssignmentCancelRequest;
use App\Http\Requests\CnfIpAssignmentRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class CnfIpAssignmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('valid.applicant', ['only' => ['store']]);
    }

    public function paginatedIndex()
    {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $data = $cnfIpAssignmentRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function show($id)
    {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $cnfIpAssignment = $cnfIpAssignmentRepository->getDetails($id, true);

        return response()->json([
            'success' => $cnfIpAssignment ? true : false,
            'data' => $cnfIpAssignment ? $cnfIpAssignment : null,
        ],$cnfIpAssignment ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function store(CnfIpAssignmentRequest $request)
    {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        try {
            $id = $cnfIpAssignmentRepository->assignCnf($request->validated());

            return response()->json([
                'cnf_ip_assignment_id' => $id,
                'success' => true,
                'message' => 'Cnf is assigned to an RO successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAllByApplicationId($applicationId)
    {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $cnfIpAssignments = $cnfIpAssignmentRepository->getAllByApplicationId($applicationId);

        return response()->json([
            'success' => $cnfIpAssignments ? true : false,
            'data' => $cnfIpAssignments ? $cnfIpAssignments : null,
        ],$cnfIpAssignments ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function cancel(CnfIpAssignmentCancelRequest $request)
    {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        try {
            $id = $request->validated()['cnf_ip_assignment_id'];

            $cnfIpAssignmentRepository->update([
                'is_cancelled' => 1
            ], $id);

            return response()->json([
                'success' => true,
                'message' => 'Cnf assignment has been cancelled successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
