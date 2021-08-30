<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\DocumentSignerRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;

class DocumentSignerController extends Controller
{
    public function signCertificate(Request $request)
    {
        $documentSignerRepository = resolve('App\Repositories\Interfaces\DocumentSignerRepositoryInterface');

    	try {
    		$content = base64_decode($request->input('content'));
            $signedFile = $documentSignerRepository->create($content);

            return response()->json([
                'file' => $signedFile,
                'success' => true,
                'message' => 'Certificate has been signed successfuly',
            ],Response::HTTP_OK);

        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong.',
            ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function apply(DocumentSignerRequest $request) {
        $fileContent = $request->certificate;

        try {
            $response = Http::post(config('app_constants.document_signer.auth_url'), [
                'email' => config('app_constants.document_signer.username'),
                'password' => config('app_constants.document_signer.password'),
                'tokenName' => config('app_constants.document_signer.token_name')
            ]);
        } catch(ConnectionException $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        } catch (\InvalidArgumentException $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }

        $tempResponse = $response->json();

        if($response->failed() || !isset($tempResponse['token'])) {
            return response()->json([
                'success' => false,
                'message' => 'Authentication failed',
            ],Response::HTTP_UNAUTHORIZED);
        }

        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->withToken($tempResponse['token'])->post(config('app_constants.document_signer.signer_url'), [
                'content' => $fileContent,
                'file' => true,
                'tokenName' => config('app_constants.document_signer.token_name')
            ]);
        } catch(ConnectionException $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        } catch (\InvalidArgumentException $exception) {
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }

        $tempResponse = $response->json();

        if($response->failed() || !isset($tempResponse['content'])) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to sign the certificate',
            ],Response::HTTP_EXPECTATION_FAILED);
        }

        file_put_contents('certificates/signed.pdf', base64_decode($tempResponse['content']));

        return response()->json([
            'success' => true,
            'signed_certificate' => $tempResponse['content']
        ],Response::HTTP_OK);
    }
}
