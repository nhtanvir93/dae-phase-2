<?php

namespace App\Repositories\Interfaces;

interface MenuRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}