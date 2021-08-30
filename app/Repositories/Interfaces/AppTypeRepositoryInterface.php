<?php

namespace App\Repositories\Interfaces;

interface AppTypeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}