<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->nullable()->constrained();
            $table->foreignId('attachment_id')->nullable()->constrained();
            $table->foreignId('bank_branch_id')->nullable()->constrained();
            $table->string('chalan_no');
            $table->double('amount');
            $table->date('issue_date');
            $table->text('remarks')->collation('utf8_general_ci')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->unique(['bank_branch_id','chalan_no','issue_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_invoices', function (Blueprint $table){
            $table->dropForeign(['application_id']);
            $table->dropForeign(['attachment_id']);
            $table->dropForeign(['bank_branch_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('app_invoices');
    }
}
