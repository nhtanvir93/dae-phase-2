<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnfIpAssignmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnf_ip_assignment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cnf_ip_assignment_id')->nullable()->constrained();
            $table->foreignId('product_type_id')->nullable()->constrained();
            $table->foreignId('product_id')->nullable()->constrained();
            $table->string('product_name')->nullable();
            $table->string('botanical_name')->nullable();
            $table->string('hs_code')->nullable();
            $table->double('quantity');
            $table->string('pack_size')->nullable();
            $table->string('variety')->nullable();
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
        Schema::table('cnf_ip_assignment_details', function (Blueprint $table){
            $table->dropForeign(['cnf_ip_assignment_id']);
            $table->dropForeign(['product_type_id']);
            $table->dropForeign(['product_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('cnf_ip_assignment_details');
    }
}
