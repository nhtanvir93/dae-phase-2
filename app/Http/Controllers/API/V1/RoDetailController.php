<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\RoDetailRequestWithMemo;
use App\Http\Requests\RoDetailRequestWithIp;

class RoDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('application.edit-validity')->only(['updateWithMemo', 'updateWithIps']);
        //$this->middleware('application.submit-validity:' . config('app_constants.app_types.RO'))->only(['storeWithIps', 'storeWithMemo']);
    }

    public function storeWithMemo(RoDetailRequestWithMemo $request)
    {
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        try {
            $id = $roDetailRepository->create($request->validated());

            return response()->json([
                'application_id' => $id,
                'success' => true,
                'message' => 'A RO application is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateWithMemo(RoDetailRequestWithMemo $request, $id)
    {
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        try {
            $roDetailRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The RO application information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function storeWithIps(RoDetailRequestWithIp $request)
    {
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        try {
            $id = $roDetailRepository->create($request->validated());

            return response()->json([
                'application_id' => $id,
                'success' => true,
                'message' => 'A RO application is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateWithIps(RoDetailRequestWithIp $request, $id)
    {
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        try {
            $roDetailRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The RO application information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $roDetailRepository = resolve('App\Repositories\Interfaces\RoDetailRepositoryInterface');

        return $roDetailRepository->getDetailsByApplicationId($id);
    }
}
