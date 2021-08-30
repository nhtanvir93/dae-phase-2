<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 7/29/2020
 * Time: 2:45 PM
 */

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}