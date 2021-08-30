<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalConditionSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_condition_suggestions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_type_id')->constrained();
            $table->foreignId('product_type_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->longText('additional_condition');
            $table->foreignId('attachment_id')->constrained();
            $table->boolean('is_active')->default(true);
            $table->text('remarks')->nullable();
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
        Schema::table('additional_condition_suggestions', function(Blueprint $table) {
            $table->dropForeign(['app_type_id']);
            $table->dropForeign(['product_type_id']);
            $table->dropForeign(['product_id']);
            $table->dropForeign(['attachment_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('additional_condition_suggestions');
    }
}
