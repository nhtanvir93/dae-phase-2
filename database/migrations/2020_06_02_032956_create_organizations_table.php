<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bn_name')->collation('utf8_general_ci')->nullable();
            $table->enum('type',['HQ','PORT'])->nullable();
            $table->foreignId('port_category_id')->nullable()->constrained();
            $table->foreignId('port_type_id')->nullable()->constrained();
            $table->foreignId('district_id')->nullable()->constrained();
            $table->text('custom_house')->collation('utf8_general_ci')->nullable();
            $table->string('phone','20')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
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
        Schema::table('organizations', function(Blueprint $table) {
            $table->dropForeign(['port_category_id']);
            $table->dropForeign(['port_type_id']);
            $table->dropForeign(['district_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('organizations');
    }
}
