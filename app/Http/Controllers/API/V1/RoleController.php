<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        $roles = $roleRepository->lists();

        return response()->json([
            'success' => $roles->isEmpty() ? false : true,
            'data' => $roles
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        $data = $roleRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(RoleRequest $request)
    {
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        try {
            $id = $roleRepository->create($request->validated());

            return response()->json([
                'role_id' => $id,
                'success' => true,
                'message' => 'A role is created successfully',
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
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        $role = $roleRepository->getDetails($id, true);

        return response()->json([
            'success' => $role ? true : false,
            'data' => $role ? $role : null,
        ],$role ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(RoleRequest $request, $id)
    {
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        try {
            $roleRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The role information is updated successfully',
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
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        if(!$roleRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such role information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $roleRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The role information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $roleRepository = resolve('App\Repositories\Interfaces\RoleRepositoryInterface');

        return $roleRepository->getDetails($id);
    }
}
