<?php

namespace App\Services;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class QueryService
{
    public function execute($query) {
        try {
            return collect(DB::select($query));
        } catch (QueryException $exception) {
            return collect([]);
        }
    }
}