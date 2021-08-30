<?php

namespace App\Repositories\Interfaces;

interface MeansofTransportRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}