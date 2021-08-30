<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_types')->insert([
            'id' => 1,
            'name' => 'Phytosanitary Certificate',
            'short_name' => 'PC',
            'type' => 'EXPORT',
            'certificate_validity_days' => 90,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('app_types')->insert([
            'id' => 2,
            'name' => 'Release Order',
            'short_name' => 'RO',
            'type' => 'IMPORT',
            'certificate_validity_days' => 90,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('app_types')->insert([
            'id' => 3,
            'name' => 'Import Permit',
            'short_name' => 'IP',
            'type' => 'IMPORT',
            'certificate_validity_days' => 90,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('app_types')->insert([
            'id' => 4,
            'name' => 'Special Import Permit',
            'short_name' => 'SIP',
            'type' => 'IMPORT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('app_types')->insert([
            'id' => 5,
            'name' => 'Special Release Order',
            'short_name' => 'SRO',
            'type' => 'IMPORT',
            'certificate_validity_days' => 90,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('app_types')->insert([
            'id' => 6,
            'name' => 'Anchorage Permit',
            'short_name' => 'AP',
            'type' => 'EXPORT',
            'certificate_validity_days' => 90,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('app_types')->insert([
            'id' => 7,
            'name' => 'Exporter Registration',
            'short_name' => 'ER',
            'type' => 'EXPORT',
            'certificate_validity_days' => 90,
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
