<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSomeFieldsToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();

            $columns = [
                'merchant_transaction_id','secure_token','msg_code','msg_details','payment_response_timestamp',
                'ipn_info','digital_sign','order_description','remarks','customer_name','customer_email',
                'customer_mobile','customer_mail_address','transaction_amount',
                'currency','pi_transaction_id','pi_charge','ekpay_charge','pi_discount','discount','promo_discount',
                'total_service_charge','total_payable_amount','payment_timestamp','pi_name','pi_type','pi_number',
                'pi_gateway','card_holder_name'
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('transactions', $column)) {
                    $table->dropColumn($column);
                }
            }

            $table->unsignedBigInteger('application_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            if (!Schema::hasColumn('transactions', 'order_no')) {
                $table->unsignedBigInteger('order_no')->nullable();
            }
            if (!Schema::hasColumn('transactions', 'ekpay_transaction_id')) {
                $table->string('ekpay_transaction_id')->nullable();
            }
            $table->json('pi_payload')->nullable();
            $table->json('pi_response')->nullable();
            $table->boolean('pi_status')->nullable();
            $table->string('pi_code', 10)->nullable();
            $table->text('pi_message')->nullable();
            $table->text('pi_token')->nullable();
            $table->json('ipn_response')->nullable();
            $table->text('ipn_url')->nullable();
            $table->boolean('ipn_status')->nullable();
            $table->string('ipn_code', 10)->nullable();
            $table->text('ipn_message')->nullable();
            $table->ipAddress('visitor')->nullable();
            $table->macAddress('device')->nullable();
            $table->ipAddress('white_list_ip')->nullable();
            $table->timestamp('process_time')->nullable();
            $table->boolean('pi_log_created')->nullable();
            $table->boolean('ipn_log_created')->nullable();

            Schema::enableForeignKeyConstraints();
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
            $columns = [
                'application_id','user_id','pi_payload','pi_response','pi_status','pi_code',
                'pi_message','pi_token','ipn_response','ipn_url','ipn_status','ipn_code',
                'ipn_message','visitor','device','white_list_ip','process_time','pi_log_created',
                'ipn_log_created','ekpay_transaction_id','order_no'
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('transactions', $column)) {
                    $table->dropColumn($column);
                }
            }

            $table->string('merchant_transaction_id');
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
        });
    }
}
