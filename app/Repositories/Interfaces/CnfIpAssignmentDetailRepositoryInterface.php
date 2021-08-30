<?php

namespace App\Repositories\Interfaces;

interface CnfIpAssignmentDetailRepositoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}