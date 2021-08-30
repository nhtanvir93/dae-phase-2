<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ap_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->string('contact_person_name');
            $table->string('contact_person_phone',20);
            $table->string('contact_person_email');
            $table->text('contact_person_details')->collation('utf8_general_ci');
            $table->string('shipping_agent_name');
            $table->text('shipping_agent_address')->collation('utf8_general_ci');
            $table->string('ship_owner_name');
            $table->string('vessel_name');
            $table->date('expected_arrival_date');
            $table->string('shipment_port');
            $table->text('cargo_quantity_and_nature')->collation('utf8_general_ci');
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
        Schema::table('ap_details', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('ap_details');
    }
}
