<?php
namespace App\Repositories;

use App\Models\ProductInactivityLog;
use App\Repositories\Interfaces\ProductInactivityLogRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ProductInactivityLogRepository extends BaseRepository implements ProductInactivityLogRepositoryInterface
{
    public function __construct(ProductInactivityLog $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
    
    }

    public function paginatedLists()
    {
    
    }

    public function getDetails($id, $with = false)
    {
    
    }


}