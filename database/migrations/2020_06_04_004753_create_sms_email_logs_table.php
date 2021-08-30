<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsEmailLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_email_logs', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['SMS','EMAIL']);
            $table->foreignId('to')->nullable()->constrained('users');
            $table->text('message')->collation('utf8_general_ci');
            $table->enum('status',['SUCCESSFULL','FAILED']);
            $table->enum('event_type',['FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED']);
            $table->text('subject')->collation('utf8_general_ci');
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index('type');
            $table->index('status');
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
        Schema::table('sms_email_logs', function (Blueprint $table){
            $table->dropForeign(['to']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['type']);
            $table->dropIndex(['status']);
            $table->dropIndex(['event_type']);
        });
        Schema::dropIfExists('sms_email_logs');
    }
}
