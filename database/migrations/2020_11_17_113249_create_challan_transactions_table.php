<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallanTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challan_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('application_id')->nullable();
            $table->json('auth_payload')->nullable();
            $table->json('auth_response')->nullable();
            $table->json('auth_curl_info')->nullable();
            $table->json('challan_payload')->nullable();
            $table->json('challan_response')->nullable();
            $table->json('challan_curl_info')->nullable();
            $table->boolean('auth_status')->nullable();
            $table->boolean('challan_status')->nullable();
            $table->string('auth_status_code', 10)->nullable();
            $table->string('challan_status_code', 10)->nullable();
            $table->ipAddress('visitor')->nullable();
            $table->macAddress('device')->nullable();
            $table->timestamp('process_time')->nullable();
            $table->boolean('pi_log_created')->nullable();
            $table->boolean('ipn_log_created')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challan_transactions');
    }
}
