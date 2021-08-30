<?php

namespace App\Repositories\Interfaces;

interface PortTypeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}