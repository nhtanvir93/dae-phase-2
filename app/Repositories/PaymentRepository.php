<?php
namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\Interfaces\PaymentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PaymentResource;
use Carbon\Carbon;

class PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    private $with = [
        'invoice:id,application_id,bank_branch_id,chalan_no,amount,issue_date,attachment_id,remarks',
        'invoice.bankBranch.bank:id,name', 'invoice.bankBranch.district:id,name', 'invoice.attachment:id,name,path,extension', 'transaction',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Payment $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
        try {
            $payment = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new PaymentResource($payment) : $payment;
    }

    public function deleteByInvoiceId($invoiceId) {
        return $this->model
            ->where('invoice_id', $invoiceId)
            ->delete();
    }

    public function updateByInvoiceId($invoiceId, $amount)
    {
        return $this->model
            ->where('invoice_id', $invoiceId)
            ->update(['amount' => $amount]);
    }

    public function getCollectionSummary() {
        $commonService = resolve('App\Services\CommonService');

        $likeQueryKeys = [
            'app_products.product_name'
        ];

        $zeroExcludedKeys = [
            'organizations.id',
            'app_types.id',
            'app_products.product_id'
        ];

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        $whereRaw = '';

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                } elseif($key == 'from_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(payments.created_at) >= '$value'";
                } elseif($key == 'to_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(payments.created_at) <= '$value'";
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $organizationNameField = isset($filterKeys['organizations.id']) ? 'organizations.name AS organization_name' :
            "(CASE WHEN organizations.id > 0 THEN 'ALL' ELSE 'N\\A' END) AS organization_name";

        return $this->model
            ->leftJoin('applications','payments.application_id','=','applications.id')
            ->leftJoin('app_types','applications.app_type_id','=','app_types.id')
            ->leftJoin('organizations','applications.organization_id','=','organizations.id')
            ->leftJoin('pc_details', function($join) {
                $join->on('applications.applicationable_id', '=', 'pc_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.PC'));
            })
            ->leftJoin('ro_details',function($join) {
                $join->on('applications.applicationable_id', '=', 'ro_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.RO'));
            })
            ->leftJoin('ip_details',function($join) {
                $join->on('applications.applicationable_id', '=', 'ip_details.id');
                $join->where('applications.app_type_id', config('app_constants.app_types.IP'));
            })
            ->select(DB::raw($organizationNameField), 'app_types.id AS app_type_id', 'app_types.name AS app_type_name',
                'app_types.short_name AS app_type_short_name',
                DB::raw('COUNT(payments.application_id) AS total_applications, SUM(payments.amount) AS total_amount'))
            ->whereNull('applications.deleted_at')
            ->where([
                'applications.is_paid' => 1,
                'applications.is_cancelled' => 0
            ])
            ->when($whereRaw, function($query, $whereRaw) {
                $query->whereRaw($whereRaw);
            })
            ->where($filterConditions)
            ->groupBy('app_types.id')
            ->get();
    }
}