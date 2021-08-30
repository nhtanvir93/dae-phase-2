<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserTypeController extends Controller
{
    public function index()
    {
        $userTypeRepository = resolve('App\Repositories\Interfaces\UserTypeRepositoryInterface');

    	$userTypes = $userTypeRepository->lists();

        return response()->json([
            'success' => $userTypes->isEmpty() ? false : true,
            'data' => $userTypes
        ],Response::HTTP_OK);
    }
}
