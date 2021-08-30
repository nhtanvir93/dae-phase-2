<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsInTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn(['pi_status', 'ipn_status']);
            $table->double('transaction_amount');
            $table->json('echallan_details')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->boolean('pi_status')->nullable();
            $table->boolean('ipn_status')->nullable();
            $table->dropColumn(['transaction_amount', 'echallan_details']);
        });
    }
}
