<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\QueryRequest;
use Symfony\Component\HttpFoundation\Response;

class QueryController extends Controller
{
    public function __invoke(QueryRequest $request)
    {
        $queryService = resolve('App\Services\QueryService');

        $query = $request->validated()['query'];

        $result = $queryService->execute($query);

        return response()->json([
            'success' => $result->count() == 0 ? false : true,
            'data' => $result,
        ],Response::HTTP_OK);

    }
}
