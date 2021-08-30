<?php

namespace App\Services;

class ApplicationService
{
    public function getQrCodeFromDetails($application) {

        if(!$application->is_approved) {
            return null;
        }

        if($application->appType->id == config('app_constants.app_types.PC')) {
            return $this->getPcQrCode($application);
        }

        return null;
    }

    private function getPcQrCode($application) {
        $qrCodeTemplate =
"Certificate Number: #CERTIFICATE_NUMBER#\nPlace of Issue: #PLACE_OF_ISSUE#\nApp Id: #APP_ID#\nValidity Date: #VALIDITY_DATE#\nProduct Category: #PRODUCT_CATEGORY#\nTotal Product: #TOTAL_PRODUCT#";

        $productTypes = $application->appProducts->pluck('productType')->unique('id');

        $productTypeNames = $productTypes->implode('name', ', ');
        $productTypeUnits = $productTypes->pluck('unit')->pluck('name');

        $unit = $productTypeUnits->count() > 1 ? '' : $productTypeUnits->first();

        $totalProductQuantity = $application->appProducts->sum('quantity');

        return str_replace(
            [
                '#CERTIFICATE_NUMBER#',
                '#PLACE_OF_ISSUE#',
                '#APP_ID#',
                '#VALIDITY_DATE#',
                '#PRODUCT_CATEGORY#',
                '#TOTAL_PRODUCT#'
            ],
            [
                $application->certificate_no,
                $application->organization->name,
                $application->id,
                $application->getRawOriginal('certificate_validity_date'),
                $productTypeNames,
                $totalProductQuantity . ' ' . $unit
            ],
            $qrCodeTemplate
        );
    }
}