<?php

namespace App\Repositories\Interfaces;

interface TaskFieldRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);


}