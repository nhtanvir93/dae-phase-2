<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldsInUserTypesTable extends Migration
{
    public function up()
    {
        Schema::table('user_types', function (Blueprint $table) {
            $table->boolean('is_cnf')->default(false)->after('is_super_admin');
        });
    }

    public function down()
    {
        Schema::table('user_types', function (Blueprint $table) {
            $table->dropColumn(['is_cnf']);
        });
    }
}
