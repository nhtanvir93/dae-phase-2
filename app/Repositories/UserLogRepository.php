<?php
namespace App\Repositories;

use App\Http\Resources\UserLogResource;
use App\Models\UserLog;
use App\Repositories\Interfaces\UserLogRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserLogRepository extends BaseRepository implements UserLogRepositoryInterface
{
    private $with = [
        'user:id,user_id,fullname', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(UserLog $model)
    {
        parent::__construct($model);
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'profiles.fullname',
            'users.username',
            'organizations.id',
            'user_types.id',
            'user_logs.login_time',
            'user_logs.logout_time',
            '',
            'user_logs.has_left_manually'
        ];

        $likeQueryKeys = [
            'users.username',
            'profiles.fullname'
        ];

        $zeroExcludedKeys = [
            'user_types.id',
            'organizations.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        $whereRaw = '';

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && $value >= 0 && !in_array($key, $zeroExcludedKeys))) {
                if(in_array($key, $likeQueryKeys)) {
                    $filterConditions[] = [
                        $key, 'like', '%' . $value . '%'
                    ];
                }  elseif($key == 'from_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(user_logs.login_time) >= '$value'";
                } elseif($key == 'to_date') {
                    $value = Carbon::createFromFormat(config('app_constants.date_format'), $value)->toDateString();

                    if(strlen($whereRaw) > 0) {
                        $whereRaw .= ' AND';
                    }

                    $whereRaw .= " DATE(user_logs.login_time) <= '$value'";
                } else {
                    $filterConditions[] = [
                        $key, '=', $value
                    ];
                }
            }
        }

        $dbDateTimeFormat = config('app_constants.db_datetime_format');

        $data['draw'] = request()->get('draw');
        $data['recordsTotal'] = $this->model->count();
        $queryFiltered = $this->model
            ->leftJoin('profiles','user_logs.user_id','=','profiles.user_id')
            ->leftJoin('users','user_logs.user_id','=','users.id')
            ->leftJoin('user_types','users.user_type_id','=','user_types.id')
            ->leftJoin('organizations','users.organization_id','=','organizations.id')
            ->select('user_logs.id', 'users.username', 'profiles.fullname', 'user_logs.has_left_manually', 'user_logs.login_time', 'user_logs.logout_time',
                'organizations.name AS organization_name', 'user_types.name AS user_type_name')
            ->where($filterConditions)
            ->when($whereRaw, function($query, $whereRaw) {
                $query->whereRaw($whereRaw);
            });
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
            $userLog = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new UserLogResource($userLog) : $userLog;
    }

    public function updateLogoutTime($userId, $hasLeftChannelManually) {
        $result = $this->model
            ->where('user_id', $userId)
            ->whereNull('logout_time')
            ->orderBy('login_time', 'desc')
            ->first();

        if(!$result) {
            return false;
        }

        $data = [
            'has_left_manually' => $hasLeftChannelManually,
            'logout_time' => now()
        ];

        if($result->user_agent == 'System' && isset($_SERVER['HTTP_USER_AGENT']) ) {
            $data = [
                'user_agent' => $_SERVER['HTTP_USER_AGENT'],
                'has_left_manually' => $hasLeftChannelManually,
                'logout_time' => now()
            ];
        }

        parent::update($data, $result->id);

        auth()->logout();
    }

    public function updateInvalidLogoutTime($userId) {
        $lastLogoutTime = now()->subMinute(5)->toDateTimeString();

        $result = $this->model
            ->where([
                'user_id' => $userId,
                'has_left_manually' => 0,
                ['logout_time', '>=', $lastLogoutTime]
            ])
            ->whereNotNull('logout_time')
            ->first();

        if(!$result) {
            $this->createFromUserId($userId);
            return false;
        }

        parent::update([
            'has_left_manually' => null,
            'logout_time' => null
        ], $result->id);
    }

    public function createFromUserId($userId)
    {
        $userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'System';

        return parent::create([
            'user_id' => $userId,
            'user_agent' => $userAgent,
            'has_left_manually' => null,
            'login_time' => now()
        ]);
    }
}