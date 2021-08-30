<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\ProcessTaskRequest;
use Illuminate\Database\QueryException;
use App\Http\Requests\ProcessTaskSortRequest;

class ProcessTaskController extends Controller
{
    public function index()
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        $processTasks = $processTaskRepository->lists();

        return response()->json([
            'success' => $processTasks->isEmpty() ? false : true,
            'data' => $processTasks
        ],Response::HTTP_OK);
    }

    public function paginatedIndex()
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        $data = $processTaskRepository->paginatedLists();
        $data['success'] = true;

        return response()->json($data,Response::HTTP_OK);
    }

    public function store(ProcessTaskRequest $request)
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        try {
            $id = $processTaskRepository->create($request->validated());

            return response()->json([
                'process_task_id' => $id,
                'success' => true,
                'message' => 'A process task is created successfully',
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
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        $processTask = $processTaskRepository->getDetails($id, true);

        return response()->json([
            'success' => $processTask ? true : false,
            'data' => $processTask ? $processTask : null,
        ],$processTask ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }

    public function update(ProcessTaskRequest $request, $id)
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        try {
            $processTaskRepository->update($request->validated(),$id);

            return response()->json([
                'success' => true,
                'message' => 'The process task information is updated successfully',
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
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        if(!$processTaskRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such process task information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $processTaskRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The process task information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function isEditable($id) {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        return $processTaskRepository->getDetails($id);
    }

    public function sortProcessTasks(ProcessTaskSortRequest $request) {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        try {

            $processTaskRepository->sortProcessTasks($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Process tasks are sorted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getPositionWiseList()
    {
        $processTaskRepository = resolve('App\Repositories\Interfaces\ProcessTaskRepositoryInterface');

        $processTasks = $processTaskRepository->getPositionWiseList();

        return response()->json([
            'success' => $processTasks->isEmpty() ? false : true,
            'data' => $processTasks
        ],Response::HTTP_OK);
    }
}
