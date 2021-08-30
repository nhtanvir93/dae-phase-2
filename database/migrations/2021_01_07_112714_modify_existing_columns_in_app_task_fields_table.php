<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyExistingColumnsInAppTaskFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_task_fields', function (Blueprint $table) {
            $table->string('attachment_title')->nullable();
            $table->foreignId('attachment_id')->nullable()->constrained();
        });

        DB::statement(
            "ALTER TABLE task_fields 
                 MODIFY COLUMN input_type 
                  ENUM('DATE','NUMBER','TEXT','LONG_TEXT','MULTI_DATE','MULTI_NUMBER','MULTI_TEXT','MULTI_LONG_TEXT','FILE','COMMENT','SELECT','MULTI_SELECT','INDIVIDUAL_LONG_TEXT') ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_task_fields', function (Blueprint $table) {
            $table->dropColumn(['attachment_title']);
            $table->dropForeign(['attachment_id']);
            $table->dropColumn(['attachment_id']);
        });

        DB::statement(
            "ALTER TABLE task_fields 
                 MODIFY COLUMN input_type 
                  ENUM('DATE','NUMBER','TEXT','LONG_TEXT','FILE','SELECT','SCRUTINIZE_RADIO','INDIVIDUAL_LONG_TEXT',
                  'MULTI_LONG_TEXT', 'COMMENT') ");
    }
}
