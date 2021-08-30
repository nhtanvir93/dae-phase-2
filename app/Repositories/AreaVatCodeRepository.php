<?php
namespace App\Repositories;

use App\Models\AreaVatCode;
use App\Repositories\Interfaces\AreaVatCodeRepositoryInterface;

class AreaVatCodeRepository extends BaseRepository implements AreaVatCodeRepositoryInterface
{
    public function __construct(AreaVatCode $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
                ->select('id', 'area', 'vat_code')
                ->get();
    }


}