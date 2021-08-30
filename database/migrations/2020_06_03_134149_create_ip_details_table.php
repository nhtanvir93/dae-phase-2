<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->string('consignee_name');
            $table->text('consignee_address')->collation('utf8_general_ci');
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_phone',20)->nullable();
            $table->string('contact_person_email')->nullable();
            $table->text('contact_person_details')->collation('utf8_general_ci')->nullable();
            $table->foreignId('origin_country_id')->nullable()->constrained('countries');
            $table->string('origin_country_name')->nullable();
            $table->string('consignor_name')->nullable();
            $table->text('consignor_address')->collation('utf8_general_ci')->nullable();
            $table->foreignId('exporting_country_id')->nullable()->constrained('countries');
            $table->string('exporting_country_name')->nullable();
            $table->date('arrival_date')->nullable();
            $table->foreignId('means_of_transport_id')->nullable()->constrained('config_means_of_transports');
            $table->foreignId('entry_organization_id')->nullable()->constrained('organizations');
            $table->foreignId('product_category_id')->nullable()->constrained();
            $table->foreignId('purpose_id')->nullable()->constrained('config_purposes');
            $table->string('other_product_category_name')->nullable();
            $table->string('other_purpose_name')->nullable();
            $table->foreignId('variety_id')->nullable()->constrained();
            $table->string('other_variety_name')->nullable();
            $table->string('locality')->nullable();
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
        Schema::table('ip_details', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['origin_country_id']);
            $table->dropForeign(['exporting_country_id']);
            $table->dropForeign(['means_of_transport_id']);
            $table->dropForeign(['entry_organization_id']);
            $table->dropForeign(['product_category_id']);
            $table->dropForeign(['purpose_id']);
            $table->dropForeign(['variety_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('ip_details');
    }
}
