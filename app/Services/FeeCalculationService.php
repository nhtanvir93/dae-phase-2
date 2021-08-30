<?php

namespace App\Services;

use App\Models\Application;
use App\Models\AppProduct;
use App\Models\ConfigFeeSetup;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class FeeCalculationService
{
    public function getFeeCalculation($applicationId) {
        try {
            $application = $this->getApplicationDetails($applicationId);

            if(!$application) {
                return false;
            }
            $appProductTypes = $this->getAppProducts($applicationId);

            $feeCalculationDetails = [];

            foreach($appProductTypes as $appProductType) {
                $singleFeeCalculationDetails = [
                    'product_type_id' => $appProductType->product_type_id,
                ];

                $result = $this->calculateFee($application->app_type_id, $appProductType->product_type_id,
                    $appProductType->total_quantity);

                $singleFeeCalculationDetails['fee_setups'] = $result['fee_setups'];
                $singleFeeCalculationDetails['total_price'] = $result['total_price'];
                $singleFeeCalculationDetails['unused_quantity'] = $result['unused_quantity'];
                $singleFeeCalculationDetails['app_products'] = $appProductType->appProducts;
                $feeCalculationDetails[] = $singleFeeCalculationDetails;
            }

            return $feeCalculationDetails;

        } catch (QueryException $ex) {
            return false;
        }
    }

    public function getApplicationDetails($applicationId) {
        try {
            return Application::select('id', 'app_type_id')->findOrFail($applicationId);
        } catch (ModelNotFoundException $ex) {
            return false;
        }
    }

    public function getAppProducts($applicationId) {
        return AppProduct::selectRaw('product_type_id, sum(quantity) as total_quantity')
            ->with(['appProducts'
                => function($query) use ($applicationId) {
                    $query->select('id', 'product_type_id', 'product_id', 'product_name', 'quantity');
                    $query->where('application_id', $applicationId);
            }, 'appProducts.product:id,name', 'appProducts.productType:id,name,unit_id', 'appProducts.productType.unit:id,name'])
            ->where('application_id', $applicationId)
            ->groupBy('product_type_id')
            ->get();
    }

    public function calculateFee($appTypeId, $productTypeId, $quantity) {
        $feeSetups = ConfigFeeSetup::select('id', 'app_type_id', 'product_type_id', 'quantity_from', 'quantity_to',
            'price_per_quantity', 'quantity_per_price', 'min_payable', 'has_infinity_to', 'per_quantity_price')
            ->where([
                'app_type_id' => $appTypeId,
                'product_type_id' => $productTypeId
            ])
            ->get()
            ->toArray();

        $remainingQuantity = $quantity;
        $lastUsedIndex = null;
        $totalPrice = 0;

        foreach($feeSetups as $key => $feeSetup) {
            if($remainingQuantity == 0) {
                break;
            }

            $lastUsedIndex = $key;

            $totalRangeQuantity = $feeSetup['quantity_to'] - $feeSetup['quantity_from'];

            if($feeSetup['has_infinity_to']) {
                $perUnitPrice = $feeSetup['per_quantity_price'];
            } else {
                $perUnitPrice = $feeSetup['quantity_per_price'] / $feeSetup['price_per_quantity'];
            }

            if($feeSetup['quantity_to'] < 1) {
                $totalRangeQuantity += .01;
            } else {
                $totalRangeQuantity += 1;
            }

            if($feeSetup['has_infinity_to']) {
                $usedUnit = $remainingQuantity;
                $remainingQuantity -= $usedUnit;
            } else {
                if($remainingQuantity > $totalRangeQuantity) {
                    $usedUnit = $totalRangeQuantity;
                    $remainingQuantity -= $usedUnit;
                } else {
                    $usedUnit = $remainingQuantity;
                    $remainingQuantity -= $usedUnit;
                }
            }

            $usedUnitPrice = ceil($usedUnit * $perUnitPrice);
            $feeSetups[$key]['used_quantity'] = $usedUnit;

            if($feeSetup['min_payable'] > 0) {
                $usedUnitPrice = $usedUnitPrice < $feeSetup['min_payable'] ? $feeSetup['min_payable'] : $usedUnitPrice;
            }

            $totalPrice += $usedUnitPrice;

            $feeSetups[$key]['used_unit_price'] = $usedUnitPrice;
        }

        if($lastUsedIndex != count($feeSetups) - 1) {
            $from = $lastUsedIndex + 1;
            $to = count($feeSetups) - 1;
            $unusedFeeSetupIndexes = range($from, $to);

            foreach($unusedFeeSetupIndexes as $unusedFeeSetupIndex) {
                unset($feeSetups[$unusedFeeSetupIndex]);
            }
        }

        return [
            'fee_setups' => $feeSetups,
            'total_price' => $totalPrice,
            'unused_quantity' => $remainingQuantity
        ];
    }
}