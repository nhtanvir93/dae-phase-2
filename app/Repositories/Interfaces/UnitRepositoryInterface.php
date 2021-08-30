<?php
namespace App\Repositories\Interfaces;

interface UnitRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

	function paginatedLists();

	function getDetails($id, $with = false);

}