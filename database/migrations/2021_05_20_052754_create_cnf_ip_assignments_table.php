<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnfIpAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('cnf_ip_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ip_application_id')->constrained('applications');
            $table->foreignId('cnf_user_id')->constrained('users');
            $table->boolean('is_cancelled')->default(false);
            $table->boolean('is_locked')->default(false);
            $table->date('available_at');
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
        });
    }

    public function down()
    {
        Schema::table('cnf_ip_assignments', function (Blueprint $table){
            $table->dropForeign(['ip_application_id']);
            $table->dropForeign(['cnf_user_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('cnf_ip_assignments');
    }
}
