<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInputFieldNameInAttachmentAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('config_attachment_attributes', function (Blueprint $table) {
            $table->string('input_field_name')->nullable();
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
            $table->dropColumn(['input_field_name']);
        });
    }
}
