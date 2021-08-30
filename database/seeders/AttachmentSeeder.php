<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_attachments')->insert([
            'id' => 1,
            'name' => 'National ID (NID)',
            'short_name' => 'NID',
            'display_label' => 'National ID (NID)',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 2,
            'name' => 'Trade License',
            'short_name' => '',
            'display_label' => 'Trade License',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 3,
            'name' => 'Taxpayer Identification Number (TIN)',
            'short_name' => '',
            'display_label' => 'Taxpayer Identification Number (TIN)',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 4,
            'name' => 'Vat Registration',
            'short_name' => 'VR',
            'display_label' => 'Vat Registration',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 6,
            'name' => 'Importer Registration Certificate (IRC)',
            'short_name' => 'IRC',
            'display_label' => 'Importer Registration Certificate (IRC)',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 7,
            'name' => 'Signature',
            'short_name' => '',
            'display_label' => 'Signature',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 8,
            'name' => 'Bill of Loading',
            'short_name' => 'BL',
            'display_label' => 'Bill of Loading',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 9,
            'name' => 'Import Permit of Exporting Country',
            'short_name' => '',
            'display_label' => 'Import Permit of Exporting Country',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 10,
            'name' => 'Authorization Letter from Institution',
            'short_name' => '',
            'display_label' => 'Authorization Letter from Institution',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 11,
            'name' => 'Sale Contact/ LC/ TT',
            'short_name' => '',
            'display_label' => 'Sale Contact/ LC/ TT',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 12,
            'name' => 'Packing List',
            'short_name' => '',
            'display_label' => 'Packing List',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 13,
            'name' => 'Exporter Registration Number (ERN)',
            'short_name' => '',
            'display_label' => 'Exporter Registration Number (ERN)',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 14,
            'name' => 'Exporter Registration Certificate (ERC)',
            'short_name' => '',
            'display_label' => 'Exporter Registration Certificate (ERC)',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 15,
            'name' => 'Import Permit of Bangladesh',
            'short_name' => '',
            'display_label' => 'Import Permit of Bangladesh',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 16,
            'name' => 'Certificate of Origin',
            'short_name' => '',
            'display_label' => 'Certificate of Origin',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 17,
            'name' => 'Bill of Lading/ Airway Bill/ Challan',
            'short_name' => '',
            'display_label' => 'Bill of Lading/ Airway Bill/ Challan',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 18,
            'name' => 'Phytosanitary Certificate of Exporting Country',
            'short_name' => '',
            'display_label' => 'Phytosanitary Certificate of Exporting Country',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 19,
            'name' => 'Treasury Invoice',
            'short_name' => '',
            'display_label' => 'Treasury Invoice',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 20,
            'name' => 'Seed Dealership Certificate',
            'short_name' => '',
            'display_label' => 'Seed Dealership Certificate',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 21,
            'name' => 'Other Necessary Attachments',
            'short_name' => '',
            'display_label' => 'Other Necessary Attachments',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 22,
            'name' => 'Invoice',
            'short_name' => '',
            'display_label' => 'Invoice',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 23,
            'name' => 'Passport',
            'short_name' => '',
            'display_label' => 'Passport',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 24,
            'name' => 'National ID (NID)/ Passport of Contact Person',
            'short_name' => '',
            'display_label' => 'National ID (NID)/ Passport of Contact Person',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 25,
            'name' => 'Driving License',
            'short_name' => 'DL',
            'display_label' => 'Driving License',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 26,
            'name' => 'Bill of Entry',
            'short_name' => '',
            'display_label' => 'Bill of Entry',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 27,
            'name' => 'Import General Manifesto (IGM)',
            'short_name' => '',
            'display_label' => 'Import General Manifesto (IGM)',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 28,
            'name' => 'Test Certificate',
            'short_name' => '',
            'display_label' => 'Test Certificate',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 29,
            'name' => 'Seed Association Membership Certificate',
            'short_name' => '',
            'display_label' => 'Seed Association Membership Certificate',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 30,
            'name' => 'Fumigation Chalan',
            'short_name' => '',
            'display_label' => 'Fumigation Chalan',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 31,
            'name' => 'Import Permit of the Importing Country',
            'short_name' => '',
            'display_label' => 'Import Permit of the Importing Country',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 32,
            'name' => 'BFVAPEA/BPEA Certificate',
            'short_name' => '',
            'display_label' => 'BFVAPEA/BPEA Certificate',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 33,
            'name' => 'Test Doc',
            'short_name' => 'TDN',
            'display_label' => 'Test Doc',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 34,
            'name' => 'h',
            'short_name' => 'hi',
            'display_label' => 'h',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 35,
            'name' => 'Birth Certificate',
            'short_name' => 'BCN',
            'display_label' => 'Birth Certificate',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 37,
            'name' => 'IP For PC Application',
            'short_name' => 'IPPCA',
            'display_label' => 'IP For PC Application',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 38,
            'name' => 'Mobile Sim DOC  Test',
            'short_name' => 'MSDT',
            'display_label' => 'Mobile Sim DOC  Test',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 40,
            'name' => 'Test Chalan',
            'short_name' => 'TC',
            'display_label' => 'Test Chalan',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 41,
            'name' => 'Company ID',
            'short_name' => 'CID',
            'display_label' => 'Company ID',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 42,
            'name' => 'Medical Certificate',
            'short_name' => 'MC',
            'display_label' => 'Medical Certificate',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 43,
            'name' => 'Desktop Clearance',
            'short_name' => 'DC',
            'display_label' => 'Desktop Clearance',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 46,
            'name' => 'new name',
            'short_name' => 'new',
            'display_label' => 'new name',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 47,
            'name' => 'Clearance Form',
            'short_name' => 'CF',
            'display_label' => 'Clearance Form',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 48,
            'name' => 'Smart Card',
            'short_name' => 'SC',
            'display_label' => 'Smart Card',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 49,
            'name' => 'test',
            'short_name' => 't',
            'display_label' => 'test',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 51,
            'name' => ' ',
            'short_name' => ' ',
            'display_label' => ' ',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 55,
            'name' => 'Testing DOC for order',
            'short_name' => 'TDO',
            'display_label' => 'Testing DOC for order',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 57,
            'name' => 'Picture of Owner',
            'short_name' => 'POO',
            'display_label' => 'Picture of Owner',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 59,
            'name' => 'impo',
            'short_name' => 'imo',
            'display_label' => 'impo',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 63,
            'name' => 'test12',
            'short_name' => 'tst',
            'display_label' => 'test12',
            'is_profile_eligible' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachments')->insert([
            'id' => 65,
            'name' => 'tst123',
            'short_name' => 'tst1',
            'display_label' => 'tst123',
            'is_profile_eligible' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
