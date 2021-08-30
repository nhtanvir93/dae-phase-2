<?php

namespace App\Repositories\Interfaces;

interface NotificationRepositoryInterface extends BaseRepositoryInterface
{
    function paginatedLists();

    function getDetails($id, $with = false);
}