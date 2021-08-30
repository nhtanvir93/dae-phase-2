<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 8/6/2020
 * Time: 8:55 PM
 */

namespace App\Repositories\Interfaces;

interface FeeSetupRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}