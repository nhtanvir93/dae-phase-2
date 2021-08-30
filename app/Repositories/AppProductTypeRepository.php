<?php
namespace App\Repositories;

use App\Models\AppProductType;
use App\Repositories\Interfaces\AppProductTypeRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class AppProductTypeRepository extends BaseRepository implements AppProductTypeRepositoryInterface
{
    public function __construct(AppProductType $model)
    {
        parent::__construct($model);
    }

    public function createAll($appTypes, $productTypeId) {
        foreach($appTypes as $appTypeId) {
            $appProductType = [
                'app_type_id' => $appTypeId,
                'product_type_id' => $productTypeId,
            ];

            parent::create($appProductType);
        }
    }

    public function updateAll($appTypes, $productTypeId) {
        $this->deleteAll($productTypeId);
        $this->createAll($appTypes, $productTypeId);
    }

    public function deleteAll($productTypeId) {
        $this->model->where('product_type_id', $productTypeId)->delete();
    }

    public function getAppTypeWiseProductType($appTypeId) {
        return $this->model->select('product_types.id', 'product_types.name', 'units.name as unit')
            ->leftJoin('product_types', 'app_product_types.product_type_id', '=', 'product_types.id')
            ->leftJoin('units', 'product_types.unit_id', '=', 'units.id')
            ->where('app_product_types.app_type_id', $appTypeId)
            ->orderBy('product_types.name')
            ->get();
    }
}