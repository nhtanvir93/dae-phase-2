<?php

namespace App\Http\Requests;

use App\Rules\UniqueAdditionalConditionSuggestion;
use Illuminate\Foundation\Http\FormRequest;

class AdditionalConditionSuggestionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');
        $additionalConditionSuggestion = $additionalConditionSuggestionRepository->getDetails(
            $this->route('additional_condition_suggestion')
        );

        $additionalConditionSuggestionId = $additionalConditionSuggestion ? $additionalConditionSuggestion->id : 0;

        $productTypeId = request()->get('product_type_id');
        $productExistsRule = $productTypeId > 0 ?
            "exists:products,id,product_type_id,$productTypeId,deleted_at,NULL" : 'exists:products,id,deleted_at,NULL';

        $attachmentRequiredRule = $additionalConditionSuggestionId > 0 ? 'nullable' : 'required';

        return [
            'app_type_id' => 'required|exists:app_types,id,deleted_at,NULL',
            'product_type_id' => 'required|exists:product_types,id,deleted_at,NULL',
            'product_id' => ['required', "$productExistsRule",
                new UniqueAdditionalConditionSuggestion($additionalConditionSuggestionId, request()->all())],
            'additional_condition' => 'required|max:150',
            'attachments.attachment' => "$attachmentRequiredRule|mimes:jpg,jpeg,png,pdf|max:1000",
            'is_active' => 'required|in:0,1',
            'remarks' => 'nullable|max:150'
        ];
    }

    public function attributes(){

        return [
            'app_type_id' => 'app type',
            'product_type_id' => 'product type',
            'product_id' => 'product'
        ];
    }
}
