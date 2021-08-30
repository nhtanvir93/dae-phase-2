<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends Controller
{
    public function index()
    {
        $countryRepository = resolve('App\Repositories\Interfaces\CountryRepositoryInterface');

        $countries = $countryRepository->lists();

        return response()->json([
            'success' => $countries->isEmpty() ? false : true,
            'data' => $countries
        ],Response::HTTP_OK);
    }

//    public function paginatedIndex()
//    {
//        $data = $this->countryRepository->paginatedLists();
//        $data['success'] = true;
//
//        return response()->json($data,Response::HTTP_OK);
//    }

//    public function store(AppTypeRequest $request)
//    {
//        try {
//            $id = $this->appTypeRepository->create($request->validated());
//
//            return response()->json([
//                'app_type_id' => $id,
//                'success' => true,
//                'message' => 'An app type is created successfully',
//            ],Response::HTTP_OK);
//
//        } catch (QueryException $exception) {
//
//            return response()->json([
//                'success' => false,
//                'message' => $exception->getMessage(),
//            ],Response::HTTP_INTERNAL_SERVER_ERROR);
//        }
//    }
//
//    public function show($id)
//    {
//        $appType = $this->appTypeRepository->getDetails($id, true);
//
//        return response()->json([
//            'success' => $appType ? true : false,
//            'data' => $appType ? $appType : null,
//        ],$appType ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
//    }
//
//    public function update(AppTypeRequest $request, $id)
//    {
//        try {
//            $this->appTypeRepository->update($request->validated(),$id);
//
//            return response()->json([
//                'success' => true,
//                'message' => 'The app type information is updated successfully',
//            ],Response::HTTP_OK);
//
//        } catch (QueryException $exception) {
//
//            return response()->json([
//                'success' => false,
//                'message' => $exception->getMessage(),
//            ],Response::HTTP_INTERNAL_SERVER_ERROR);
//        }
//    }
//
//    public function destroy($id)
//    {
//        if(!$this->appTypeRepository->canDelete($id)) {
//            return response()->json([
//                'success' => false,
//                'message' => 'No such app type information is found to delete',
//            ],Response::HTTP_BAD_REQUEST);
//        }
//
//        try {
//            $this->appTypeRepository->delete($id);
//
//            return response()->json([
//                'success' => true,
//                'message' => 'The app type information is deleted successfully',
//            ],Response::HTTP_OK);
//
//        } catch (QueryException $exception) {
//
//            return response()->json([
//                'success' => false,
//                'message' => $exception->getMessage(),
//            ],Response::HTTP_INTERNAL_SERVER_ERROR);
//        }
//    }
//
//    public function isEditable($id) {
//        return $this->appTypeRepository->getDetails($id);
//    }
}
