<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 8/7/2020
 * Time: 4:58 PM
 */

namespace App\Repositories\Interfaces;

interface AttachmentRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}