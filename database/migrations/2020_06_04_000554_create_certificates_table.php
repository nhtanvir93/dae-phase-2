<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_type_id')->nullable()->constrained();
            $table->string('certificate_no');
            $table->date('issue_date');
            $table->foreignId('attachment_id')->nullable()->constrained();
            $table->text('remarks')->collation('utf8_general_ci')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index(['app_type_id','certificate_no']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certificates', function (Blueprint $table){
            $table->dropForeign(['app_type_id']);
            $table->dropForeign(['attachment_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['app_type_id','certificate_no']);
        });
        Schema::dropIfExists('certificates');
    }
}
