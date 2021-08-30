<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSomeColumnsFromChallanTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('challan_transactions', function (Blueprint $table) {
            $table->dropColumn('auth_curl_info');
            $table->dropColumn('challan_curl_info');
            $table->dropColumn('device');
            $table->dropColumn('process_time');
            $table->dropColumn('pi_log_created');
            $table->dropColumn('ipn_log_created');

            $table->dropForeign('challan_transactions_deleted_by_foreign');
            $table->dropColumn('deleted_by');
            $table->dropColumn('deleted_at');
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
            $table->json('auth_curl_info')->nullable()->after('auth_response');
            $table->json('challan_curl_info')->nullable()->after('challan_response');
            $table->macAddress('device')->nullable()->after('visitor');
            $table->timestamp('process_time')->nullable()->after('device');
            $table->boolean('pi_log_created')->nullable()->after('process_time');
            $table->boolean('ipn_log_created')->nullable()->after('pi_log_created');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
        });
    }
}
