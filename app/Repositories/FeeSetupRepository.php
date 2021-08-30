<?php

namespace App\Repositories;

use App\Models\ConfigFeeSetup;
use App\Http\Resources\FeeSetupResource;
use App\Repositories\Interfaces\FeeSetupRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class FeeSetupRepository extends BaseRepository implements FeeSetupRepositoryInterface
{
    private $commonService;

    private $with = [
        'productType:id,name', 'appType:id,name', 'createdUser:id,user_id,fullname',
        'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ConfigFeeSetup $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'app_type_id', 'product_type_id', 'quantity_from', 'quantity_to', 'price_per_quantity',
                'quantity_per_price', 'min_payable')
            ->with(['productType:id,name', 'appType:id,name'])
            ->orderBy('id', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'product_types.name',
            'app_types.name',
            'config_fee_setups.quantity_from',
            'config_fee_setups.quantity_to',
            'config_fee_setups.price_per_quantity',
            'config_fee_setups.quantity_per_price',
            'config_fee_setups.min_payable'
        ];

        $likeQueryKeys = [];

        $zeroExcludedKeys = [
            'product_types.id',
            'app_types.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $this->model->count();
        $queryFiltered = DB::table('config_fee_setups')
            ->leftJoin('product_types','config_fee_setups.product_type_id','=','product_types.id')
            ->leftJoin('app_types','config_fee_setups.app_type_id','=','app_types.id')
            ->select('config_fee_setups.id', 'product_types.name AS product_type_name', 'app_types.name AS app_type_name',
                'config_fee_setups.quantity_from', 'config_fee_setups.quantity_to', 'config_fee_setups.price_per_quantity',
                'config_fee_setups.quantity_per_price', 'config_fee_setups.min_payable', 'config_fee_setups.has_infinity_to',
                'config_fee_setups.per_quantity_price')
            ->whereNull('config_fee_setups.deleted_at')
            ->where('product_type_id', '<>', '')
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false) {
        try {
            $feeSetup = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new FeeSetupResource($feeSetup) : $feeSetup;
    }

    public function isDuplicate($id, $appTypeId, $productTypeId, $quantityFrom, $quantityTo, $hasInfinityTo) {
        $totalFound = $this->model
            ->where([
                ['id', '!=', $id],
                'app_type_id' => $appTypeId,
                'product_type_id' => $productTypeId,
                'quantity_from' => $quantityFrom,
                'quantity_to' => $quantityTo,
                'has_infinity_to' => $hasInfinityTo
            ])->count();

        return $totalFound > 0 ? true : false;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function doesConflictFeeSetupExists($id, $appTypeId, $productTypeId, $quantityFrom, $quantityTo) {
        $totalFound = $this->model
            ->where([
                ['id', '!=', $id],
                'app_type_id' => $appTypeId,
                'product_type_id' => $productTypeId
            ])
            ->where(function ($query) use ($quantityFrom, $quantityTo) {
                $query->where(function ($query) use ($quantityFrom, $quantityTo) {
                    $query->where('quantity_from', '<=', $quantityFrom)
                        ->where('quantity_to', '>=', $quantityFrom)
                        ->where('has_infinity_to', 0);
                })->orWhere(function ($query) use ($quantityFrom, $quantityTo) {
                    $query->where('quantity_from', '<=', $quantityFrom)
                        ->whereNull('quantity_to')
                        ->where('has_infinity_to', 1);
                });
                if($quantityTo > 0) {
                    $query->orWhere(function ($query) use ($quantityFrom, $quantityTo) {
                        $query->where('quantity_from', '=<', $quantityTo)
                            ->where('quantity_to', '>=', $quantityTo)
                            ->where('has_infinity_to', 0);
                    });
                }
            })
            ->count();

        return $totalFound > 0 ? true : false;
    }
}