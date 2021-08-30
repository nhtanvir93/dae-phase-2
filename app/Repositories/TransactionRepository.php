<?php
namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\Interfaces\TransactionRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\TransactionResource;

class TransactionRepository extends BaseRepository implements TransactionRepositoryInterface
{
    private $with = [
        'echallan', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname'
    ];

    public function __construct(Transaction $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
        try {
            $transaction = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $transaction;
    }

    public function getDetailsByEkpayTransactionId($ekpayTransactionId) {
        return $this->model
            ->where('ekpay_transaction_id', $ekpayTransactionId)
            ->first();
    }

    public function getCurrentOrderNo() {
        $lastOrderNo = $this->model
            ->select('id', 'order_no', 'created_at')
            ->whereRaw("DATE(created_at) = '" . now()->format('Y-m-d') . "'")
            ->count();

        return $lastOrderNo + 1;
    }
}