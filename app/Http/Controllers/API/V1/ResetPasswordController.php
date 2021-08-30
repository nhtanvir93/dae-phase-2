<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ResetPasswordPostRequest;
use App\Mail\PasswordResetRequest;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;

class ResetPasswordController extends Controller
{
    public function request(ResetPasswordRequest $request) {
        $recoverPasswordRepository = resolve('App\Repositories\Interfaces\RecoverPasswordReporsitoryInterface');

        $id = $recoverPasswordRepository->create(['email' => $request->email]);

        if($id) {
            $recoverPassword = $recoverPasswordRepository->getDetails($id);

            Mail::to($recoverPassword->email)->send(new PasswordResetRequest($recoverPassword->token));

            return response()->json([
                'success' => true,
                'message' => 'Check your inbox, we have sent a link to reset email'
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to request for changing password'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function apply(ResetPasswordPostRequest $request) {
        $recoverPasswordRepository = resolve('App\Repositories\Interfaces\RecoverPasswordReporsitoryInterface');

        if($recoverPasswordRepository->isValidToken($request->email, $request->token)) {
            try {
                $recoverPasswordRepository->makeTokenUsed($request->all());

                return response()->json([
                    'success' => true,
                    'message' => 'Password has been changed successfully',
                ],Response::HTTP_OK);

            } catch (QueryException $exception) {

                return response()->json([
                    'success' => false,
                    'message' => $exception->getMessage(),
                ],Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        } else {

            return response()->json([
                'success' => false,
                'message' => 'Either your email or token is wrong.'
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
