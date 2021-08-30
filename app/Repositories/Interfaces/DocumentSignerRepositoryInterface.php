<?php

namespace App\Repositories\Interfaces;

interface DocumentSignerRepositoryInterface extends BaseRepositoryInterface
{
    function create($content);


}