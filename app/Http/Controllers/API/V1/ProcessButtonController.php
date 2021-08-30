<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProcessButtonController extends Controller
{
    public function index()
    {
        $processButtonRepository = resolve('App\Repositories\Interfaces\ProcessButtonRepositoryInterface');

        $processButtons = $processButtonRepository->lists();

        return response()->json([
            'success' => $processButtons->isEmpty() ? false : true,
            'data' => $processButtons
        ],Response::HTTP_OK);
    }
}
