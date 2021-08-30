<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->enum('type',['APPLICATION','REGISTRATION','RENEWAL_REGISTRATION']);
            $table->double('amount');
            $table->foreignId('invoice_id')->nullable()->constrained('app_invoices');
            $table->foreignId('transaction_id')->nullable()->constrained();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['invoice_id']);
            $table->dropForeign(['transaction_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['type']);
        });
        Schema::dropIfExists('payments');
    }
}
