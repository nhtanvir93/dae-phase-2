<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateStatusInAppStatusLogsTable extends Migration
{
    public function up()
    {
        Schema::table('app_status_logs', function () {
            DB::statement("ALTER TABLE app_status_logs MODIFY COLUMN status ENUM('FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED','TRANSFERRED') ");
        });
    }

    public function down()
    {
        Schema::table('app_status_logs', function () {
            DB::statement("ALTER TABLE app_status_logs MODIFY COLUMN status ENUM('FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED') ");
        });
    }
}
