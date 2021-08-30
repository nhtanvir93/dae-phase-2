<?php

namespace App\Repositories\Interfaces;

interface TransactionRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}