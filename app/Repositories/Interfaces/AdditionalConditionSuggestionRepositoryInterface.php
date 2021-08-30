<?php

namespace App\Repositories\Interfaces;

interface AdditionalConditionSuggestionRepositoryInterface extends BaseRepositoryInterface
{
    function paginatedLists();

    function getDetails($id, $with = false);
}