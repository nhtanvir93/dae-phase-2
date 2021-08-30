<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsMandatoryForProfileColumnInConfigAttachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('config_attachments', function (Blueprint $table) {
            $table->boolean('is_mandatory_for_profile')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('config_attachments', function (Blueprint $table) {
            $table->dropColumn('is_mandatory_for_profile');
        });
    }
}
