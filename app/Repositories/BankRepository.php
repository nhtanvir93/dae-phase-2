<?php
namespace App\Repositories;

use App\Models\Bank;
use App\Http\Resources\BankResource;
use App\Repositories\Interfaces\BankRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class BankRepository extends BaseRepository implements BankRepositoryInterface
{
    private $with = [
        'address:id,district_id,upazilla_id,description', 'address.district:id,name', 'address.upazilla:id,name',
        'createdUser:id,user_id,fullname', 'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Bank $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'banks.name',
            'districts.name',
            'upazillas.name',
            'addresses.description'
        ];

        $likeQueryKeys = [
            'banks.name'
        ];

        $zeroExcludedKeys = [
            'districts.id',
            'upazillas.id'
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
        $queryFiltered = DB::table('banks')
            ->leftJoin('addresses','banks.address_id','=','addresses.id')
            ->leftJoin('districts','addresses.district_id','=','districts.id')
            ->leftJoin('upazillas','addresses.upazilla_id','=','upazillas.id')
            ->select('banks.id', 'banks.name', 'districts.name AS district_name', 'upazillas.name AS upazilla_name',
                'addresses.description')
            ->whereNull('banks.deleted_at')
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
            $bank = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new BankResource($bank) : $bank;
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
        $addressRepository = resolve('App\Repositories\Interfaces\AddressRepositoryInterface');

        return DB::transaction(function() use ($addressRepository, $data) {
            $data['banks']['address_id'] = $addressRepository->create($data['addresses']);
            return parent::create($data['banks']);
        });
    }

    public function update(array $data, $id)
    {
        $addressRepository = resolve('App\Repositories\Interfaces\AddressRepositoryInterface');

        $bank = $this->getDetails($id);

        return DB::transaction(function() use ($addressRepository, $data, $bank, $id) {
            $data['banks']['address_id'] = isset($bank->address_id) ?
                $addressRepository->update($data['addresses'], $bank->address_id)
                : $addressRepository->create($data['addresses']);
            return parent::update($data['banks'], $id);
        });
    }
}