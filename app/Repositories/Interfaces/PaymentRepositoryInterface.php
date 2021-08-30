<?php

namespace App\Repositories\Interfaces;

interface PaymentRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}