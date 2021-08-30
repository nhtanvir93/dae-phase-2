<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtensionAttachmentIdInRoDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ro_details', function (Blueprint $table) {
            $table->foreignId('extension_attachment_id')->nullable()->constrained('attachments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ro_details', function (Blueprint $table) {
            $table->dropForeign(['extension_attachment_id']);
            $table->dropColumn(['extension_attachment_id']);
        });
    }
}
