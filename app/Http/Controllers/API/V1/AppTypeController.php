<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\AppTypeRequest;
use Illuminate\Database\QueryException;

class AppTypeController extends Controller
{
    public function index()
    {
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $appTypes = $appTypeRepository->lists();

        return response()->json([
            'success' => $appTypes->isEmpty() ? false : true,
            'data' => $appTypes
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $data = $appTypeRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(AppTypeRequest $request)
    {
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        try {
            $id = $appTypeRepository->create($request->validated());

            return response()->json([
                'app_type_id' => $id,
                'success' => true,
                'message' => 'An app type is created successfully',
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
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        $appType = $appTypeRepository->getDetails($id, true);

        return response()->json([
            'success' => $appType ? true : false,
            'data' => $appType ? $appType : null,
        ],$appType ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(AppTypeRequest $request, $id)
    {
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        try {
            $appTypeRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The app type information is updated successfully',
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
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        if(!$appTypeRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such app type information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $appTypeRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The app type information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $appTypeRepository = resolve('App\Repositories\Interfaces\AppTypeRepositoryInterface');

        return $appTypeRepository->getDetails($id);
    }
}
