<?php
namespace App\Repositories;

use App\Models\ProxyUserLog;
use App\Repositories\Interfaces\ProxyUserLogRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProxyUserLogResource;
use Carbon\Carbon;

class ProxyUserLogRepository extends BaseRepository implements ProxyUserLogRepositoryInterface
{
    private $with = [
        'originalUser:id,user_id,fullname', 'proxyUser:id,user_id,fullname', 'attachment:id,name,path', 'createdUser:id,user_id,fullname',
        'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ProxyUserLog $model)
    {
        parent::__construct($model);
    }

    public function getDetails($id, $with = false)
    {
        try {
            $proxyUserLog = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ProxyUserLogResource($proxyUserLog) : $proxyUserLog;
    }

    public function setUser(array $data)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($userRepository, $attachmentRepository, $data) {
            $userRepository->update([
                'is_proxy_user' => 1
            ],$data['proxy_user_logs']['proxy_user_id']);

            if(isset($data['attachments']['attachment'])) {
                $attachmentRepository->setPath(config('app_constants.path.attachment'));
                $file = [
                    'file' => $data['attachments']['attachment']
                ];
                $data['proxy_user_logs']['attachment_id'] = $attachmentRepository->create($file);
            }

            return parent::create($data['proxy_user_logs']);
        });
    }

    public function unsetUser($userId) {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        return DB::transaction(function() use ($userRepository, $userId) {
            $proxyUserLog = DB::table('proxy_user_logs')
                ->selectRaw('id, proxy_user_id, proxy_user_logs.from, CURDATE() AS today, DATEDIFF(CURDATE(),proxy_user_logs.from) AS date_diff_in_days')
                ->where('original_user_id',$userId)
                ->orderBy('date_diff_in_days','ASC')
                ->first();

            $userRepository->update([
                'is_proxy_user' => 0
            ],$proxyUserLog->proxy_user_id);

            parent::update([
                'to' => Carbon::today()->toDateString()
            ],$proxyUserLog->id);
        });
    }

    public function hasProxy($userId) {
        $totalFoundLog = $this->model->where('original_user_id',$userId)->whereNull('to')->count();
        return $totalFoundLog > 0 ? true : false;
    }

    public function getProxyUserLogs($userId) {
        return $this->model->with([
                'originalUser:id,user_id,fullname', 'proxyUser:id,user_id,fullname', 'attachment:id,name,path'
            ])
            ->select('id', 'original_user_id', 'proxy_user_id', 'reason', 'from', 'to', 'attachment_id')
            ->where('original_user_id',$userId)
            ->orderBy('from','desc')
            ->get();
    }
}