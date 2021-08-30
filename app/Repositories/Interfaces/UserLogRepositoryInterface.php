<?php

namespace App\Repositories\Interfaces;

interface UserLogRepositoryInterface extends BaseRepositoryInterface
{
    function paginatedLists();

    function getDetails($id, $with = false);
}