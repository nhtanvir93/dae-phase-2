<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveAndAddChallanColumnFromPaymentsAndToApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $applicationTable) {
            // Check is_challan_done column exists
            if (Schema::hasColumn('payments', 'is_challan_done')) {
                Schema::table('payments', function (Blueprint $paymentTable) {
                    $paymentTable->dropColumn('is_challan_done');
                });
            }

            $applicationTable->boolean('is_challan_done')->nullable()->default(false)->after('certificate_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $applicationTable) {
            if (Schema::hasColumn('applications', 'is_challan_done')) {
                $applicationTable->dropColumn('is_challan_done');
            }

            if (!Schema::hasColumn('payments', 'is_challan_done')) {
                Schema::table('payments', function (Blueprint $paymentTable) {
                    $paymentTable->boolean('is_challan_done')->nullable()->default(false)->after('transaction_id');
                });
            }
        });
    }
}
