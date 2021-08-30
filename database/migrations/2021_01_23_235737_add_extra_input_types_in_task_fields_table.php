<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddExtraInputTypesInTaskFieldsTable extends Migration
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
                  ENUM('BOOLEAN','COMMENT','DATE','FILE','INDIVIDUAL_LONG_TEXT','IS_INSPECTION_ENABLED','IS_LAB_TEST_ENABLED','LONG_TEXT','MULTI_DATE','MULTI_LONG_TEXT','MULTI_NUMBER','MULTI_SELECT','MULTI_TEXT','NUMBER','SELECT','STAGE_USER','TEXT','MANUAL_CHALAN') ");
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
                  ENUM('DATE','NUMBER','TEXT','LONG_TEXT','FILE','SELECT','INDIVIDUAL_LONG_TEXT','MULTI_LONG_TEXT', 'COMMENT')");
    }
}
