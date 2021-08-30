<?php

namespace App\Repositories\Interfaces;

interface ProxyUserLogRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}