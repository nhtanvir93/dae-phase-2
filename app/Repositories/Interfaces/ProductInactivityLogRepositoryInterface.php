<?php

namespace App\Repositories\Interfaces;

interface ProductInactivityLogRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);


}