<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInvoiceFieldsInPcDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pc_details', function (Blueprint $table) {
            $table->string('proforma_invoice_no')->nullable();
            $table->date('proforma_invoice_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pc_details', function (Blueprint $table) {
            $table->dropColumn(['proforma_invoice_no', 'proforma_invoice_date']);
        });
    }
}
