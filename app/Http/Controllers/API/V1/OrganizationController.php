<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\OrganizationRequest;
use Illuminate\Database\QueryException;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        $organizations = $organizationRepository->lists();

        return response()->json([
            'success' => $organizations->isEmpty() ? false : true,
            'data' => $organizations
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        $data = $organizationRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(OrganizationRequest $request)
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        try {
            $id = $organizationRepository->create($request->validated());

            return response()->json([
                'organization_id' => $id,
                'success' => true,
                'message' => 'An organization is created successfully',
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
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        $organization = $organizationRepository->getDetails($id, true);

        return response()->json([
            'success' => $organization ? true : false,
            'data' => $organization ? $organization : null,
        ],$organization ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(OrganizationRequest $request, $id)
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        try {

            $organizationRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The organization information is updated successfully',
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
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        if(!$organizationRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such organization information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $organizationRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The organization information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getOrganizationsOnTransportType($meansOfTransportId)
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        $organizations = $organizationRepository->getOrganizationsOnTransportType($meansOfTransportId);

        return response()->json([
            'success' => $organizations->isEmpty() ? false : true,
            'data' => $organizations,
        ],$organizations->isEmpty() ? Response::HTTP_BAD_REQUEST : Response::HTTP_OK);
    }

    public function isEditable($id) {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        return $organizationRepository->getDetails($id);
    }
}
