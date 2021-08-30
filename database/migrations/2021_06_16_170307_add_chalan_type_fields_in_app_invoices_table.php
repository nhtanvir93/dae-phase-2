<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChalanTypeFieldsInAppInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_invoices', function (Blueprint $table) {
            $table->enum('chalan_type',['APPLICATION_FEE', 'VAT']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_invoices', function (Blueprint $table) {
            $table->dropColumn(['chalan_type']);
        });
    }
}
