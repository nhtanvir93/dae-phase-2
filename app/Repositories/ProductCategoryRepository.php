<?php
namespace App\Repositories;

use App\Models\ProductCategory;
use App\Repositories\Interfaces\ProductCategoryRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ProductCategoryRepository extends BaseRepository implements ProductCategoryRepositoryInterface
{
    public function __construct(ProductCategory $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name', 'is_seed')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function getDetails($id)
    {
        return $this->model->findOrFail($id);
    }
}