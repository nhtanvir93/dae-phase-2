<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidForInTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->enum('paid_for',
                [
                    'SERVICE_FEE',
                    'APPLICATION_SERVICE_FEE',
                    'VAT_SERVICE_FEE',
                    'APPLICATION_VAT_SERVICE_FEE'
                ]
            );
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
            $table->dropColumn(['paid_for']);
        });
    }
}
