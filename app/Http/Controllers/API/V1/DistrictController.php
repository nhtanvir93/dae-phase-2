<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\DistrictRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class DistrictController extends Controller
{
    public function index()
    {
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        $districts = $districtRepository->lists();

        return response()->json([
            'success' => $districts->isEmpty() ? false : true,
            'data' => $districts
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        $data = $districtRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(DistrictRequest $request)
    {
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        try {
            $id = $districtRepository->create($request->validated());

            return response()->json([
                'district_id' => $id,
                'success' => true,
                'message' => 'A district is created successfully',
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
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        $district = $districtRepository->getDetails($id, true);

        return response()->json([
            'success' => $district ? true : false,
            'data' => $district ? $district : null,
        ],$district ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(DistrictRequest $request, $id)
    {
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        try {
            $districtRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The district information is updated successfully',
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
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        if(!$districtRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such district information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $districtRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The district information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $districtRepository = resolve('App\Repositories\Interfaces\DistrictRepositoryInterface');

        return $districtRepository->getDetails($id);
    }
}
