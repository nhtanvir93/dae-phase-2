<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\IpDetailRequest;

class IpDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('application.edit-validity')->only('update');
        //$this->middleware('application.submit-validity:' . config('app_constants.app_types.IP'))->only('store');
    }

    public function store(IpDetailRequest $request)
    {
        $ipDetailRepository = resolve('App\Repositories\Interfaces\IpDetailRepositoryInterface');

        try {
            $id = $ipDetailRepository->create($request->validated());

            return response()->json([
                'application_id' => $id,
                'success' => true,
                'message' => 'A IP application is created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(IpDetailRequest $request, $id)
    {
        $ipDetailRepository = resolve('App\Repositories\Interfaces\IpDetailRepositoryInterface');

        try {
            $ipDetailRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The IP application information is updated successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $ipDetailRepository = resolve('App\Repositories\Interfaces\IpDetailRepositoryInterface');

        return $ipDetailRepository->getDetailsByApplicationId($id);
    }
}
