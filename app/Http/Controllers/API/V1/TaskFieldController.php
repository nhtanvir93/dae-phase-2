<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\TaskFieldRequest;
use App\Http\Requests\TaskFieldSortRequest;
use Illuminate\Database\QueryException;

class TaskFieldController extends Controller
{
    public function index()
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        $taskFields = $taskFieldRepository->lists();

        return response()->json([
            'success' => $taskFields->isEmpty() ? false : true,
            'data' => $taskFields
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        $data = $taskFieldRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(TaskFieldRequest $request)
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        try {
            $id = $taskFieldRepository->create($request->validated());

            return response()->json([
                'task_field_id' => $id,
                'success' => true,
                'message' => 'A task is created successfully',
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
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        $taskField = $taskFieldRepository->getDetails($id, true);

        return response()->json([
            'success' => $taskField ? true : false,
            'data' => $taskField ? $taskField : null,
        ],$taskField ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(TaskFieldRequest $request, $id)
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        try {
            $taskFieldRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The task field information is updated successfully',
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
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        if(!$taskFieldRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such task field information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $taskFieldRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The task field information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getInputTypes() {
        $inputTypes = config('app_constants.task_field_input_types', []);

        return response()->json([
            'success' => count($inputTypes) == 0 ? false : true,
            'data' => $inputTypes
        ],Response::HTTP_OK);
    }

    public function sortTaskFields(TaskFieldSortRequest $request) {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        try {

            $taskFieldRepository->sortTaskFields($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Task fields are sorted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getProcessTaskWise($processTaskId)
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        $taskFields = $taskFieldRepository->getProcessTaskWise($processTaskId);

        return response()->json([
            'success' => $taskFields->isEmpty() ? false : true,
            'data' => $taskFields
        ],Response::HTTP_OK);
    }

    public function isEditable($id) {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');

        return $taskFieldRepository->getDetails($id);
    }
}
