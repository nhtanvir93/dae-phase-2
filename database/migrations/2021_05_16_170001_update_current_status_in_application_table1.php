<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateCurrentStatusInApplicationTable1 extends Migration
{
    public function up()
    {
        DB::statement("ALTER TABLE applications MODIFY COLUMN current_status ENUM('NOT_PAID','FORWARDED','BACKWARDED','APPROVED','REJECTED',
              'RECHECKED','CANCELLED','PAID','TRANSFERRED') ");
    }

    public function down()
    {
        DB::statement("ALTER TABLE applications MODIFY COLUMN current_status ENUM('NOT_PAID','FORWARDED','BACKWARDED','APPROVED','REJECTED',
            'RECHECKED','CANCELLED','PAID') ");
    }
}
