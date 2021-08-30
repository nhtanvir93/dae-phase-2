<?php

namespace App\Repositories\Interfaces;

interface SmsEmalLogRepositoryInterface extends BaseRepositoryInterface
{
    function paginatedLists();

    function getDetails($id, $with = false);
}