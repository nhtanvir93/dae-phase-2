<?php
namespace App\Repositories;

use App\Models\AdditionalConditionSuggestion;
use App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Resources\AdditionalConditionSuggestionResource;
use Illuminate\Support\Facades\DB;

class AdditionalConditionSuggestionRepository extends BaseRepository implements AdditionalConditionSuggestionRepositoryInterface
{
    private $with = [
        'appType:id,name,short_name', 'productType:id,name', 'product:id,name', 'attachment:id,name,extension,path',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(AdditionalConditionSuggestion $model)
    {
        parent::__construct($model);
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'app_types.name',
            'product_types.name',
            'products.name',
            'additional_condition_suggestions.additional_condition'
        ];

        $likeQueryKeys = [];

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
        $data['recordsFiltered'] = $this->model
            ->leftJoin('app_types','additional_condition_suggestions.app_type_id','=','app_types.id')
            ->leftJoin('product_types','additional_condition_suggestions.product_type_id','=','product_types.id')
            ->leftJoin('products','additional_condition_suggestions.product_id','=','products.id')
            ->where($filterConditions)->count();

        $data['data'] = $this->model
            ->select('additional_condition_suggestions.id', 'app_types.short_name as app_type_name',
                'product_types.name as product_type_name', 'products.name as product_name',
                'additional_condition_suggestions.additional_condition', 'additional_condition_suggestions.is_active',
                'additional_condition_suggestions.attachment_id')
            ->with('attachment:id,name,extension,path')
            ->leftJoin('app_types','additional_condition_suggestions.app_type_id','=','app_types.id')
            ->leftJoin('product_types','additional_condition_suggestions.product_type_id','=','product_types.id')
            ->leftJoin('products','additional_condition_suggestions.product_id','=','products.id')
            ->orderBy($orderingColumn, $orderingColumnDirection)
            ->where($filterConditions)
            ->skip($start)
            ->take($length)
            ->get();

        return $data;
    }

    public function getDetails($id, $with = false) {
        try {
            $additionalConditionSuggestion = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new AdditionalConditionSuggestionResource($additionalConditionSuggestion) : $additionalConditionSuggestion;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function create(array $data)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $data) {
            $attachmentRepository->setPath(config('app_constants.path.additional_condition'));
            $file = [
                'file' => $data['attachments']['attachment']
            ];

            $data['attachment_id'] = $attachmentRepository->create($file);

            unset($data['attachments']);

            return parent::create($data);
        });
    }

    public function update(array $data, $id)
    {
        $attachmentRepository = resolve('App\Repositories\Interfaces\AttachmentRepositoryInterface');

        return DB::transaction(function() use ($attachmentRepository, $data, $id) {
            $additionalConditionSuggestion = $this->getDetails($id);

            if(isset($data['attachments']['attachment'])) {
                $attachmentRepository->setPath(config('app_constants.path.additional_condition'));
                $file = [
                    'file' => $data['attachments']['attachment']
                ];

                $data['attachment_id'] = isset($additionalConditionSuggestion->attachment_id) ?
                    $attachmentRepository->update($file, $additionalConditionSuggestion->attachment_id)
                    : $attachmentRepository->create($file);

                unset($data['attachments']);
            }

            return parent::update($data, $id);
        });
    }

    public function hasActiveSuggestion($appTypeId, $productTypeId, $productId, $exceptId) {
        return $this->model
            ->select('id')
            ->where([
                'app_type_id' => $appTypeId,
                'product_type_id' => $productTypeId,
                'product_id' => $productId,
                ['id', '<>', $exceptId]
            ])
            ->first();
    }

    public function getAllByProductIds($appTypeId, $productIds) {
        return $this->model
            ->select('id', 'app_type_id', 'product_type_id', 'product_id', 'additional_condition', 'attachment_id', 'is_active')
            ->select('id', 'app_type_id', 'product_type_id', 'product_id', 'additional_condition', 'attachment_id', 'is_active')
            ->with(['appType:id,name,short_name', 'productType:id,name', 'product:id,name', 'attachment:id,name,extension,path'])
            ->where([
                'app_type_id' => $appTypeId,
                'is_active' => 1
            ])
            ->whereIn('product_id', $productIds)
            ->get();
    }
}