<?php

namespace App\Repositories\Interfaces;

interface AppTaskFieldRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}