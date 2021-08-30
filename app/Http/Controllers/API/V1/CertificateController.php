<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\CertificateRequest;
use Illuminate\Database\QueryException;

class CertificateController extends Controller
{
    public function index()
    {
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        $certificates = $certificateRepository->lists();

        return response()->json([
            'success' => $certificates->isEmpty() ? false : true,
            'data' => $certificates
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        $data = $certificateRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(CertificateRequest $request)
    {
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        try {
            $id = $certificateRepository->create($request->validated());

            return response()->json([
                'certificate_id' => $id,
                'success' => true,
                'message' => 'A certificate is created successfully',
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
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        $certificate = $certificateRepository->getDetails($id, true);

        return response()->json([
            'success' => $certificate ? true : false,
            'data' => $certificate ? $certificate : null,
        ],$certificate ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(CertificateRequest $request, $id)
    {
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        try {
            $certificateRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The certificate information is updated successfully',
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
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        if(!$certificateRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such certificate information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $certificateRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The certificate information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $certificateRepository = resolve('App\Repositories\Interfaces\CertificateRepositoryInterface');

        return $certificateRepository->getDetails($id);
    }
}
