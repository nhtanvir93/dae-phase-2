<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use App\Http\Requests\SeedPurposeRequest;

class SeedPurposeController extends Controller
{
    public function store(SeedPurposeRequest $request)
    {
        $seedPurposeRepository = resolve('App\Repositories\Interfaces\SeedPurposeRepositoryInterface');

        try {
            $seedPurposeRepository->createAll($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Seed/Non seed purposes are created successfully',
            ],Response::HTTP_OK);

        } catch (QueryException $exception) {

            return response()->json([
                'success' => false,
                'message' => $exception->getMessage(),
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAll($isSeed) {
        $seedPurposeRepository = resolve('App\Repositories\Interfaces\SeedPurposeRepositoryInterface');

        $purposes = $seedPurposeRepository->getAll($isSeed);

        return response()->json([
            'success' => $purposes->isEmpty() ? false : true,
            'data' => $purposes
        ],Response::HTTP_OK);
    }
}
