<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCnfRequiredFieldsInProfilesTable extends Migration
{
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('cnf_firm_name')->nullable()->after('contact_person_phone');
            $table->string('designation_name')->nullable()->after('cnf_firm_name');
        });
    }

    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn(['cnf_firm_name', 'designation_name']);
        });
    }
}
