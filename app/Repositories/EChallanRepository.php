<?php

namespace App\Repositories;

use App\Models\ChallanTransaction;
use App\Repositories\Interfaces\EChallanRepositoryInterface;

class EChallanRepository extends BaseRepository implements EChallanRepositoryInterface
{
    public function __construct(ChallanTransaction $model)
    {
        parent::__construct($model);
    }

    public function getDetailsWithoutRelations($id)
    {
        return $this->model->find($id);
    }

    public function getDetailsByEkpayTransactionId($ekpayTransactionId)
    {
        return $this->model
            ->where('ekpay_transaction_id', $ekpayTransactionId)
            ->first();
    }
}