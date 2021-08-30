<?php

namespace App\Repositories\Interfaces;

interface AppTransferLogRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);


}