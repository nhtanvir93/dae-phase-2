<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigAttachmentAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_attachment_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('config_attachment_id')->nullable()->constrained();
            $table->enum('type',['DATE','NUMBER','TEXT', 'LONG_TEXT']);
            $table->string('label')->nullable();
            $table->unsignedInteger('position')->nullable();
            $table->boolean('is_mandatory')->default(false);
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('config_attachment_attributes', function (Blueprint $table) {
            $table->dropForeign(['config_attachment_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['type']);
        });
        Schema::dropIfExists('config_attachment_attributes');
    }
}
