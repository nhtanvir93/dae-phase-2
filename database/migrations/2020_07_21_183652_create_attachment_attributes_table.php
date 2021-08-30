<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained();
            $table->foreignId('config_attachment_id')->constrained();
            $table->foreignId('config_attachment_attribute_id')->constrained();
            $table->string('value_text')->nullable();
            $table->float('value_no')->nullable();
            $table->date('value_date')->nullable();
            $table->text('value_long_text')->nullable();
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
        Schema::table('attachment_attributes', function(Blueprint $table) {
            $table->dropForeign(['application_id']);
            $table->dropForeign(['config_attachment_id']);
            $table->dropForeign(['config_attachment_attribute_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('attachment_attributes');
    }
}
