<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigFeeSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_fee_setups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_type_id')->nullable()->constrained();
            $table->foreignId('product_type_id')->nullable()->constrained();
            $table->unsignedDouble('quantity_from');
            $table->unsignedDouble('quantity_to')->nullable();
            $table->unsignedDouble('price_per_quantity')->nullable();
            $table->unsignedDouble('quantity_per_price')->nullable();
            $table->unsignedDouble('min_payable')->nullable();
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
        Schema::table('config_fee_setups', function (Blueprint $table) {
            $table->dropForeign(['app_type_id']);
            $table->dropForeign(['product_type_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('config_fee_setups');
    }
}
