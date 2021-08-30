<?php
namespace App\Repositories;

use App\Models\Notification;
use App\Repositories\Interfaces\NotificationRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NotificationResource;

class NotificationRepository extends BaseRepository implements NotificationRepositoryInterface
{
    private $with = [
        'application:id,app_type_id,applicant_id', 'application.appType:id,name,short_name', 'application.applicant:id,user_id,fullname',
        'user:id,user_id,fullname', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Notification $model)
    {
        parent::__construct($model);
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'notifications.application_id',
            'app_types.name',
            'applicant_profiles.fullname',
            'user_profiles.fullname',
            'notifications.event_type',
            'notifications.message',
            'notifications.is_read',
            'notifications.read_time',
            'notifications.is_cleared',
            'notifications.clear_time',
            'notifications.api'
        ];

        $likeQueryKeys = [];

        $zeroExcludedKeys = [
            'notifications.application_id',
            'app_types.id',
            'applicant_profiles.user_id',
            'user_profiles.user_id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))) {
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

        $queryFiltered = DB::table('notifications')
            ->leftJoin('applications','notifications.application_id','=','applications.id')
            ->leftJoin('app_types','applications.app_type_id','=','app_types.id')
            ->leftJoin('profiles as user_profiles','notifications.user_id','=','user_profiles.user_id')
            ->select('notifications.id', 'notifications.application_id', 'app_types.short_name AS app_type_name',
                'user_profiles.fullname as user','notifications.event_type', 'notifications.message', 'notifications.is_read', 'notifications.api',
                'notifications.is_cleared', 'notifications.clear_time', 'notifications.api',
                DB::raw('DATE_FORMAT(notifications.read_time, "%d/%m/%Y %h:%i %p") as read_time, DATE_FORMAT(notifications.clear_time, "%d/%m/%Y %h:%i %p") as clear_time'))
            ->whereNull('notifications.deleted_at')
            ->where('notifications.user_id', auth()->user()->id)
            ->where('notifications.is_cleared',0)
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
            $notification = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new NotificationResource($notification) : $notification;
    }

    public function createApplicationEventMessage($userId, $applicationId, $eventType, $message, $api = null) {

        return parent::create([
            'user_id' => $userId,
            'application_id' => $applicationId,
            'event_type' => $eventType,
            'message' => $message,
            'api' => $api
        ]);
    }

    public function getAll($skip, $take) {
        return $this->model
            ->select('id', 'application_id', 'user_id', 'event_type', 'api', 'message', 'is_read', 'created_at')
            ->with(['application:id,app_type_id', 'application.appType:id,short_name'])
            ->where([
                'user_id' => auth()->user()->id,
                'is_cleared' => 0
            ])
            ->skip($skip)
            ->take($take)
            ->orderBy('id', 'desc')
            ->get();
    }

    public function makeClearAll($userId) {
        $this->model
            ->where('user_id', $userId)
            ->update(['is_cleared' => 1, 'updated_at' => now()]);
    }

    public function makeClearMultiple($ids) {
        $this->model
            ->whereIn('id', $ids)
            ->update(['is_cleared' => 1, 'updated_at' => now()]);
    }

    public function makeClear($id) {
        $this->model
            ->where('id', $id)
            ->update(['is_cleared' => 1, 'updated_at' => now()]);
    }

    public function makeReadAll($userId) {
        $this->model
            ->where('user_id', $userId)
            ->update(['is_read' => 1, 'updated_at' => now()]);
    }

    public function makeReadMultiple($ids) {
        $this->model
            ->whereIn('id', $ids)
            ->update(['is_read' => 1, 'updated_at' => now()]);
    }

    public function makeRead($id) {
        $this->model
            ->where('id', $id)
            ->update(['is_read' => 1, 'updated_at' => now()]);
    }

    public function getTotalUnread() {
        return $this->model
            ->where([
                'user_id' => auth()->user()->id,
                'is_read' => 0,
                'is_cleared' => 0
            ])
            ->count();
    }
}
