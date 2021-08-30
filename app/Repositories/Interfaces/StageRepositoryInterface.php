<?php

namespace App\Repositories\Interfaces;

interface StageRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);


}