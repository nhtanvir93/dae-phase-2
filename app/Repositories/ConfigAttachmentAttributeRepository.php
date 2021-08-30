<?php
namespace App\Repositories;

use App\Models\ConfigAttachmentAttribute;
use App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface;
use App\Http\Resources\ConfigAttacchmentAttributeResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ConfigAttachmentAttributeRepository extends BaseRepository implements ConfigAttachmentAttributeRepositoryInterface
{
    private $commonService;

    private $with = [
        'configAttachment:id,name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname',
        'deletedUser:id,user_id,fullname'
    ];

    public function __construct(ConfigAttachmentAttribute $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'config_attachment_attributes.name',
            'config_attachments.name',
            'config_attachment_attributes.type',
            'config_attachment_attributes.label',
            'config_attachment_attributes.is_mandatory'
        ];

        $likeQueryKeys = [
            'config_attachment_attributes.name',
            'config_attachment_attributes.label'
        ];

        $zeroExcludedKeys = [
            'config_attachments.id',
            'config_attachment_attributes.type'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '')
                || (is_numeric($value) && !in_array($key, $zeroExcludedKeys))
                || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
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
        $queryFiltered = DB::table('config_attachment_attributes')
            ->leftJoin('config_attachments','config_attachment_attributes.config_attachment_id','=','config_attachments.id')
            ->select('config_attachment_attributes.id', 'config_attachment_attributes.name', 'config_attachments.name AS config_attachment_name', 'config_attachment_attributes.type',
                'config_attachment_attributes.label', 'config_attachment_attributes.is_mandatory')
            ->whereNull('config_attachment_attributes.deleted_at')
            ->where($filterConditions);
        $data['recordsFiltered'] = $queryFiltered->count();

        $data['data'] = $queryFiltered
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false) {
        try {
            $configAttachmentAttribute = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new ConfigAttacchmentAttributeResource($configAttachmentAttribute) : $configAttachmentAttribute;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getConfigAttachmentAttributes($configAttachmentId) {
        return $this->model
            ->with('configAttachment:id,name')
            ->select('id', 'name', 'config_attachment_id', 'type', 'label', 'is_mandatory')
            ->where([
                'config_attachment_id' => $configAttachmentId
            ])
            ->orderBy('position', 'ASC')
            ->get();
    }

    public function getConfigAttachmentRequiredAttributes($configAttachmentId) {
        return $this->model
            ->with('configAttachment:id,name')
            ->select('id', 'name', 'config_attachment_id', 'type', 'label', 'is_mandatory')
            ->where([
                'config_attachment_id' => $configAttachmentId,
                'is_mandatory' => 1
            ])
            ->get();
    }

    public function validAttachmentAttribute($configAttachmentId, $configAttachmentAttributeId) {
        $totalRowFound = $this->model->where([
            'config_attachment_id' => $configAttachmentId,
            'id' => $configAttachmentAttributeId
        ])->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function isRequiredAttributesGiven($configAttachmentId, $attributes) {
        $configAttachmentAttributes = $this->getConfigAttachmentRequiredAttributes($configAttachmentId);

        foreach($configAttachmentAttributes as $configAttachmentAttribute) {
            if(!in_array($configAttachmentAttribute->id, $attributes)) {
                return false;
            }
        }

        return true;
    }

    public function sortAttachmentAttributes($attributes, $configAttachmentId) {

        $configAttributes = $this->getConfigAttachmentAttributes($configAttachmentId);

        return DB::transaction(function() use ($configAttributes, $attributes, $configAttachmentId) {
            foreach($configAttributes as $configAttribute) {
                $position = array_search($configAttribute->id, $attributes) + 1;
                $configAttachmentAttribute = [
                    'position' => $position
                ];

                parent::update($configAttachmentAttribute, $configAttribute->id);
            }
        });
    }

    public function getInputFieldNames($ids) {
        return $this->model->select('id','input_field_name')->whereNotNull('input_field_name')->whereIn('id', $ids)->get();
    }
}