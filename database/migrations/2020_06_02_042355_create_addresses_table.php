<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('upazilla_id')->nullable()->constrained();
            $table->string('ward_or_union')->collation('utf8_general_ci')->nullable();
            $table->string('road_no_or_village')->collation('utf8_general_ci')->nullable();
            $table->string('bn_road_no_or_village')->collation('utf8_general_ci')->nullable();
            $table->string('post_office_and_code')->collation('utf8_general_ci')->nullable();
            $table->string('bn_post_office_and_code')->collation('utf8_general_ci')->nullable();
            $table->string('police_station')->collation('utf8_general_ci')->nullable();
            $table->string('bn_police_station')->collation('utf8_general_ci')->nullable();
            $table->string('description')->collation('utf8_general_ci')->nullable();
            $table->string('bn_description')->collation('utf8_general_ci')->nullable();
            $table->decimal('latitude',11,8)->nullable();
            $table->decimal('longitude',11,8)->nullable();
            $table->foreignId('country_id')->nullable()->constrained();
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
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign(['upazilla_id']);
            $table->dropForeign(['country_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('addresses');
    }
}
