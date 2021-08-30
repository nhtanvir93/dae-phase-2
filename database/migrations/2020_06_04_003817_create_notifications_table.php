<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->enum('event_type',['FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED']);
            $table->text('message')->collation('utf8_general_ci');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->boolean('is_read')->default(false);
            $table->boolean('is_cleared')->default(false);
            $table->dateTime('read_time')->nullable();
            $table->dateTime('clear_time')->nullable();
            $table->text('api')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index('event_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['application_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['event_type']);
        });
        Schema::dropIfExists('notifications');
    }
}
