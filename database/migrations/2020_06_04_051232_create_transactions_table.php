<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_transaction_id');
            $table->unsignedInteger('order_no');
            $table->string('secure_token')->nullable();
            $table->unsignedInteger('msg_code')->nullable();
            $table->text('msg_details')->collation('utf8_general_ci')->nullable();
            $table->dateTime('payment_response_timestamp')->nullable();
            $table->text('ipn_info')->nullable();
            $table->string('digital_sign')->nullable();
            $table->text('order_description')->collation('utf8_general_ci')->nullable();
            $table->text('remarks')->collation('utf8_general_ci')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_mobile',20)->nullable();
            $table->text('customer_mail_address')->collation('utf8_general_ci')->nullable();
            $table->double('transaction_amount')->nullable();
            $table->string('ekpay_transaction_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('pi_transaction_id')->nullable();
            $table->double('pi_charge')->nullable();
            $table->double('ekpay_charge')->nullable();
            $table->double('pi_discount')->nullable();
            $table->double('discount')->nullable();
            $table->double('promo_discount')->nullable();
            $table->double('total_service_charge')->nullable();
            $table->double('total_payable_amount')->nullable();
            $table->dateTime('payment_timestamp')->nullable();
            $table->string('pi_name')->nullable();
            $table->string('pi_type')->nullable();
            $table->string('pi_number')->nullable();
            $table->string('pi_gateway')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->timestamps();
            $table->date('created_date');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index(['order_no','created_date']);
            $table->index(['ekpay_transaction_id','created_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table){
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['order_no','created_date']);
            $table->dropIndex(['ekpay_transaction_id','created_date']);
        });
        Schema::dropIfExists('transactions');
    }
}
