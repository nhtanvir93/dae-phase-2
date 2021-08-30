<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePcDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pc_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->string('exporter_name');
            $table->text('exporter_address')->collation('utf8_general_ci');
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->text('contact_person_details')->collation('utf8_general_ci')->nullable();
            $table->foreignId('means_of_transport_id')->nullable()->constrained('config_means_of_transports');
            $table->foreignId('exit_organization_id')->nullable()->constrained('organizations');
            $table->foreignId('purpose_id')->nullable()->constrained('config_purposes');
            $table->string('other_purpose_name')->nullable();
            $table->string('consignee_name')->nullable();
            $table->text('consignee_address')->collation('utf8_general_ci')->nullable();
            $table->foreignId('origin_country_id')->nullable()->constrained('countries');
            $table->string('origin_country_name')->nullable();
            $table->string('contract_no',255)->nullable();
            $table->date('contract_date')->nullable();
            $table->foreignId('exporting_country_id')->nullable()->constrained('countries');
            $table->string('exporting_country_name')->nullable();
            $table->foreignId('entry_organization_id')->nullable()->constrained('organizations');
            $table->string('entry_port')->nullable();
            $table->date('shipment_date')->nullable();
            $table->enum('treatment_type',['FUMIGATION','OTHER','NO']);
            $table->unsignedInteger('fumigation_total_tablets')->nullable();
            $table->double('fumigation_per_tablet_charge')->nullable();
            $table->text('treatment_details')->collation('utf8_general_ci')->nullable();
            $table->text('distinguishing_mark')->collation('utf8_general_ci')->nullable();
            $table->text('godown_address')->nullable();
            $table->text('inspector_additional_declaration')->nullable();
            $table->date('inspection_date')->nullable();
            $table->date('treatment_date')->nullable();
            $table->text('chemical_concentration')->nullable();
            $table->text('duration')->nullable();
            $table->text('additional_declaration')->nullable();
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
        Schema::table('pc_details', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['means_of_transport_id']);
            $table->dropForeign(['exit_organization_id']);
            $table->dropForeign(['purpose_id']);
            $table->dropForeign(['origin_country_id']);
            $table->dropForeign(['exporting_country_id']);
            $table->dropForeign(['entry_organization_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('pc_details');
    }
}
