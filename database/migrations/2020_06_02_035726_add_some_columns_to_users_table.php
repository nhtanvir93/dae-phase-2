<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile');
            $table->foreignId('designation_id')->nullable()->constrained();
            $table->foreignId('user_type_id')->nullable()->constrained();
            $table->foreignId('organization_id')->nullable()->constrained();
            $table->boolean('is_active')->default(false);
            $table->enum('company_type',['PERSONAL','ORGANIZATIONAL'])->nullable();
            $table->foreignId('superior_id')->nullable();
            $table->boolean('is_proxy_user')->default(false);
            $table->softDeletes('deleted_at',0);
            $table->index('mobile');
            $table->index('company_type');
            $table->index('superior_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['designation_id']);
            $table->dropForeign(['user_type_id']);
            $table->dropForeign(['organization_id']);
            $table->dropIndex(['mobile']);
            $table->dropIndex(['company_type']);
            $table->dropIndex(['superior_id']);
        });
    }
}
