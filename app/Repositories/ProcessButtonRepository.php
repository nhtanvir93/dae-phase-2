<?php
namespace App\Repositories;

use App\Models\ProcessButton;
use App\Repositories\Interfaces\ProcessButtonRepositoryInterface;

class ProcessButtonRepository extends BaseRepository implements ProcessButtonRepositoryInterface
{
    public function __construct(ProcessButton $model)
    {
        parent::__construct($model);
    }

    public function lists()
    {
        return $this->model
            ->select('id', 'name', 'type')
            ->orderBy('name', 'ASC')
            ->get();
    }
}