<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class UpdateInputTypeFieldsInTaskFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            "ALTER TABLE task_fields 
                 MODIFY COLUMN input_type 
                  ENUM('DATE','NUMBER','TEXT','LONG_TEXT','FILE','SELECT','SCRUTINIZE_RADIO','INDIVIDUAL_LONG_TEXT',
                  'MULTI_LONG_TEXT', 'COMMENT') ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(
            "ALTER TABLE task_fields 
                 MODIFY COLUMN input_type 
                  ENUM('DATE','NUMBER','TEXT','LONG_TEXT') ");
    }
}
