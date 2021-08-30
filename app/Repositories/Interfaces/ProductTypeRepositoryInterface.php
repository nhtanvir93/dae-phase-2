<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 7/29/2020
 * Time: 11:39 AM
 */

namespace App\Repositories\Interfaces;

interface ProductTypeRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}