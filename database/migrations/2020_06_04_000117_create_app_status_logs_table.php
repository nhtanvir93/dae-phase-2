<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppStatusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_status_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->foreignId('app_type_id')->nullable()->constrained();
            $table->unsignedInteger('stage');
            $table->foreignId('from_user_id')->nullable()->constrained('users');
            $table->foreignId('to_user_id')->nullable()->constrained('users');
            $table->unsignedInteger('elapsed_time')->nullable();
            $table->enum('status',['FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED']);
            $table->text('comment')->collation('utf8_general_ci')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_status_logs', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['from_user_id']);
            $table->dropForeign(['to_user_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['status']);
        });
        Schema::dropIfExists('app_status_logs');
    }
}
