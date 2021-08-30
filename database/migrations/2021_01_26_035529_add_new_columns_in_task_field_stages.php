<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsInTaskFieldStages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_field_stages', function (Blueprint $table) {
            $table->boolean('is_required');
            $table->unsignedInteger('forwarding_user_stage_level')->nullable();
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
            $table->dropColumn(['is_required', 'forwarding_user_stage_level']);
        });
    }
}
