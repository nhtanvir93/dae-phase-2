<?php
namespace App\Repositories\Interfaces;

interface UpazillaRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}