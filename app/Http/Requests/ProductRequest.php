<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $productRepository = resolve('App\Repositories\Interfaces\ProductRepositoryInterface');
        $product = $productRepository->getDetails($this->route('product'));

        $productId = $product ? $product->id : 0;

        return [
            'name' => ['required', "unique:products,name,$productId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'product_type_id' => "required|exists:product_types,id",
            'certificate_validity_days' => "numeric|numeric|gt:0",
            'botanical_name' => ['nullable', 'max:150', new EnglishName],
            'hs_code' => 'required|max:50',
            'description' => 'nullable|max:150'
        ];
    }

    public function attributes(){

        return [
            'product_type_id' => 'product type'
        ];
    }
}
