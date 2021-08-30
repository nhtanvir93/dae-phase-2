<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('fullname')->nullable();
            $table->string('bn_fullname')->collation('utf8_general_ci')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->foreignId('permanent_address_id')->nullable()->constrained('addresses');
            $table->foreignId('present_address_id')->nullable()->constrained('addresses');
            $table->string('nid',50)->nullable();
            $table->string('trade_licence',50)->nullable();
            $table->date('trade_licence_expiry_date')->nullable();
            $table->string('erc_no',50)->nullable();
            $table->date('erc_expiry_date')->nullable();
            $table->string('irc_no',50)->nullable();
            $table->date('irc_expiry_date')->nullable();
            $table->string('dae_exporter_no',50)->nullable();
            $table->foreignId('photo_attachment_id')->nullable()->constrained('attachments');
            $table->foreignId('signature_attachment_id')->nullable()->constrained('attachments');
            $table->string('contact_person_name')->nullable();
            $table->string('bn_contact_person_name')->collation('utf8_general_ci')->nullable();
            $table->string('contact_person_designation')->nullable();
            $table->foreignId('contact_person_photo_attachment_id')->nullable()->constrained('attachments');
            $table->foreignId('contact_person_signature_attachment_id')->nullable()->constrained('attachments');
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_phone')->nullable();
            $table->timestamps();
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
            $table->foreignId('deleted_by')->nullable()->constrained('users');
            $table->softDeletes('deleted_at',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['permanent_address_id']);
            $table->dropForeign(['present_address_id']);
            $table->dropForeign(['photo_attachment_id']);
            $table->dropForeign(['signature_attachment_id']);
            $table->dropForeign(['contact_person_photo_attachment_id']);
            $table->dropForeign(['contact_person_signature_attachment_id']);
            $table->dropForeign(['created_by']);
            $table->dropForeign(['updated_by']);
            $table->dropForeign(['deleted_by']);
        });
        Schema::dropIfExists('profiles');
    }
}
