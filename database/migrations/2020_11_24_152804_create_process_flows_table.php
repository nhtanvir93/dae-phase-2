<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_type_id')->constrained();
            $table->foreignId('organization_id')->constrained();
            $table->boolean('is_active')->default(false);
            $table->date('activation_date')->nullable();
            $table->date('deactivation_date')->nullable();
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
        Schema::table('process_flows', function (Blueprint $table){
            $table->dropForeign(['app_type_id']);
            $table->dropForeign(['organization_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('process_flows');
    }
}
