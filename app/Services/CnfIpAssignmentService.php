<?php

namespace App\Services;

class CnfIpAssignmentService
{
    public function getAvailableProductInfo($applicationId) {
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        $appProducts = $appProductRepository->getAllByAppId($applicationId);
        $cnfIpAssignments = $cnfIpAssignmentRepository->getAllWithDetails($applicationId);

        if($appProducts->count() == 0) {
            return false;
        }

        $appProducts = $appProducts->toArray();

        if($cnfIpAssignments->count() == 0) {
            foreach($appProducts as $key => $appProduct) {
                $appProducts[$key]['available_quantity'] = $appProduct['quantity'];
            }

            return $appProducts;
        }

        $cnfIpAssignments = $cnfIpAssignments->pluck('cnfIpAssignmentDetails')->toArray();

        $tempProductDetails = [];

        foreach($cnfIpAssignments as $cnfIpAssignment) {
            $cnfIpAssignment = $cnfIpAssignment[0];
            if(isset($cnfIpAssignment['product_id'])) {
                $productId = $cnfIpAssignment['product_id'];
            } else {
                $productId = $cnfIpAssignment['product_name'];
            }

            if(isset($tempProductDetails[$productId])) {
                $tempProductDetails[$productId] += $cnfIpAssignment['quantity'];
            } else {
                $tempProductDetails[$productId] = $cnfIpAssignment['quantity'];
            }
        }

        foreach($tempProductDetails as $key => $tempProductDetailQuantity) {
            if($key > 0) {
                $index = array_search($key, array_column($appProducts, 'product_id'));
            } else {
                $index = array_search($key, array_column($appProducts, 'product_name'));
            }

            $availableQuantity = ($appProducts[$index]['quantity'] - $tempProductDetailQuantity) > 0 ?
                $appProducts[$index]['quantity'] - $tempProductDetailQuantity : 0;

            $appProducts[$index]['available_quantity'] = $availableQuantity;
        }

        return $appProducts;
    }
}