<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessStageRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_stage_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_flow_id')->constrained();
            $table->unsignedInteger('stage_level');
            $table->foreignId('role_id')->nullable()->constrained();
            $table->unsignedInteger('user_from_stage')->nullable();
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
        Schema::table('process_stage_roles', function (Blueprint $table){
            $table->dropForeign(['process_flow_id']);
            $table->dropForeign(['role_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('process_stage_roles');
    }
}
