<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ConfigAttachmentAttributeRequest;
use Illuminate\Database\QueryException;
use App\Http\Requests\AttachmentAttributeSortRequest;

class ConfigAttachmentAttributeController extends Controller
{
    public function index()
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        $configAttachmentAttributes = $configAttachmentAttributeRepository->lists();

        return response()->json([
            'success' => $configAttachmentAttributes->isEmpty() ? false : true,
            'data' => $configAttachmentAttributes
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        $data = $configAttachmentAttributeRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(ConfigAttachmentAttributeRequest $request)
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        try {
            $id = $configAttachmentAttributeRepository->create($request->validated());

            return response()->json([
                'config_attachment_attribute_id' => $id,
                'success' => true,
                'message' => 'A configuration attachment attribute created successfully',
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
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        $configAttachmentAttribute = $configAttachmentAttributeRepository->getDetails($id, true);

        return response()->json([
            'success' => $configAttachmentAttribute ? true : false,
            'data' => $configAttachmentAttribute ? $configAttachmentAttribute : null,
        ],$configAttachmentAttribute ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(ConfigAttachmentAttributeRequest $request, $id)
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        try {
            $configAttachmentAttributeRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The configuration attachment attribute information is updated successfully',
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
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        if(!$configAttachmentAttributeRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such configuration attachment attribute information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $configAttachmentAttributeRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The configuration attachment attribute information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        return $configAttachmentAttributeRepository->getDetails($id);
    }

    public function getConfigAttachmentAttributes($configAttachmentId) {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        $configAttachmentAttributes = $configAttachmentAttributeRepository->getConfigAttachmentAttributes($configAttachmentId);

        return response()->json([
            'success' => $configAttachmentAttributes->isEmpty() ? false : true,
            'data' => $configAttachmentAttributes
        ],Response::HTTP_OK);
    }

    public function sortAttachmentAttributes(AttachmentAttributeSortRequest $request) {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        try {
            $data = $request->validated();
            $configAttachmentId = $data['config_attachment_id'];
            $attributes = $data['attributes'];

            $configAttachmentAttributeRepository->sortAttachmentAttributes($attributes, $configAttachmentId);

            return response()->json([
                'success' => true,
                'message' => 'Configuration attachment attributes are sorted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
