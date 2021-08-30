<?php
namespace App\Repositories\Interfaces;


interface DistrictRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}