<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\PcDetailRequest;

class PcDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('application.edit-validity')->only('update');
        //$this->middleware('application.submit-validity:' . config('app_constants.app_types.PC'))->only('store');
    }

    public function store(PcDetailRequest $request)
    {
        $pcDetailRepository = resolve('App\Repositories\Interfaces\PcDetailRepositoryInterface');

        try {
            $id = $pcDetailRepository->create($request->validated());

            return response()->json([
                'application_id' => $id,
                'success' => true,
                'message' => 'A PC application is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(PcDetailRequest $request, $id)
    {
        $pcDetailRepository = resolve('App\Repositories\Interfaces\PcDetailRepositoryInterface');

        try {
            $pcDetailRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The PC application information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $pcDetailRepository = resolve('App\Repositories\Interfaces\PcDetailRepositoryInterface');

        return $pcDetailRepository->getDetailsByApplicationId($id);
    }

    public function getRecentApplicationConsigneeInfo() {
        $pcDetailRepository = resolve('App\Repositories\Interfaces\PcDetailRepositoryInterface');

        $autocompleteSuggestions = $pcDetailRepository->getRecentApplicationConsigneeInfo();

        return response()->json([
            'success' => $autocompleteSuggestions->count() > 0 ? true : false,
            'data' => $autocompleteSuggestions->count() > 0 ? $autocompleteSuggestions : null
        ],Response::HTTP_OK);
    }
}
