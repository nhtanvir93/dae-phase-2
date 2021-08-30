<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\VarietyRequest;
use Illuminate\Database\QueryException;

class VarietyController extends Controller
{
    public function index()
    {
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        $varieties = $varietyRepository->lists();

        return response()->json([
            'success' => $varieties->isEmpty() ? false : true,
            'data' => $varieties
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        $data = $varietyRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(VarietyRequest $request)
    {
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        try {
            $id = $varietyRepository->create($request->validated());

            return response()->json([
                'variety_id' => $id,
                'success' => true,
                'message' => 'A variety is created successfully',
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
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        $variety = $varietyRepository->getDetails($id, true);

        return response()->json([
            'success' => $variety ? true : false,
            'data' => $variety ? $variety : null,
        ],$variety ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(VarietyRequest $request, $id)
    {
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        try {
            $varietyRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The variety information is updated successfully',
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
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        if(!$varietyRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such variety information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $varietyRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The variety information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $varietyRepository = resolve('App\Repositories\Interfaces\VarietyRepositoryInterface');

        return $varietyRepository->getDetails($id);
    }
}
