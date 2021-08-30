<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPalletRelatedColumnsInApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn(['pallet_fee']);
            $table->unsignedInteger('total_pallet')->nullable();
            $table->decimal('per_pallet_charge','6','2')->nullable();
            $table->decimal('total_pallet_fee','12','2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->decimal('pallet_fee','12','2')->nullable();
            $table->dropColumn(['total_pallet', 'per_pallet_charge', 'total_pallet_fee']);
        });
    }
}
