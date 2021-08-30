<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->foreignId('attachment_id')->nullable()->constrained();
            $table->boolean('is_processed')->default(false);
            $table->boolean('is_valid')->default(false)->nullable();
            $table->foreignId('processed_by')->nullable()->constrained('users');
            $table->text('comment')->collation('utf8_general_ci')->nullable();
            $table->dateTime('process_datetime')->nullable();
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
        Schema::table('app_attachments', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['attachment_id']);
            $table->dropForeign(['processed_by']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('app_attachments');
    }
}
