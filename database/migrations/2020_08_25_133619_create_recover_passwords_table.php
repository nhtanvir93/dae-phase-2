<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRecoverPasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recover_passwords', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('token');
            $table->dateTime('token_last_validity')->nullable();
            $table->boolean('is_used')->default(false);
            $table->dateTime('used_at')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->dateTime('created_at');
            $table->index(['email', 'token']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recover_passwords', function(Blueprint $table) {
            $table->dropForeign(['created_by']);
            $table->dropIndex(['email', 'token']);
        });
        Schema::dropIfExists('recover_passwords');
    }
}
