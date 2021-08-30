<?php

namespace App\Repositories\Interfaces;

interface AppStatusLogRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}