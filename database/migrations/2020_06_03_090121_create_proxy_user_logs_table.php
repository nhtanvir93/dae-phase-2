<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProxyUserLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proxy_user_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('original_user_id')->nullable()->constrained('users');
            $table->foreignId('proxy_user_id')->nullable()->constrained('users');
            $table->text('reason')->collation('utf8_general_ci');
            $table->date('from');
            $table->date('to')->nullable();
            $table->foreignId('attachment_id')->nullable()->constrained()->nullable();
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
        Schema::table('proxy_user_logs', function (Blueprint $table) {
            $table->dropForeign(['original_user_id']);
            $table->dropForeign(['proxy_user_id']);
            $table->dropForeign(['attachment_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('proxy_user_logs');
    }
}
