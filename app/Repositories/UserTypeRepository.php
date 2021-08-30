<?php
namespace App\Repositories;

use App\Models\UserType;
use App\Repositories\Interfaces\UserTypeRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class UserTypeRepository extends BaseRepository implements UserTypeRepositoryInterface
{
    public function __construct(UserType $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name', 'is_super_admin')
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function paginatedLists()
    {
    
    }

    public function getDetails($id, $with = false)
    {
    
    }

}