<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class DelayedAppService
{
    const DAY_TO_SECONDS = 86400;

    private function getProcessedQuery() {

        $dayToSeconds = self::DAY_TO_SECONDS;
        $dbDateTimeFormat = config('app_constants.db_datetime_format');

        return DB::table('app_status_logs')
            ->leftJoin('applications', 'app_status_logs.application_id', '=', 'applications.id')
            ->leftJoin('app_types', 'applications.app_type_id', '=', 'app_types.id')
            ->leftJoin('organizations', 'applications.organization_id', '=', 'organizations.id')
            ->leftJoin('users', 'app_status_logs.to_user_id', '=', 'users.id')
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
            ->select('app_status_logs.id', 'app_status_logs.application_id AS application_id', 'app_status_logs.status AS app_status',
            'organizations.name AS organization_name', 'app_types.short_name AS app_type_name')
            ->selectRaw(
                "CONCAT(IFNULL(profiles.fullname, 'N/A'), ' (', users.username ,')') AS app_holder, 
                DATE_FORMAT(app_status_logs.created_at, '$dbDateTimeFormat') AS released_at, 
                FLOOR(app_status_logs.elapsed_time/$dayToSeconds) AS delayed_days")
            ->addSelect(['arrived_at' => DB::table('app_status_logs AS previous_status_logs')
                ->selectRaw("DATE_FORMAT(created_at, '$dbDateTimeFormat')")
                ->whereRaw(
                    'previous_status_logs.id < app_status_logs.id AND previous_status_logs.application_id = app_status_logs.application_id'
                )
                ->orderBy('id','DESC')
                ->take(1)
            ])
            ->where('applications.is_paid',1);
    }

    private function getProcessingQuery() {
        $dbDateTimeFormat = config('app_constants.db_datetime_format');

        return DB::table('app_status_logs')
            ->join('applications', function($query) {
                $query
                    ->on('app_status_logs.application_id','=','applications.id')
                    ->on('app_status_logs.stage','=','applications.current_stage')
                    ->on('app_status_logs.to_user_id','=','applications.app_holding_user_id');
            })
            ->leftJoin('app_types', 'applications.app_type_id', '=', 'app_types.id')
            ->leftJoin('organizations', 'applications.organization_id', '=', 'organizations.id')
            ->leftJoin('users', 'applications.app_holding_user_id', '=', 'users.id')
            ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
            ->select('app_status_logs.id', 'app_status_logs.application_id AS application_id',
                'organizations.name AS organization_name', 'app_types.short_name AS app_type_name')
            ->selectRaw(
                "CONCAT(IFNULL(profiles.fullname, 'N/A'), ' (', users.username ,')') AS app_holder,
                CONCAT('PROCESSING') AS app_status,
                DATE_FORMAT(app_status_logs.created_at, '$dbDateTimeFormat') AS arrived_at, 
                CONCAT('Not Forwarded Yet') AS released_at,
                TIMESTAMPDIFF(DAY, app_status_logs.created_at, NOW()) AS delayed_days")
            ->where('applications.is_paid',1);
    }

    public function __invoke($filterKeys)
    {
        $appStatuses = [
            'PROCESSING' => 'PROCESSING',
            'PROCESSED' => 'PROCESSED'
        ];

        $columns = [
            'application_id',
            'organization_name',
            'app_type_name',
            'app_holder',
            'arrived_at',
            'released_at',
            'delayed_days'
        ];

        if($filterKeys['app_status'] == $appStatuses['PROCESSING']) {
            $query = $this->getProcessingQuery();
        } else {
            $query = $this->getProcessedQuery();
        }

        $where = [];
        $whereRaw = '';

        if(isset($filterKeys['organization_id'])) {
            $where['applications.organization_id'] = $filterKeys['organization_id'];
        }

        if(isset($filterKeys['app_holding_user_id'])) {
            $where['users.id'] = $filterKeys['app_holding_user_id'];
        }

        if(isset($filterKeys['delayed_days'])) {
            if($filterKeys['app_status'] == $appStatuses['PROCESSING']) {
                $whereRaw .= 'TIMESTAMPDIFF(DAY, app_status_logs.created_at, NOW()) >= ' . $filterKeys['delayed_days'];
            } else {
                $whereRaw .= 'FLOOR(app_status_logs.elapsed_time/' . self::DAY_TO_SECONDS . ') >= ' . $filterKeys['delayed_days'];
            }
        }

        if(isset($filterKeys['app_type_id'])) {
            $where['applications.app_type_id'] = $filterKeys['app_type_id'];
        }

        $query
            ->when($where, function($query) use ($where) {
                $query->where($where);
            })
            ->when(strlen($whereRaw) > 0, function($query) use ($whereRaw) {
                $query->whereRaw($whereRaw);
            });

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $data['draw'] = request()->get('draw');

        $totalRowFound = $query->count();
        $data['recordsTotal'] = $totalRowFound;
        $data['recordsFiltered'] = $totalRowFound;

        $data['data'] = $query
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }
}