<?php

namespace App\Repositories\Interfaces;

interface VarietyRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}