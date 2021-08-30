<?php

namespace App\Repositories;

use App\Models\Organization;
use App\Http\Resources\OrganizationResource;
use App\Repositories\Interfaces\OrganizationRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class OrganizationRepository  extends BaseRepository implements OrganizationRepositoryInterface
{
    private $with = [
        'portCategory:id,name', 'portType:id,name', 'meansofTransport:id,name', 'logoAttachment:id,name,extension,path', 'address:id,district_id,upazilla_id,description',
        'address.district:id,name', 'address.upazilla:id,name', 'headUser.profile:id,user_id,fullname', 'createdUser:id,user_id,fullname',
        'updatedUser:id,user_id,fullname', 'deletedUser:id,user_id,fullname'
    ];

    public function __construct(Organization $model)
    {
        parent::__construct($model);
    }

    public function lists() {
        return $this->model
            ->select('id', 'name')
            ->orderBy('name','ASC')
            ->get();
    }

    public function paginatedLists() {
        $commonService = resolve('App\Services\CommonService');

        $columns = [
            'organizations.name',
            'organizations.type',
            'port_categories.name',
            'port_types.name',
            'districts.name',
            'config_means_of_transports.name'
        ];

        $likeQueryKeys = [
            'organizations.name'
        ];

        $zeroExcludedKeys = [
            'port_categories.id',
            'port_types.id',
            'districts.id',
            'config_means_of_transports.id',
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
        $queryFiltered = DB::table('organizations')
            ->leftJoin('port_categories','organizations.port_category_id','=','port_categories.id')
            ->leftJoin('port_types','organizations.port_type_id','=','port_types.id')
            ->leftJoin('districts','organizations.district_id','=','districts.id')
            ->leftJoin('config_means_of_transports','organizations.means_of_transport_id','=','config_means_of_transports.id')
            ->select('organizations.id', 'organizations.name', 'organizations.type', 'port_categories.name AS port_category_name',
                'port_types.name AS port_type_name', 'districts.name AS district_name',
                'config_means_of_transports.name AS means_of_transports_name')
            ->whereNull('organizations.deleted_at')
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
            $organization = $with ? $this->model->with($this->with)->findOrFail($id)
                : $this->model->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }

        return $with ? new OrganizationResource($organization) : $organization;
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

            $data['organizations']['address_id'] = $addressRepository->create($data['addresses']);

            return parent::create($data['organizations']);
        });
    }

    public function update(array $data, $id)
    {
        $addressRepository = resolve('App\Repositories\Interfaces\AddressRepositoryInterface');

        $organization = $this->getDetails($id);

        return DB::transaction(function() use ($addressRepository, $data, $organization, $id) {

            $data['organizations']['address_id'] = isset($organization->address_id) ?
                $addressRepository->update($data['addresses'], $organization->address_id) : $addressRepository->create($data['addresses']);

            return parent::update($data['organizations'], $id);
        });
    }

    public function getOrganizationsOnTransportType($meansOfTransportId) {
        return $this->model->select('id', 'name')->where('means_of_transport_id',$meansOfTransportId)->get();
    }

    public function getOrganizationsOnPortType($portTypeId) {
        return $this->model->select('id', 'name')->where('port_type_id',$portTypeId)->get();
    }

    public function isValidOrganizationOnTransportType($organizationId, $meansOfTransportId) {
        $totalRowFound = $this->model->where([
            'id' => $organizationId,
            'means_of_transport_id' => $meansOfTransportId,
        ])->count();

        return $totalRowFound > 0 ? true : false;
    }

    public function getDetailWithActiveProcessFlowOnly($id) {
        try {
            return $this->model->with('activeProcessFlows')->findOrFail($id);
        } catch(ModelNotFoundException $ex) {
            return false;
        }
    }
}