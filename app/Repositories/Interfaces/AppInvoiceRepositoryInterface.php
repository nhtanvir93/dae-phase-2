<?php

namespace App\Repositories\Interfaces;

interface AppInvoiceRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}