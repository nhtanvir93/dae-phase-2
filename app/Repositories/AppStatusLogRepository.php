<?php
namespace App\Repositories;

use App\Models\AppStatusLog;
use App\Repositories\Interfaces\AppStatusLogRepositoryInterface;
use App\Http\Resources\AppStatusLogResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AppStatusLogRepository extends BaseRepository implements AppStatusLogRepositoryInterface
{
    private $with = [
        'application', 'fromUser:id,user_id,fullname', 'toUser:id,user_id,fullname', 'createdUser:id,user_id,fullname',
        'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(AppStatusLog $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
        try {
            $appStatusLog = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $exception) {
            return false;
        }

        return $with ? new AppStatusLogResource($appStatusLog) : $appStatusLog;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getPreviousStage($applicationId, $currentStage = false) {
        try {
            return $this->model
                ->when($currentStage !== false, function($query) use ($currentStage) {
                    $query->where('stage', '<', $currentStage);
                })
                ->where('application_id', $applicationId)
                ->orderBy('created_at', 'DESC')
                ->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getPreviousStageUser($applicationId, $stage = false) {
        try {
            return $this->model
                ->select('id', 'from_user_id')
                ->when($stage !== false, function($query) use ($stage) {
                    $query->where('stage', '<', $stage);
                })
                ->where('application_id', $applicationId)
                ->orderBy('created_at', 'DESC')
                ->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getStageUser($applicationId, $stage) {
        try {
            return $this->model
                ->select('id', 'from_user_id')
                ->where([
                    'application_id' => $applicationId,
                    'stage' => $stage
                ])
                ->orderBy('created_at', 'DESC')
                ->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function lastApplicationUserRoles($excludedApplicationId, $appTypeId, $stageLevel) {
        try{
            $appStatusLog = $this->model
                ->select('app_status_logs.id', 'app_status_logs.application_id', 'app_status_logs.from_user_id')
                ->with(['fromUser:id', 'fromUser.roles:user_role.id,user_role.role_id'])
                ->leftJoin('applications', 'app_status_logs.application_id', '=', 'applications.id')
                ->where([
                    ['app_status_logs.application_id', '<>', $excludedApplicationId],
                    'applications.app_type_id' => $appTypeId,
                    'app_status_logs.stage' => $stageLevel
                ])
                ->orderBy('app_status_logs.created_at', 'DESC')
                ->first();

            return $appStatusLog ? $appStatusLog->fromUser->roles->pluck('role_id')->toArray() : false;
        } catch(ModelNotFoundException $exception) {
            return false;
        }
    }

    public function createFromPartial($data) {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $previousStage = $this->getPreviousStage($data['application_id']);
        $previousDateTime = null;

        if(!$previousStage) {
           $application = $applicationRepository->getDetails($data['application_id']);
           $previousDateTime = $application->getRawOriginal('updated_at');
        } else {
            $previousDateTime = $previousStage->getRawOriginal('created_at');
        }

        $data['elapsed_time'] = Carbon::now()->diffInSeconds(Carbon::create($previousDateTime));

        return parent::create($data);
    }

    public function getApplicationHistory($applicationId) {
        return $this->model
            ->select('id', 'application_id', 'stage', 'from_user_id', 'to_user_id', 'status', 'comment', 'elapsed_time', 'created_at')
            ->with(['fromUserProfile:id,user_id,fullname', 'toUserProfile:id,user_id,fullname'])
            ->when(auth()->user()->user_type_id == config('app_constants.user_type.applicant'), function($query) {
                $query->where(function ($query) {
                    $query->where([
                        'to_user_id' => auth()->user()->id
                    ])->orWhere([
                        'from_user_id' => auth()->user()->id
                    ]);
                });
            })
            ->where('application_id', $applicationId)
            ->get();
    }

    public function getLastRecheckingComment($applicationId) {
        return $this->model
            ->select('app_status_logs.id', 'app_status_logs.application_id', 'app_status_logs.stage',
                'app_status_logs.from_user_id', 'app_status_logs.to_user_id', 'app_status_logs.status',
                'app_status_logs.comment', 'app_status_logs.elapsed_time')
            ->leftJoin('applications', 'app_status_logs.application_id', '=', 'applications.id')
            ->with(['fromUserProfile:id,user_id,fullname', 'toUserProfile:id,user_id,fullname'])
            ->where([
                'app_status_logs.application_id' => $applicationId,
                'app_status_logs.status' => config('app_constants.app_statuses.RECHECKED'),
                'applications.current_status' => config('app_constants.app_statuses.RECHECKED')
            ])
            ->orderBy('id', 'desc')
            ->first();
    }

    public function getWorkingDetails($userIds, $fromDate = null, $toDate = null) {
        $commonService = resolve('App\Services\CommonService');

        $results = $this->model
            ->leftJoin('profiles AS dae_officials', 'app_status_logs.from_user_id', '=', 'dae_officials.user_id')
            ->select('app_status_logs.from_user_id', 'dae_officials.fullname',
                DB::raw('COUNT(DISTINCT(app_status_logs.application_id)) AS total_processed_applicatoins, 
                SUM(app_status_logs.elapsed_time) AS total_working_time, MAX(app_status_logs.elapsed_time) AS max_working_time,
                MIN(app_status_logs.elapsed_time) AS min_working_time, 
                (SUM(app_status_logs.elapsed_time)/COUNT(DISTINCT(app_status_logs.application_id))) AS avg_working_time'))
            ->when($fromDate, function($query, $fromDate) {
                $query->where('app_status_logs.created_at', '>=', $fromDate);
            })
            ->when($toDate, function($query, $toDate) {
                $query->where('app_status_logs.created_at', '<=', $toDate);
            })
            ->whereNotNull('dae_officials.fullname')
            ->whereIn('app_status_logs.from_user_id', $userIds)
            ->groupBy('app_status_logs.from_user_id')
            ->orderBy('dae_officials.fullname')
            ->get();

        if($results->count() == 0) {
           return $results;
        }

        $results = $results->toArray();

        foreach($results as $key => $result) {
            $results[$key]['total_working_time'] = $commonService->getElapsedTimeInDetails($result['total_working_time']);
            $results[$key]['max_working_time'] = $commonService->getElapsedTimeInDetails($result['max_working_time']);
            $results[$key]['min_working_time'] = $commonService->getElapsedTimeInDetails($result['min_working_time']);
            $results[$key]['avg_working_time'] = $commonService->getElapsedTimeInDetails($result['avg_working_time']);
        }

        return collect($results);
    }
}