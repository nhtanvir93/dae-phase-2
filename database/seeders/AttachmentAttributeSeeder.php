<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_attachment_attributes')->insert([
            'name' => 'Phytosanitary Certificate No. given by exporting country',
            'config_attachment_id' => 18,
            'type' => 'TEXT',
            'label' => 'Phytosanitary Certificate No. given by exporting country',
            'position' => 1,
            'is_mandatory' => 1,
            'input_field_name' => 'exporting_country_pc_no',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'PC Certification Date',
            'config_attachment_id' => 18,
            'type' => 'DATE',
            'label' => 'PC Certification Date',
            'position' => 2,
            'is_mandatory' => 1,
            'input_field_name' => 'pc_certification_date',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'Information about Bill of Lading',
            'config_attachment_id' => 17,
            'type' => 'TEXT',
            'label' => 'Information about Bill of Lading',
            'position' => 1,
            'is_mandatory' => 0,
            'input_field_name' => 'bill_of_lading_info',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'Information about Bill of Entry',
            'config_attachment_id' => 26,
            'type' => 'TEXT',
            'label' => 'Information about Bill of Entry',
            'position' => 1,
            'is_mandatory' => 0,
            'input_field_name' => 'bill_of_entry_info',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'Bank & Branch name',
            'config_attachment_id' => 11,
            'type' => 'TEXT',
            'label' => 'Bank & Branch name',
            'position' => 1,
            'is_mandatory' => 1,
            'input_field_name' => 'lc_bank_branch_name',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'L/C No',
            'config_attachment_id' => 11,
            'type' => 'TEXT',
            'label' => 'L/C No',
            'position' => 2,
            'is_mandatory' => 1,
            'input_field_name' => 'lc_no',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'L/C opening Date',
            'config_attachment_id' => 11,
            'type' => 'TEXT',
            'label' => 'L/C opening Date',
            'position' => 3,
            'is_mandatory' => 1,
            'input_field_name' => 'lc_opening_date',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_attachment_attributes')->insert([
            'name' => 'Information about Import General Manifesto (IGM)',
            'config_attachment_id' => 27,
            'type' => 'TEXT',
            'label' => 'Information about Import General Manifesto (IGM)',
            'position' => 1,
            'is_mandatory' => 0,
            'input_field_name' => 'igm_info',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
