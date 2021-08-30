<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_flow_id')->constrained();
            $table->foreignId('stage_id')->constrained();
            $table->unsignedInteger('level')->nullable();
            $table->boolean('is_decision_stage')->default(false);
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
        Schema::table('stage_flows', function (Blueprint $table){
            $table->dropForeign(['process_flow_id']);
            $table->dropForeign(['stage_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('stage_flows');
    }
}
