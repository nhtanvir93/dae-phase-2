<?php

namespace App\Repositories\Interfaces;

interface ConfigAttachmentRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}