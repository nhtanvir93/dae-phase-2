<?php

namespace App\Repositories\Interfaces;

interface MemoRepositoryInterface extends BaseRepositoryInterface
{

    function getDetails($id, $with = false);

}