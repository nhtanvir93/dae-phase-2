<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsForApplicationInOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->boolean('is_active_for_pc')->default(false)->nullable();
            $table->boolean('is_active_for_ro')->default(false)->nullable();
            $table->boolean('is_active_for_ip')->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->dropColumn(['is_active_for_pc', 'is_active_for_ro', 'is_active_for_ip']);
        });
    }
}
