<?php

namespace App\Repositories\Interfaces;

interface PortCategoryRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}