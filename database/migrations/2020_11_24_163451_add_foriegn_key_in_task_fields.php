<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForiegnKeyInTaskFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_fields', function (Blueprint $table) {
            $table->foreignId('dependent_task_field_id')->nullable()->constrained('task_fields');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_fields', function (Blueprint $table){
            $table->dropForeign(['dependent_task_field_id']);
        });
    }
}
