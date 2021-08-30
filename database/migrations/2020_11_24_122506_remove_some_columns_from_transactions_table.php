<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSomeColumnsFromTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('application_id');
            $table->dropColumn('user_id');
            $table->dropColumn('device');
            $table->dropColumn('process_time');
            $table->dropColumn('pi_log_created');
            $table->dropColumn('ipn_log_created');
            $table->dropForeign('transactions_deleted_by_foreign');
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
        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('application_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->macAddress('device')->nullable();
            $table->timestamp('process_time')->nullable();
            $table->boolean('pi_log_created')->nullable();
            $table->boolean('ipn_log_created')->nullable();
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
        });
    }
}
