<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CommonService
{
    public function getConvertedPaginatedFilterKeys($filterKeys, $parentKey = null) {
        $newFilterKeys = [];
        foreach($filterKeys as $key => $filterKey) {
            if(is_array($filterKey)) {
                $newFilterKeys = array_merge($newFilterKeys, $this->getConvertedPaginatedFilterKeys($filterKey, $key));
            } else {
                $newKey = $parentKey ? $parentKey . '.' . $key : $key;
                $newFilterKeys[$newKey] = $filterKey;
            }
        }

        return $newFilterKeys;
    }

    public function getElapsedTimeInDetails($elapsedTime)
    {
        if($elapsedTime == null || $elapsedTime == 0) {
            return null;
        }

        $minuteToSeconds = 60;
        $hourToSeconds = 60 * $minuteToSeconds;
        $dayToSeconds = 24 * $hourToSeconds;
        $monthToSeconds = 30 * $dayToSeconds;
        $yearToSeconds = 12 * $monthToSeconds;

        $elapsedTimeDetails = '';

        if($elapsedTime >= $yearToSeconds) {
            $year = intval($elapsedTime / $yearToSeconds);
            $elapsedTime %= $yearToSeconds;

            $elapsedTimeDetails .= $year . ' yr. ';
        }

        if($elapsedTime >= $monthToSeconds) {
            $month = intval($elapsedTime / $monthToSeconds);
            $elapsedTime %= $monthToSeconds;

            $elapsedTimeDetails .= $month . ' mo. ';
        }

        if($elapsedTime >= $dayToSeconds) {
            $day = intval($elapsedTime / $dayToSeconds);
            $elapsedTime %= $dayToSeconds;

            $elapsedTimeDetails .= $day . ' d. ';
        }

        if($elapsedTime >= $hourToSeconds) {
            $hour = intval($elapsedTime / $hourToSeconds);
            $elapsedTime %= $hourToSeconds;

            $elapsedTimeDetails .= $hour . ' hr. ';
        }

        if($elapsedTime >= $minuteToSeconds) {
            $minute = intval($elapsedTime / $minuteToSeconds);
            $elapsedTime %= $minuteToSeconds;

            $elapsedTimeDetails .= $minute . ' min. ';
        }

        if($elapsedTime > 0) {
            $elapsedTimeDetails .= $elapsedTime . ' sec. ';
        }

        return $elapsedTimeDetails;
    }

    public function invalidateAllTokens($tokens) {
        foreach($tokens as $token) {
            \JWTAuth::manager()->invalidate(new \Tymon\JWTAuth\Token($token));
        }
    }

    public function getColumnNames($table) {
        $connection = config('database.default');
        $schema = config("database.connections.$connection.database");

        $sql = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA` = '$schema' AND `TABLE_NAME` = '$table'";

        $result = DB::select($sql);

        return count($result) > 0 ? array_column($result, 'COLUMN_NAME') : [];
    }

    public function deleteEmptyColumnValues($table, $data) {
        $tableColumns = $this->getColumnNames($table);

        if(count($tableColumns) == 0) return [];

        foreach($data as $key => $singleData) {
            if(!in_array($key, $tableColumns)) {
                unset($data[$key]);
            }
        }

        return $data;
    }
}