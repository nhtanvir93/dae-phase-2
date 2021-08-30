<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('process_task_id')->constrained();
            $table->string('task_field_name');
            $table->string('label');
            $table->enum('input_type',['DATE','NUMBER','TEXT', 'LONG_TEXT']);
            $table->unsignedInteger('level')->nullable();
            $table->longText('dropdown_value_query')->nullable();
            $table->json('dropdown_value_json')->nullable();
            $table->json('loading_dependency_json')->nullable();
            $table->text('loading_dependency_query')->nullable();
            $table->json('stage_level_json')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->unique(['process_task_id','label']);
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
            $table->dropForeign(['process_task_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('task_fields');
    }
}
