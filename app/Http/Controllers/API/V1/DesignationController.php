<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\DesignationRequest;
use App\Http\Requests\DesignationSortRequest;

class DesignationController extends Controller
{
    public function index()
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        $designations = $designationRepository->lists();

        return response()->json([
            'success' => $designations->isEmpty() ? false : true,
            'data' => $designations
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        $data = $designationRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(DesignationRequest $request)
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        try {
            $id = $designationRepository->create($request->validated());

            return response()->json([
                'designation_id' => $id,
                'success' => true,
                'message' => 'A designation is created successfully',
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
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        $designation = $designationRepository->getDetails($id, true);

        return response()->json([
            'success' => $designation ? true : false,
            'data' => $designation ? $designation : null,
        ],$designation ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(DesignationRequest $request, $id)
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        try {
            $designationRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The designation information is updated successfully',
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
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        if(!$designationRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such designation information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $designationRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The designation information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        return $designationRepository->getDetails($id);
    }

    public function sortDesignations(DesignationSortRequest $request) {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        try {
            $designationRepository->sortDesignations($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Designations are sorted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getLevelWiseList()
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');

        $designations = $designationRepository->getLevelWiseList();

        return response()->json([
            'success' => $designations->isEmpty() ? false : true,
            'data' => $designations
        ],Response::HTTP_OK);
    }
}
