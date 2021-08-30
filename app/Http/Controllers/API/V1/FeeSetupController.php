<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\FeeSetupRequest;
use Illuminate\Database\QueryException;

class FeeSetupController extends Controller
{
    public function index()
    {
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        $feeSetup = $feeSetupRepository->lists();

        return response()->json([
            'success' => $feeSetup->isEmpty() ? false : true,
            'data' => $feeSetup
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        $data = $feeSetupRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(FeeSetupRequest $request)
    {
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        try {
            $id = $feeSetupRepository->create($request->validated());

            return response()->json([
                'fee_setup_id' => $id,
                'success' => true,
                'message' => 'A fee setup is created successfully',
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
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        $feeSetup = $feeSetupRepository->getDetails($id, true);

        return response()->json([
            'success' => $feeSetup ? true : false,
            'data' => $feeSetup ? $feeSetup : null,
        ],$feeSetup ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(FeeSetupRequest $request, $id)
    {
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        try {
            $feeSetupRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The fee setup information is updated successfully',
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
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        if(!$feeSetupRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such fee setup information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $feeSetupRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The fee setup information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        return $feeSetupRepository->getDetails($id);
    }
}
