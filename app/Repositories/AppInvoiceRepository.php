<?php
namespace App\Repositories;

use App\Models\AppInvoice;
use App\Repositories\Interfaces\AppInvoiceRepositoryInterface;
use App\Http\Resources\AppInvoiceResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppInvoiceRepository extends BaseRepository implements AppInvoiceRepositoryInterface
{
    private $with = [
        'bankBranch:id,name,bank_id,district_id', 'bankBranch.bank:id,name', 'bankBranch.district:id,name', 'attachment:id,name,extension,path',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(AppInvoice $model)
    {
        parent::__construct($model);
    }

    public function getAllByAppId($applicationId, $exceptId = 0, $type = null)
    {
        return $this->model
            ->with(['bankBranch:id,name,bank_id,district_id', 'bankBranch.bank:id,name', 'bankBranch.district:id,name'])
            ->select('id', 'application_id', 'bank_branch_id', 'chalan_type', 'chalan_no', 'amount', 'issue_date')
            ->where('application_id', $applicationId)
            ->when($exceptId > 0, function($query) use ($exceptId) {
                $query->where('id', '<>', $exceptId);
            })
            ->when($type, function($query) use ($type) {
                $query->where('chalan_type', $type);
            })
            ->get();
    }

    public function getDetails($id, $with = false)
    {
        try {
            $appType = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new AppInvoiceResource($appType) : $appType;
    }

    public function create(array $data)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $paymentRepository = resolve('App\Repositories\Interfaces\PaymentRepositoryInterface');

        return DB::transaction(function() use ($applicationRepository, $attachmentRepository, $paymentRepository, $data) {
            $totalPreviousPaidAmount = $this->getAllByAppId($data['application_id'], 0, $data['chalan_type'])
                ->sum('amount');

            $applicationRepository->updateFeeForOfflineChalan($data['application_id'], $data['amount'],
                0, true, $data['chalan_type'], $totalPreviousPaidAmount);

            $attachmentRepository->setPath(config('app_constants.path.invoice'));
            $file = [
                'file' => $data['attachments']['invoice']
            ];

            $data['attachment_id'] = $attachmentRepository->create($file);

            unset($data['attachments']);
            unset($data['bank_id']);
            unset($data['district_id']);

            $appInvoiceId = parent::create($data);

            $payment = [
                'application_id' => $data['application_id'],
                'type' => config('app_constants.payment_options.APPLICATION'),
                'amount' => $data['amount'],
                'invoice_id' => $appInvoiceId
            ];

            $paymentRepository->create($payment);

            return $appInvoiceId;
        });
    }

    public function update(array $data, $id)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $paymentRepository = resolve('App\Repositories\Interfaces\PaymentRepositoryInterface');

        return DB::transaction(function() use ($applicationRepository, $attachmentRepository, $paymentRepository, $data, $id) {
            $appInvoiceDetails = $this->getDetails($id);

            $totalPreviousPaidAmount = $this->getAllByAppId($appInvoiceDetails->application_id, $id, $appInvoiceDetails->chalan_type)
                ->sum('amount');

            $applicationRepository->updateFeeForOfflineChalan($appInvoiceDetails->application_id,
                $data['amount'], $appInvoiceDetails->amount, true, $appInvoiceDetails->chalan_type, $totalPreviousPaidAmount);

            if(isset($data['attachments']['invoice'])) {
                $attachmentRepository->setPath(config('app_constants.path.invoice'));
                $file = [
                    'file' => $data['attachments']['invoice']
                ];

                $data['attachment_id'] = isset($appInvoiceDetails->attachment_id) ?
                    $attachmentRepository->update($file, $appInvoiceDetails->attachment_id)
                    : $attachmentRepository->create($file);

                unset($data['attachments']);
            }

            unset($data['bank_id']);
            unset($data['district_id']);

            $paymentRepository->updateByInvoiceId($id, $data['amount']);

            return parent::update($data, $id);
        });
    }

    public function getTotalAddedChalanCount($applicationId, $chalanType = null) {
        return $this->model
            ->where('application_id', $applicationId)
            ->when($chalanType, function($query) use ($chalanType) {
                $query->where('chalan_type', $chalanType);
            })
            ->count();
    }

    public function delete($id)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');
        $paymentRepository = resolve('App\Repositories\Interfaces\PaymentRepositoryInterface');

        return DB::transaction(function() use ($applicationRepository, $attachmentRepository, $paymentRepository, $id) {
            $appInvoiceDetails = $this->getDetails($id);

            $totalPreviousPaidAmount = $this->getAllByAppId($appInvoiceDetails->application_id, $id, $appInvoiceDetails->chalan_type)
                ->sum('amount');

            $applicationRepository->updateFeeForOfflineChalan($appInvoiceDetails->application_id,
                $appInvoiceDetails->amount, 0, false, $appInvoiceDetails->chalan_type, $totalPreviousPaidAmount);

            $attachmentRepository->delete($appInvoiceDetails->attachment_id);

            $paymentRepository->deleteByInvoiceId($id);

            return parent::delete($id);
        });
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function isValidChalan($bankBranchId, $chalanNo, $issueDate, $excludedId) {
        $issueDate = Carbon::createFromFormat(config('app_constants.date_format'), $issueDate)->toDateString();

        $totalRowFound = $this->model
            ->where([
                ['id', '<>', $excludedId],
                'bank_branch_id' => $bankBranchId,
                'chalan_no' => $chalanNo,
                'issue_date' => $issueDate
            ])->count();

        return $totalRowFound == 0 ? true : false;
    }

    public function getChalanDetails($bankBranchId, $chalanNo, $amount, $issueDate) {
        $issueDate = Carbon::createFromFormat(config('app_constants.date_format'), $issueDate)->toDateString();

        return $this->model
            ->with([
                'application:id,app_type_id,applicant_id,current_status,certificate_no',
                'application.appType:id,name,short_name',
                'application.applicant:id,user_id,fullname',
                'attachment:id,name,extension,path'
            ])
            ->select('id', 'application_id', 'attachment_id', 'bank_branch_id')
            ->where([
                'bank_branch_id' => $bankBranchId,
                'chalan_no' => $chalanNo,
                'amount' => $amount,
                'issue_date' => $issueDate
            ])->get();
    }
}