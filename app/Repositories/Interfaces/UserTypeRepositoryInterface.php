<?php

namespace App\Repositories\Interfaces;

interface UserTypeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}