<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\PurposeRequest;
use Illuminate\Database\QueryException;

class PurposeController extends Controller
{
    public function index()
    {
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        $purpose = $purposeRepository->lists();

        return response()->json([
            'success' => $purpose->isEmpty() ? false : true,
            'data' => $purpose
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        $data = $purposeRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(PurposeRequest $request)
    {
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        try {
            $id = $purposeRepository->create($request->validated());

            return response()->json([
                'purpose_id' => $id,
                'success' => true,
                'message' => 'A purpose is created successfully',
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
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        $purpose = $purposeRepository->getDetails($id, true);

        return response()->json([
            'success' => $purpose ? true : false,
            'data' => $purpose ? $purpose : null,
        ],$purpose ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(PurposeRequest $request, $id)
    {
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        try {
            $purposeRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The purpose information is updated successfully',
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
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        if(!$purposeRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such purpose information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $purposeRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The purpose information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $purposeRepository = resolve('App\Repositories\Interfaces\PurposeRepositoryInterface');

        return $purposeRepository->getDetails($id);
    }
}
