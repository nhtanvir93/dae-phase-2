<?php

namespace App\Repositories\Interfaces;

interface NoticeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}