<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddCnfRequiredFieldsInUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('card_no')->nullable();
        });

        DB::statement("ALTER TABLE users MODIFY COLUMN company_type ENUM('PERSONAL','ORGANIZATIONAL','CNF') ");
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['card_no']);
        });

        DB::statement("ALTER TABLE users MODIFY COLUMN company_type ENUM('PERSONAL','ORGANIZATIONAL') ");
    }
}
