<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckApplicationSubmitValidity
{
    private function hasRestrictedProduct($productIds) {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');

        return $productRepository->hasRestrictedProduct($productIds);
    }

    public function handle($request, Closure $next, $appTypeId)
    {
        $application = $request->get('applications');

        $organizationId = isset($application['organization_id']) ? $application['organization_id'] : 0;
        $appProducts = $request->get('app_products',[]);

        if($organizationId == 0 || empty($appProducts)) {
            return $next($request);
        }

        $appProducts = array_filter($appProducts, function($appProduct) {
            return isset($appProduct['product_id']);
        });

        $productIds = array_column($appProducts,'product_id');

        if(empty($productIds)) {
            return $next($request);
        }

        $processFlowRepository = resolve('App\Services\ProcessFlowService');

        $hasRestrictProduct = $this->hasRestrictedProduct($productIds);
        $response = $processFlowRepository->getProcessFlowDetails($organizationId, $appTypeId);

        if(!$response['success']) {
            return response()->json([
                'success' => false,
                'message' => $response['message']
            ],Response::HTTP_BAD_REQUEST);
        }

        $processFlowDetails = $response['data']['process_flow_details'];

        if($hasRestrictProduct) {
            $message = !$processFlowDetails['restricted']['restricted_product'] ? 'No process flow config found' :
                (!$processFlowDetails['restricted']['can_apply'] ? 'No user found to forward the application' : null);
        } else {
            $message = !$processFlowDetails['regular']['regular_product'] ? 'No process flow config found' :
                (!$processFlowDetails['regular']['can_apply'] ? 'No user found to forward the application' : null);
        }

        if($message) {
            return response()->json([
                'success' => false,
                'message' => $message
            ],Response::HTTP_BAD_REQUEST);
        }

        return $next($request);
    }
}
