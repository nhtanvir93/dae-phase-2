<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddNewEventTypeInSmsEmailLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            "ALTER TABLE sms_email_logs 
                 MODIFY COLUMN event_type 
                  ENUM('FORWARDED', 'BACKWARDED', 'APPROVED', 'REJECTED', 'CANCELLED', 'RECHECKED', 'BEFORE_INSPECTION', 'REGISTRATION_CONFIRMATION')");
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
                  ENUM('FORWARDED', 'BACKWARDED', 'APPROVED', 'REJECTED', 'CANCELLED', 'RECHECKED', 'BEFORE_INSPECTION')");
    }
}
