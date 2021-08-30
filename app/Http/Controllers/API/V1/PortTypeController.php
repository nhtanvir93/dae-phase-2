<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\PortTypeRequest;
use Illuminate\Database\QueryException;

class PortTypeController extends Controller
{
    public function index()
    {
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        $portTypes = $portTypeRepository->lists();

        return response()->json([
            'success' => $portTypes->isEmpty() ? false : true,
            'data' => $portTypes
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        $data = $portTypeRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(PortTypeRequest $request)
    {
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        try {
            $id = $portTypeRepository->create($request->validated());

            return response()->json([
                'port_type_id' => $id,
                'success' => true,
                'message' => 'A port type is created successfully',
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
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        $portType = $portTypeRepository->getDetails($id, true);

        return response()->json([
            'success' => $portType ? true : false,
            'data' => $portType ? $portType : null,
        ],$portType ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(PortTypeRequest $request, $id)
    {
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        try {
            $portTypeRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The port type information is updated successfully',
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
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        if(!$portTypeRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such port type information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $portTypeRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The port type information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $portTypeRepository = resolve('App\Repositories\Interfaces\PortTypeRepositoryInterface');

        return $portTypeRepository->getDetails($id);
    }
}
