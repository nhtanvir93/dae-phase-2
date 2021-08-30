<?php

namespace App\Repositories;

use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    private $with = [
        'productType:id,name,unit_id', 'productType.unit:id,name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'name', 'botanical_name', 'product_type_id')
            ->with(['productType:id,name,unit_id', 'productType.unit:id,name'])
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'products.name',
            'products.botanical_name',
            'product_types.name',
            'units.name'
        ];

        $likeQueryKeys = [
            'products.name',
            'products.botanical_name'
        ];

        $zeroExcludedKeys = [
            'product_types.id',
            'units.id'
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
        $queryFiltered = DB::table('products')
            ->leftJoin('product_types','products.product_type_id','=','product_types.id')
            ->leftJoin('units','product_types.unit_id','=','units.id')
            ->select('products.id', 'products.name', 'products.botanical_name', 'product_types.name AS product_type_name', 'units.name AS unit_name')
            ->where('products.name', '<>', '')
            ->whereNull('products.deleted_at')
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
            $product = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ProductResource($product) : $product;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getProductsOnProductType($productTypeId) {
        return $this->model
            ->select('id', 'name', 'botanical_name', 'is_restricted')
            ->where([
                'product_type_id' => $productTypeId,
                'is_active' => 1
            ])->get();
    }

    public function hasRestrictedProduct($productIds) {
        $products = $this->model
            ->whereIn('id', $productIds)
            ->where('is_restricted', 1)
            ->get();

        return $products->count() > 0 ? true : false;
    }

    public function getMaxCertificateValidityDays($productIds) {
        $maxValidityDays = $this->model
            ->whereIn('id', $productIds)
            ->max('certificate_validity_days');

        return $maxValidityDays > 0 ? $maxValidityDays : 0;
    }

    public function getProductReportForDashboard() {
        $products = $this->model->count();

        $activeProducts = $this->model->where('is_active',1)->count();

        $activeRestrictedProducts = $this->model->where([
            'is_active' => 1,
            'is_restricted' => 1
        ])->count();

        return [
            [
                'entity' => 'PRODUCT',
                'label' => 'Products',
                'count' => $products
            ],
            [
                'entity' => 'PRODUCT',
                'label' => 'Active Products',
                'count' => $activeProducts
            ],
            [
                'entity' => 'PRODUCT',
                'label' => 'Active Products (Restricted)',
                'count' => $activeRestrictedProducts
            ]
        ];
    }
}