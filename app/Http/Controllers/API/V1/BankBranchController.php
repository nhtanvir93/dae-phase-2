<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\BankBranchRequest;
use Illuminate\Database\QueryException;

class BankBranchController extends Controller
{
    public function index()
    {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        $bankBranches = $bankBranchRepository->lists();

        return response()->json([
            'success' => $bankBranches->isEmpty() ? false : true,
            'data' => $bankBranches
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        $data = $bankBranchRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(BankBranchRequest $request)
    {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        try {
            $id = $bankBranchRepository->create($request->validated());

            return response()->json([
                'bank_branch_id' => $id,
                'success' => true,
                'message' => 'A bank branch is created successfully',
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
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        $bankBranch = $bankBranchRepository->getDetails($id, true);

        return response()->json([
            'success' => $bankBranch ? true : false,
            'data' => $bankBranch ? $bankBranch : null,
        ],$bankBranch ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(BankBranchRequest $request, $id)
    {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        try {
            $bankBranchRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The bank branch information is updated successfully',
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
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        if(!$bankBranchRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such bank branch information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $bankBranchRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The bank branch information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getBankAndDistrictWise($bankId, $districtId) {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        $bankBranches = $bankBranchRepository->getBankAndDistrictWise($bankId, $districtId);

        return response()->json([
            'success' => $bankBranches->isEmpty() ? false : true,
            'data' => $bankBranches
        ],Response::HTTP_OK);
    }

    public function isEditable($id) {
        $bankBranchRepository = resolve('App\Repositories\Interfaces\BankBranchRepositoryInterface');

        return $bankBranchRepository->getDetails($id);
    }
}
