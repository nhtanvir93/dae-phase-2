<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('er_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->string('applicant_name');
            $table->string('bn_applicant_name')->nullable();
            $table->string('father_name');
            $table->string('bn_father_name')->nullable();
            $table->string('mother_name');
            $table->string('bn_mother_name')->nullable();
            $table->date('birth_date');
            $table->foreignId('mailing_address_id')->nullable()->constrained('addresses');
            $table->foreignId('permanent_address_id')->nullable()->constrained('addresses');
            $table->string('business_center_name');
            $table->string('bn_business_center_name')->nullable();
            $table->foreignId('business_center_address_id')->nullable()->constrained('addresses');
            $table->string('telephone',20);
            $table->string('mobile',20);
            $table->string('email');
            $table->string('fax')->nullable();
            $table->string('nid')->nullable();
            $table->string('etin')->nullable();
            $table->string('company_reg_no')->nullable();
            $table->string('bn_company_reg_no')->nullable();
            $table->string('trade_licence_no');
            $table->string('vat_registration_no');
            $table->string('erc_no');
            $table->text('sister_companies_names')->collation('utf8_general_ci')->nullable();
            $table->text('bn_sister_companies_names')->collation('utf8_general_ci')->nullable();
            $table->text('sister_companies_registration_nos')->collation('utf8_general_ci')->nullable();
            $table->text('bn_sister_companies_registration_nos')->collation('utf8_general_ci')->nullable();
            $table->text('sister_companies_vat_registration_nos')->collation('utf8_general_ci')->nullable();
            $table->text('bn_sister_companies_vat_registration_nos')->collation('utf8_general_ci')->nullable();
            $table->float('export_experience_in_years');
            $table->text('exportable_items_list')->collation('utf8_general_ci');
            $table->boolean('is_bpea')->default(false);
            $table->date('member_date');
            $table->string('member_no');
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
        Schema::table('er_details', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['mailing_address_id']);
            $table->dropForeign(['permanent_address_id']);
            $table->dropForeign(['business_center_address_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('er_details');
    }
}
