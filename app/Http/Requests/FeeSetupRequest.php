<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DuplicateFeeSetupCheck;
use App\Rules\ConflictFeeSetupCheck;
use App\Rules\CheckNullForFeeSetup;

class FeeSetupRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $quantityTo = request()->get('quantity_to');
        $quantityFrom = request()->get('quantity_from');
        $hasInfinityTo = request()->get('has_infinity_to', false);
        $appTypeId = request()->get('app_type_id', 0);
        $max = $quantityTo > 0 && $quantityTo < 1 ? floatval($quantityTo - $quantityFrom) + .01
            : floatval($quantityTo - $quantityFrom) + 1;

        return [
            'app_type_id' => ['required', 'exists:app_types,id', new DuplicateFeeSetupCheck(request()->all()),
                new ConflictFeeSetupCheck(request()->all())],
            'product_type_id' => 'required|exists:app_product_types,product_type_id,app_type_id,' . $appTypeId . ',deleted_at,NULL',
            'has_infinity_to' => 'required|in:0,1',
            'quantity_from' => 'required|numeric|gt:0',
            'quantity_to' => $hasInfinityTo ?
                ['nullable', new CheckNullForFeeSetup(request()->all())] : 'required|numeric|gt:quantity_from',
            'per_quantity_price' => $hasInfinityTo ?
                'required|numeric|gt:0' : 'nullable|numeric|gt:0',
            'price_per_quantity' => $hasInfinityTo ? ['nullable', new CheckNullForFeeSetup(request()->all())] :
                (
                    ($quantityTo > 0 && $quantityFrom > 0) ?
                        'required|numeric|gt:0|max:' . $max
                        : 'required|numeric'
                ),
            'quantity_per_price' => $hasInfinityTo ?
                ['nullable', new CheckNullForFeeSetup(request()->all())] : 'required|numeric|gt:0',
            'min_payable' => 'nullable|numeric|gt:0'
        ];
    }

    public function attributes(){

        return [
            'app_type_id' => 'application type',
            'product_type_id' => 'product type'
        ];
    }
}
