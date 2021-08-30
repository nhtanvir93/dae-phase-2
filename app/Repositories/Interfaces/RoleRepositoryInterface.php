<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 8/5/2020
 * Time: 11:20 AM
 */

namespace App\Repositories\Interfaces;

interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}