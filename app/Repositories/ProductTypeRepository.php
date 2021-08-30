<?php

namespace App\Repositories;

use App\Models\ProductType;
use App\Http\Resources\ProductTypeResource;
use App\Repositories\Interfaces\ProductTypeRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ProductTypeRepository extends BaseRepository implements ProductTypeRepositoryInterface
{
    private $with = [
        'unit:id,name', 'appTypes:app_type_id,name,short_name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ProductType $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'name', 'is_seed', 'unit_id')
            ->with(['unit:id,name', 'appTypes:app_type_id,name,short_name'])
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'product_types.name',
            'units.name',
            'product_types.is_seed'
        ];

        $likeQueryKeys = [
            'product_types.name'
        ];

        $zeroExcludedKeys = [
            'units.id',
            'app_product_types.app_type_id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
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
        $data['recordsTotal'] = $this->model->where('product_types.name', '<>', '')->count();
        $queryFiltered = $this->model
            ->leftJoin('units','product_types.unit_id','=','units.id')
            ->leftJoin('app_product_types','product_types.id','=','app_product_types.product_type_id')
            ->selectRaw('DISTINCT product_types.id, product_types.name, units.name AS unit_name,is_seed')
            ->where('product_types.name', '<>', '')
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
            $productType = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ProductTypeResource($productType) : $productType;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function create(array $data) {
        $appProductTypeRepository = resolve('App\Repositories\Interfaces\AppProductTypeRepositoryInterface');

        return DB::transaction(function() use ($appProductTypeRepository, $data) {
            $appTypes = $data['app_types'];
            unset($data['app_types']);

            $productTypeId = parent::create($data);

            $appProductTypeRepository->createAll($appTypes,$productTypeId);
            return $productTypeId;
        });
    }

    public function update(array $data, $id)
    {
        $appProductTypeRepository = resolve('App\Repositories\Interfaces\AppProductTypeRepositoryInterface');

        return DB::transaction(function() use ($appProductTypeRepository, $data, $id) {
            $appTypes = $data['app_types'];
            unset($data['app_types']);

            $appProductTypeRepository->updateAll($appTypes, $id);
            return parent::update($data, $id);
        });
    }

    public function getAppTypeWiseProductType($appTypeId) {
        $appProductTypeRepository = resolve('App\Repositories\Interfaces\AppProductTypeRepositoryInterface');

        return $appProductTypeRepository->getAppTypeWiseProductType($appTypeId);
    }
}