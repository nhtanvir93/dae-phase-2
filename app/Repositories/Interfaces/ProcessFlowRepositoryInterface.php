<?php

namespace App\Repositories\Interfaces;

interface ProcessFlowRepositoryInterface extends BaseRepositoryInterface
{
    function paginatedLists();

    function getDetails($id, $with = false);
}