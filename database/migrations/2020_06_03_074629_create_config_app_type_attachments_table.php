<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigAppTypeAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_app_type_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_type_id')->nullable()->constrained();
            $table->foreignId('config_attachment_id')->nullable()->constrained();
            $table->unsignedInteger('position')->nullable();
            $table->boolean('is_required')->nullable();
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
        Schema::table('config_app_type_attachments', function (Blueprint $table) {
            $table->dropForeign(['app_type_id']);
            $table->dropForeign(['config_attachment_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('config_app_type_attachments');
    }
}
