<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttachmentAttributeFieldsInRoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ro_details', function (Blueprint $table) {
            $table->string('exporting_country_pc_no')->nullable();
            $table->date('pc_certification_date')->nullable();
            $table->string('bill_of_lading_info')->nullable();
            $table->string('bill_of_entry_info')->nullable();
            $table->string('lc_bank_branch_name')->nullable();
            $table->string('lc_no')->nullable();
            $table->date('lc_opening_date')->nullable();
            $table->string('igm_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ro_details', function (Blueprint $table) {
            $table->dropColumn([
                'exporting_country_pc_no', 'pc_certification_date', 'bill_of_lading_info', 'bill_of_entry_info',
                'lc_bank_branch_name', 'lc_no', 'lc_opening_date', 'igm_info'
            ]);
        });
    }
}
