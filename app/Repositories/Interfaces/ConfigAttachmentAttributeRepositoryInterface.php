<?php

namespace App\Repositories\Interfaces;

interface ConfigAttachmentAttributeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}