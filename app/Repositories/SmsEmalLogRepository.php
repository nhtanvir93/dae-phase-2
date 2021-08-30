<?php
namespace App\Repositories;

use App\Models\SmsEmailLog;
use App\Repositories\Interfaces\SmsEmalLogRepositoryInterface;
use App\Http\Resources\SmsEmailLogResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class SmsEmalLogRepository extends BaseRepository implements SmsEmalLogRepositoryInterface
{
    private $with = [
        'toUser:id,user_id,fullname', 'fromUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(SmsEmailLog $model)
    {
        parent::__construct($model);
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'sms_email_logs.subject',
            'sms_email_logs.message',
            'profiles.fullname',
            'sms_email_logs.type',
            'sms_email_logs.event_type',
            'sms_email_logs.status'
        ];

        $likeQueryKeys = [
            'sms_email_logs.subject',
            'sms_email_logs.message',
            'profiles.fullname'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if($value != '') {
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
        $queryFiltered = DB::table('sms_email_logs')
            ->leftJoin('profiles','sms_email_logs.to','=','profiles.user_id')
            ->select('sms_email_logs.id', 'sms_email_logs.subject', 'sms_email_logs.message', 'profiles.fullname AS to', 'sms_email_logs.type',
                'sms_email_logs.event_type', 'sms_email_logs.status')
            ->whereNull('sms_email_logs.deleted_at')
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false)
    {
        try {
            $smsEmailLog = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new SmsEmailLogResource($smsEmailLog) : $smsEmailLog;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getEventWiseDetails($applicationId, $eventTypes = []) {
        return $this->model
            ->select('id', 'subject', 'message', 'to', 'type', 'event_type', 'status', 'created_by', 'request', 'response')
            ->with(['fromUser:id,user_id,fullname', 'toUser:id,user_id,fullname', 'toUser.user:id,mobile,email'])
            ->when(count($eventTypes) > 0, function($query) use ($eventTypes) {
                $query->whereIn('event_type', $eventTypes);
            })
            ->where([
                'application_id' => $applicationId,
                'type' => config('app_constants.notification_types.SMS')
            ])
            ->get();
    }
}