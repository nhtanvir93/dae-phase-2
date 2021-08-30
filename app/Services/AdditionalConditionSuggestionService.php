<?php

namespace App\Services;

class AdditionalConditionSuggestionService
{
    public function getAppProductWiseAdditionalCondtions($applicationId) {
        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $additionalConditionSuggestionRepository =
            resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        $application = $applicationRepository->getDetails($applicationId);
        $appProducts = $appProductRepository->getProducts($applicationId);

        if($appProducts->count() == 0) return collect([]);

        $productIds = $appProducts->whereNotNull('product_id')->pluck('product_id')->toArray();

        $additionalConditionSuggestions = $additionalConditionSuggestionRepository->getAllByProductIds($application->app_type_id, $productIds);

        $data = [];

        foreach($appProducts as $appProduct) {
            $data[] = [
                'product' => $appProduct,
                'product_id' => $appProduct->product_id,
                'product_name' => $appProduct->product_id > 0 ? $appProduct->product->name : $appProduct->product_name,
                'is_other_product' => $appProduct->product_id > 0 ? 0 : 1,
                'additional_condition' => $additionalConditionSuggestions->count() == 0 ? null
                    :
                    (
                        $appProduct->product_id > 0 ?
                            $additionalConditionSuggestions->where('product_id', $appProduct->product_id)->first() : null
                    )
            ];
        }

        return collect($data);
    }
}