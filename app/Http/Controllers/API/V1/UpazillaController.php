<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\UpazillaRequest;

class UpazillaController extends Controller
{
    public function index()
    {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        $upazillas = $upazillaRepository->lists();

        return response()->json([
            'success' => $upazillas->isEmpty() ? false : true,
            'data' => $upazillas
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        $data = $upazillaRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(UpazillaRequest $request)
    {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        try {
            $id = $upazillaRepository->create($request->validated());

            return response()->json([
                'upazilla_id' => $id,
                'success' => true,
                'message' => 'An upazilla is created successfully',
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
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        $upazilla = $upazillaRepository->getDetails($id, true);

        return response()->json([
            'success' => $upazilla ? true : false,
            'data' => $upazilla ? $upazilla : null,
        ],$upazilla ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(UpazillaRequest $request, $id)
    {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        try {
            $upazillaRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The upazilla information is updated successfully',
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
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        if(!$upazillaRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such upazilla information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $upazillaRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The upazilla information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getDistrictWise($districtId) {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        $upazillas = $upazillaRepository->getDistrictWise($districtId);

        return response()->json([
            'success' => $upazillas ? true : false,
            'data' => $upazillas ? $upazillas : null,
        ],Response::HTTP_OK);
    }

    public function isEditable($id) {
        $upazillaRepository = resolve('App\Repositories\Interfaces\UpazillaRepositoryInterface');

        return $upazillaRepository->getDetails($id);
    }
}
