<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MeansofTransportRequest;
use Illuminate\Database\QueryException;

class MeansofTransportController extends Controller
{
    public function index()
    {
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        $meansofTransports = $meansofTransportRepository->lists();

        return response()->json([
            'success' => $meansofTransports->isEmpty() ? false : true,
            'data' => $meansofTransports
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        $data = $meansofTransportRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(MeansofTransportRequest $request)
    {
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        try {
            $id = $meansofTransportRepository->create($request->validated());

            return response()->json([
                'means_of_transport_id' => $id,
                'success' => true,
                'message' => 'A means of transport is created successfully',
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
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        $meansofTransport = $meansofTransportRepository->getDetails($id, true);

        return response()->json([
            'success' => $meansofTransport ? true : false,
            'data' => $meansofTransport ? $meansofTransport : null,
        ],$meansofTransport ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(MeansofTransportRequest $request, $id)
    {
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        try {
            $meansofTransportRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The means of transport information is updated successfully',
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
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        if(!$meansofTransportRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such means of transport information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $meansofTransportRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The means of transport information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $meansofTransportRepository = resolve('App\Repositories\Interfaces\MeansofTransportRepositoryInterface');

        return $meansofTransportRepository->getDetails($id);
    }
}
