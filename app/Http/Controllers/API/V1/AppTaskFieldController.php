<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class AppTaskFieldController extends Controller
{
    public function destroy($id)
    {
        $appTaskFieldRepository = resolve('App\Repositories\Interfaces\AppTaskFieldRepositoryInterface');

        if(!$appTaskFieldRepository->canDelete($id)) {
            return response()->json([
                'success' => false,
                'message' => 'No such app task field information is found to delete',
            ],Response::HTTP_BAD_REQUEST);
        }

        try {
            $appTaskFieldRepository->delete($id);

            return response()->json([
                'success' => true,
                'message' => 'The app task field information is deleted successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
