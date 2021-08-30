<?php

namespace App\Repositories\Interfaces;

interface ProcessTaskRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}