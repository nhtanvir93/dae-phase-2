<?php
namespace App\Repositories;

use App\Models\AppProduct;
use App\Repositories\Interfaces\AppProductRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppProductRepository extends BaseRepository implements AppProductRepositoryInterface
{
    public function __construct(AppProduct $model)
    {
        parent::__construct($model);
    }

    public function createAll($appProducts, $applicationId) {
        foreach($appProducts as $appProduct) {
            $appProduct['application_id'] = $applicationId;
            parent::create($appProduct);
        }
    }

    public function updateAll($appAttachments, $applicationId) {
        $this->deleteAll($applicationId);
        $this->createAll($appAttachments, $applicationId);
    }

    public function deleteAll($applicationId) {
        $this->model->where('application_id', $applicationId)->delete();
    }

    public function getProducts($applicationId) {
        return $this->model
            ->select('id', 'product_id', 'product_name', 'botanical_name', 'product_type_id', 'quantity')
            ->with(['product:id,name,botanical_name', 'productType:id,name,unit_id', 'productType.unit:id,name'])
            ->where('application_id', $applicationId)
            ->get();
    }

    public function setProductReleasedQuantity($appProducts) {
        foreach($appProducts as $tempAppProduct) {
            $appProduct = $tempAppProduct;

            $data = [
                'released_quantity' => $tempAppProduct['released_quantity']
            ];
            unset($tempAppProduct['released_quantity']);

            $currentAppProduct = $this->model
                ->where($tempAppProduct)
                ->first();

            if(!$currentAppProduct) {
                continue;
            }

            parent::update($data, $currentAppProduct->id);
        }
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'app_products.application_id',
            'profiles.fullname',
            'product_name',
            'app_products.quantity',
            'app_products.released_quantity'
        ];

        $likeQueryKeys = [
            'profiles.fullname',
            'app_products.product_name'
        ];

        $zeroExcludedKeys = [
            'app_products.product_id',
            'applications.id',
            'organizations.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        $whereRaw = null;

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                }   elseif($key == 'from_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(app_products.created_at) >= '$value'";
                } elseif($key == 'to_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(app_products.created_at) <= '$value'";
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $data['draw'] = request()->get('draw');

        $data['recordsTotal'] = $this->model
            ->leftJoin('applications', 'app_products.application_id','=','applications.id')
            ->where('applications.app_type_id', config('app_constants.app_types.IP'))
            ->count();

        $queryFiltered = $this->model
            ->with(['roApplications:ip_application_id,ro_application_id', 'productType:id,name,unit_id', 'productType.unit:id,name'])
            ->leftJoin('applications','app_products.application_id','=','applications.id')
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('profiles','applications.applicant_id','=','profiles.user_id')
            ->leftJoin('products','app_products.product_id','=','products.id')
            ->select('app_products.id', 'app_products.product_type_id', 'app_products.application_id', 'profiles.fullname AS applicant_name', 'app_products.quantity',
                'app_products.released_quantity', DB::raw('(CASE WHEN app_products.product_id > 0 THEN products.name ELSE app_products.product_name END) AS product_name'))
            ->whereNull('app_products.deleted_at')
            ->where([
                'applications.app_type_id' => config('app_constants.app_types.IP'),
                'applications.is_cancelled' => 0
            ])
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getAllByAppId($applicationId) {
        return $this->model
            ->select('id', 'application_id', 'product_type_id', 'product_id', 'product_name', 'botanical_name',
                'quantity', 'released_quantity', 'pack_size', 'variety')
            ->with(['product:id,name', 'productType:id,name,unit_id', 'productType.unit:id,name',
                'application:id,certificate_validity_date'])
            ->where('application_id', $applicationId)
            ->get();
    }

    public function hasRestrictedProduct($applicationId) {
        $appProducts = $this->model
            ->select('app_products.id', 'app_products.product_id', 'products.is_restricted')
            ->leftJoin('products', 'app_products.product_id', '=', 'products.id')
            ->whereNotNull('app_products.product_id')
            ->where([
                'app_products.application_id' => $applicationId,
                'products.is_restricted' => 1
            ])
            ->get();

        return $appProducts->count() > 0 ? true : false;
    }
}