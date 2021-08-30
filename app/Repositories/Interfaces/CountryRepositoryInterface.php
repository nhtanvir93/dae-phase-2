<?php

namespace App\Repositories\Interfaces;

interface CountryRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);


}