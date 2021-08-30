<?php

namespace App\Repositories\Interfaces;

interface RecoverPasswordReporsitoryInterface extends BaseRepositoryInterface
{
    function getDetails($id, $with = false);
}