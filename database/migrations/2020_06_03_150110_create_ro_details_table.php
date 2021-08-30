<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ro_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->foreignId('origin_country_id')->nullable()->constrained('countries');
            $table->string('origin_country_name')->nullable();
            $table->foreignId('exporting_country_id')->nullable()->constrained('countries');
            $table->string('exporting_country_name')->nullable();
            $table->string('consignee_name');
            $table->text('consignee_address')->collation('utf8_general_ci');
            $table->string('cnf_firm_name');
            $table->string('cnf_representative_name');
            $table->string('contact_person_card_licence_no')->nullable();
            $table->string('contact_person_phone',20);
            $table->string('contact_person_email');
            $table->text('contact_person_details')->collation('utf8_general_ci');
            $table->foreignId('purpose_id')->nullable()->constrained('config_purposes');
            $table->string('other_purpose_name')->nullable();
            $table->boolean('has_treatment')->default(false);
            $table->boolean('has_fumigation')->default(false);
            $table->double('chemical_charge')->nullable();
            $table->double('service_charge')->nullable();
            $table->text('treatment_details')->collation('utf8_general_ci')->nullable();
            $table->date('inspection_date')->nullable();
            $table->date('treatment_date')->nullable();
            $table->text('inspection_details')->collation('utf8_general_ci')->nullable();
            $table->text('chemical_concentration')->collation('utf8_general_ci')->nullable();
            $table->text('exposer_temperature_duration')->collation('utf8_general_ci')->nullable();
            $table->foreignId('memo_id')->nullable()->constrained();
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
        Schema::table('ro_details', function (Blueprint $table){
            $table->dropForeign(['origin_country_id']);
            $table->dropForeign(['exporting_country_id']);
            $table->dropForeign(['purpose_id']);
            $table->dropForeign(['memo_id']);
            $table->dropForeign(['application_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('ro_details');
    }
}
