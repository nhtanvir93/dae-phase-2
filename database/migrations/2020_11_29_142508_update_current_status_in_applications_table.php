<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateCurrentStatusInApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE applications MODIFY COLUMN current_status ENUM('NOT_PAID','FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED','PAID') ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE applications MODIFY COLUMN current_status ENUM('NOT_PAID','FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED') ");
    }
}
