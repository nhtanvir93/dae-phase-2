<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageButtonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_buttons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_flow_id')->constrained();
            $table->unsignedInteger('stage_level');
            $table->foreignId('process_button_id')->constrained();
            $table->string('shown_for_role_ids')->nullable();
            $table->unsignedInteger('alignment_position')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stage_buttons', function (Blueprint $table){
            $table->dropForeign(['process_flow_id']);
            $table->dropForeign(['process_button_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('stage_buttons');
    }
}
