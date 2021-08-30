<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCnfUserIdFieldInApplicationsTable extends Migration
{
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->foreignId('cnf_user_id')->nullable()->after('applicant_id')->constrained('users');
            $table->foreignId('cnf_ip_assignment_id')->nullable()->after('cnf_user_id')->constrained('cnf_ip_assignments');
        });
    }

    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropForeign(['cnf_user_id']);
            $table->dropColumn(['cnf_user_id']);
            $table->dropForeign(['cnf_ip_assignment_id']);
            $table->dropColumn(['cnf_ip_assignment_id']);
        });
    }
}
