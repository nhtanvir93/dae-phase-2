<?php

namespace App\Repositories\Interfaces;

interface PurposeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}