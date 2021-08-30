<?php

namespace App\Repositories\Interfaces;

interface CertificateRepositoryInterface extends BaseRepositoryInterface
{
    function lists();

    function paginatedLists();

    function getDetails($id, $with = false);
}