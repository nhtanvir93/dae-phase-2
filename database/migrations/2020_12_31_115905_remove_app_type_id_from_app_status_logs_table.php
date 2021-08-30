<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveAppTypeIdFromAppStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_status_logs', function (Blueprint $table) {
            if (Schema::hasColumn('app_status_logs', 'app_type_id')) {
                $table->dropForeign(['app_type_id']);
                $table->dropColumn(['app_type_id']);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_status_logs', function (Blueprint $table) {
            //
        });
    }
}
