<?php

namespace App\Repositories\Interfaces;

interface CnfIpAssignmentRepositoryInterface extends BaseRepositoryInterface
{
    function paginatedLists();

    function getDetails($id, $with = false);
}