<?php

namespace App\Repositories\Interfaces;

interface BankRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}