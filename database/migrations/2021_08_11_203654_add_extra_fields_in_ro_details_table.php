<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsInRoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ro_details', function (Blueprint $table) {
            $table->string('ship_name__flight_no')->nullable();
            $table->date('rotation_no')->nullable();
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
            $table->dropColumn(['ship_name__flight_no', 'rotation_no']);
        });
    }
}
