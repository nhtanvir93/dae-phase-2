<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 8/4/2020
 * Time: 11:06 AM
 */

namespace App\Repositories\Interfaces;

interface OrganizationRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}