<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsSuggestionForAcInProcessTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('process_tasks', function (Blueprint $table) {
            $table->boolean('is_suggestion_for_ac')->default(false);
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
            $table->dropColumn(['is_suggestion_for_ac']);
        });
    }
}
