<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('app_type_id')->nullable()->constrained();
            $table->nullableMorphs('applicationable');
            $table->foreignId('applicant_id')->nullable()->constrained('users');
            $table->foreignId('organization_id')->nullable()->constrained();
            $table->string('form_id')->nullable();
            $table->unsignedInteger('current_stage');
            $table->foreignId('app_holding_user_id')->nullable()->constrained('users');
            $table->enum('current_status',['NOT_PAID','FORWARDED','BACKWARDED','APPROVED','REJECTED','RECHECKED','CANCELLED']);
            $table->double('product_fee')->default(0);
            $table->double('fumigation_fee')->default(0);
            $table->double('service_charge')->default(0);
            $table->double('total_fee')->default(0);
            $table->double('app_payable')->default(0);
            $table->double('paid_payment')->default(0);
            $table->double('service_charge_payable')->default(0);
            $table->double('vat_payable')->default(0);
            $table->double('tax_payable')->default(0);
            $table->boolean('is_paid')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->boolean('is_cancelled')->default(false);
            $table->foreignId('approved_by')->nullable()->constrained('users');
            $table->foreignId('rejected_by')->nullable()->constrained('users');
            $table->text('last_comment')->collation('utf8_general_ci')->nullable();
            $table->date('app_date');
            $table->date('payment_date')->nullable();
            $table->text('remarks')->collation('utf8_general_ci')->nullable();
            $table->string('certificate_no')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
            $table->index('applicationable_id');
            $table->index('form_id');
            $table->index('current_status');
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
        Schema::table('applications', function (Blueprint $table){
            $table->dropForeign(['app_type_id']);
            $table->dropForeign(['applicant_id']);
            $table->dropForeign(['organization_id']);
            $table->dropForeign(['app_holding_user_id']);
            $table->dropForeign(['approved_by']);
            $table->dropForeign(['rejected_by']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
            $table->dropIndex(['applicationable_id']);
            $table->dropIndex(['form_id']);
            $table->dropIndex(['current_status']);
            $table->dropIndex(['app_type_id','certificate_no']);
        });
        Schema::dropIfExists('applications');
    }
}
