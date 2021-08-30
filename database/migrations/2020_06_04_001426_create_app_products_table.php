<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->foreignId('product_type_id')->nullable()->constrained();
            $table->foreignId('product_id')->nullable()->constrained();
            $table->string('product_name')->nullable();
            $table->string('botanical_name')->nullable();
            $table->string('hs_code')->nullable();
            $table->double('quantity');
            $table->string('pack_size')->nullable();
            $table->string('variety')->nullable();
            $table->foreignId('photo_attachment_id')->nullable()->constrained('attachments');
            $table->foreignId('entry_organization_id')->nullable()->constrained('organizations');
            $table->string('consignee_name')->nullable();
            $table->string('consignee_contact_no',20)->nullable();
            $table->text('consignee_address')->collation('utf8_general_ci')->nullable();
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
        Schema::table('app_products', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['product_type_id']);
            $table->dropForeign(['product_id']);
            $table->dropForeign(['photo_attachment_id']);
            $table->dropForeign(['entry_organization_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('app_products');
    }
}
