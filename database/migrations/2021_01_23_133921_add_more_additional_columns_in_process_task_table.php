<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreAdditionalColumnsInProcessTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_tasks', function (Blueprint $table) {
            $table->boolean('is_addon')->default(false);
            $table->boolean('is_inspection_sms')->default(false);
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
            $table->dropColumn(['is_addon', 'is_inspection_sms']);
        });
    }
}
