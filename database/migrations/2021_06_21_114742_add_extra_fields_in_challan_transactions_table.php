<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsInChallanTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('challan_transactions', function (Blueprint $table) {
            $table->dropColumn(['application_id', 'auth_status', 'challan_status']);
            $table->string('request_id');
            $table->string('ekpay_transaction_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('challan_transactions', function (Blueprint $table) {
            $table->foreignId('application_id');
            $table->boolean('auth_status')->nullable();
            $table->boolean('challan_status')->nullable();
            $table->dropColumn(['request_id']);
            $table->dropColumn(['ekpay_transaction_id']);
        });
    }
}
