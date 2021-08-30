<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraStatusInSmsEmailLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sms_email_logs', function (Blueprint $table) {
            $table->foreignId('application_id')->nullable()->constrained();
            $table->json('request')->nullable();
            $table->json('response')->nullable();
        });

        DB::statement(
            "ALTER TABLE sms_email_logs 
                 MODIFY COLUMN event_type 
                  ENUM('FORWARDED', 'BACKWARDED', 'APPROVED', 'REJECTED', 'CANCELLED', 'RECHECKED', 'BEFORE_INSPECTION')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(
            "ALTER TABLE sms_email_logs 
                 MODIFY COLUMN event_type 
                  ENUM('FORWARDED', 'BACKWARDED', 'APPROVED', 'REJECTED', 'CANCELLED', 'RECHECKED')");

        Schema::table('sms_email_logs', function (Blueprint $table) {
            $table->dropForeign(['application_id']);
            $table->dropColumn(['application_id', 'request', 'response']);
        });

    }
}
