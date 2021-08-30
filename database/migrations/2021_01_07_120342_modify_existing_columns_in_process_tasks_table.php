<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyExistingColumnsInProcessTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_tasks', function (Blueprint $table) {
            $table->boolean('is_scrutinize_task')->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('process_tasks', function (Blueprint $table) {
            $table->dropColumn(['is_scrutinize_task']);
        });
    }
}
