<?php

namespace App\Repositories;

use App\Models\BankBranch;
use App\Http\Resources\BankBranchResource;
use App\Repositories\Interfaces\BankBranchRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class BankBranchRepository extends BaseRepository implements BankBranchRepositoryInterface
{
    private $with = [
        'bank:id,name', 'district:id,name', 'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname',
        'deletedUser:id,user_id,fullname'
    ];

    public function __construct(BankBranch $model)
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
            'bank_branches.name',
            'banks.name',
            'districts.name'
        ];

        $likeQueryKeys = [
            'bank_branches.name'
        ];

        $zeroExcludedKeys = [
            'banks.id',
            'districts.id'
        ];

        $orderingColumn = $columns[request()->get('order')[0]['column']];
        $orderingColumnDirection = request()->get('order')[0]['dir'];
        $start = request()->get('start');
        $length = request()->get('length');

        $filterKeys = $commonService->getConvertedPaginatedFilterKeys(request()->get('filter'));
        $filterConditions = [];

        foreach($filterKeys as $key => $value) {
            if((!is_numeric($value) && $value != '') || (is_numeric($value) && $value > 0 && in_array($key, $zeroExcludedKeys))) {
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
        $queryFiltered = DB::table('bank_branches')
                            ->leftJoin('banks','bank_branches.bank_id','=','banks.id')
                            ->leftJoin('districts','bank_branches.district_id','=','districts.id')
                            ->select('bank_branches.id', 'bank_branches.name', 'banks.name AS bank_name', 'districts.name AS district_name')
                            ->whereNull('bank_branches.deleted_at')
                            ->where('bank_branches.name', '<>', '')
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
            $bankBranch = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new BankBranchResource($bankBranch) : $bankBranch;
    }

    public function canDelete($id) {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getBankAndDistrictWise($bankId, $districtId) {
        return $this->model
            ->select('id', 'name')
            ->where([
                'bank_id' => $bankId,
                'district_id' => $districtId
            ])
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function isValidBankBranch($id, $bankId, $districtId) {
        $rowFound = $this->model
            ->where([
                'id' => $id,
                'bank_id' => $bankId,
                'district_id' => $districtId
            ])->count();

        return $rowFound > 0 ? true : false;
    }
}