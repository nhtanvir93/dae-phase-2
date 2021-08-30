<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\BankRequest;
use Illuminate\Database\QueryException;

class BankController extends Controller
{
    public function index()
    {
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        $banks = $bankRepository->lists();

        return response()->json([
            'success' => $banks->isEmpty() ? false : true,
            'data' => $banks
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        $data = $bankRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(BankRequest $request)
    {
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        try {
            $id = $bankRepository->create($request->validated());

            return response()->json([
                'bank_id' => $id,
                'success' => true,
                'message' => 'A bank is created successfully',
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
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        $bank = $bankRepository->getDetails($id, true);

        return response()->json([
            'success' => $bank ? true : false,
            'data' => $bank ? $bank : null,
        ],$bank ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(BankRequest $request, $id)
    {
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        try {
            $bankRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The bank information is updated successfully',
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
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        if(!$bankRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such bank information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $bankRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The bank information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $bankRepository = resolve('App\Repositories\Interfaces\BankRepositoryInterface');

        return $bankRepository->getDetails($id);
    }
}
