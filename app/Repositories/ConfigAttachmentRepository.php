<?php
namespace App\Repositories;

use App\Models\ConfigAttachment;
use App\Http\Resources\ConfigAttachmentResource;
use App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ConfigAttachmentRepository extends BaseRepository implements ConfigAttachmentRepositoryInterface
{
    private $with = [
        'appTypes:app_type_id,name,short_name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ConfigAttachment $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name', 'short_name', 'display_label')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $columns = [
            'name',
            'short_name',
            'display_label',
            'is_profile_eligible',
            'is_mandatory_for_profile'
        ];

        $likeQueryKeys = [
            'name',
            'short_name',
            'display_label'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = request()->get('filter');
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
        $data['recordsFiltered'] = $this->model->where($filterConditions)->count();

        $data['data'] = DB::table('config_attachments')
            ->select('id', 'name', 'short_name', 'display_label', 'is_profile_eligible', 'is_mandatory_for_profile')
            ->whereNull('deleted_at')
            ->where($filterConditions)
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false)
    {
        try {
            $configAttachment = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ConfigAttachmentResource($configAttachment) : $configAttachment;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function create(array $data) {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        return DB::transaction(function() use ($configAppTypeAttachmentRepository, $data) {
            $appTypes = $data['app_types'];
            unset($data['app_types']);

            $configAttachmentId = parent::create($data);

            $configAppTypeAttachmentRepository->createAll($appTypes,$configAttachmentId);
            return $configAttachmentId;
        });
    }

    public function update(array $data, $id)
    {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        return DB::transaction(function() use ($configAppTypeAttachmentRepository, $data, $id) {
            $appTypes = $data['app_types'];
            unset($data['app_types']);

            $configAppTypeAttachmentRepository->updateAll($appTypes, $id);
            return parent::update($data, $id);
        });
    }

    public function getProfileEligible() {
        return $this->model
            ->select('id', 'name', 'short_name', 'display_label', 'is_mandatory_for_profile')
            ->where('is_profile_eligible',1)
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function isProfileEligible($id) {
        return $this->model
            ->select('id', 'name', 'short_name', 'display_label')
            ->where([
                'id' => $id,
                'is_profile_eligible' => 1
            ])
            ->count();
    }

    public function getMissingAttachments($userId) {
        return DB::table('config_attachments')
            ->select('id', 'name')
            ->whereNotIn('id', function($query) use ($userId) {
                $query->select('config_attachment_id')
                    ->from('user_attachments')
                    ->where('user_id',$userId)
                    ->whereNull('deleted_at');
            })
            ->where('is_profile_eligible',1)
            ->where('is_mandatory_for_profile',1)
            ->whereNull('deleted_at')
            ->get();
    }
}
