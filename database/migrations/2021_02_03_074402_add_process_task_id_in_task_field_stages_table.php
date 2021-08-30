<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProcessTaskIdInTaskFieldStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_field_stages', function (Blueprint $table) {
            $table->foreignId('process_task_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_field_stages', function (Blueprint $table) {
            $table->dropForeign(['process_task_id']);
            $table->dropColumn(['process_task_id']);
        });
    }
}
