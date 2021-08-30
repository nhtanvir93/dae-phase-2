<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConfigAttachmentIdInAppAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_attachments', function (Blueprint $table) {
            $table->foreignId('config_attachment_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_attachments', function (Blueprint $table) {
            $table->dropForeign(['config_attachment_id']);
        });
    }
}
