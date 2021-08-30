<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\AppInvoiceRequest;
use Illuminate\Database\QueryException;

class AppInvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('payment.validity')->only(['store']);
    }

    public function getAllByAppId($applicationId)
    {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        $appInvoices = $appInvoiceRepository->getAllByAppId($applicationId);

        return response()->json([
            'success' => $appInvoices->isEmpty() ? false : true,
            'data' => $appInvoices
        ],Response::HTTP_OK);
    }

    public function store(AppInvoiceRequest $request)
    {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        try {
            $id = $appInvoiceRepository->create($request->validated());

            return response()->json([
                'app_invoice_id' => $id,
                'success' => true,
                'message' => 'An app invoice is created successfully',
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
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        $appInvoice = $appInvoiceRepository->getDetails($id, true);

        return response()->json([
            'success' => $appInvoice ? true : false,
            'data' => $appInvoice ? $appInvoice : null,
        ],$appInvoice ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(AppInvoiceRequest $request, $id)
    {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        try {
            $appInvoiceRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The app invoice information is updated successfully',
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
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        if(!$appInvoiceRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such app invoice information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $appInvoiceRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The app invoice information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        return $appInvoiceRepository->getDetails($id);
    }

    public function isMaximumChalanGiven($applicationId, $chalanType) {
        $appInvoiceRepository = resolve('App\Repositories\Interfaces\AppInvoiceRepositoryInterface');

        $totalChalans = $appInvoiceRepository->getTotalAddedChalanCount($applicationId, $chalanType);

        $isMaximumChallanGiven = false;

        $chalanTypes = config('app_constants.chalan_types');

        if(!isset($chalanTypes[$chalanType])) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid chalan type given',
            ],Response::HTTP_OK);
        }

        $chalanTypeName = strtolower(implode(' ', explode('_', $chalanType)));

        $maxChalan = config('app_constants.total_' . strtolower($chalanType) . '_chalan');

        if($totalChalans == 0) {
            $message = "No chalan is added yet for $chalanTypeName";
        } elseif($totalChalans < $maxChalan) {
            $message = "Total added chalans for $chalanTypeName is below " . $maxChalan;
        } else {
            $isMaximumChallanGiven = true;
            $message = "You already have exceeded maximum number of offline chalan for $chalanTypeName";
        }

        return response()->json([
            'success' => true,
            'data' => [
                'is_maximum_challan_given' => $isMaximumChallanGiven
            ],
            'message' => $message,
        ],Response::HTTP_OK);
    }
}
