<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaVatCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('area_vat_codes')->insert([
            [
                'id' => 1,
                'area' => 'Dhaka North',
                'vat_code' => '1-1133-0015-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'area' => 'Dhaka South',
                'vat_code' => '1-1133-0010-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'area' => 'Chattogram',
                'vat_code' => '1-1133-0025-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'area' => 'Comilla',
                'vat_code' => '1-1133-0040-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'area' => 'Sylhet',
                'vat_code' => '1-1133-0018-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 6,
                'area' => 'Rajshahi',
                'vat_code' => '1-1133-0020-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 7,
                'area' => 'Rangpur',
                'vat_code' => '1-1133-0045-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 8,
                'area' => 'Jessore',
                'vat_code' => '1-1133-0005-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 9,
                'area' => 'Khulna',
                'vat_code' => '1-1133-0001-0311',
                'created_by' => 1,
                'created_at' => now()
            ],
            [
                'id' => 11,
                'area' => 'LTU',
                'vat_code' => '1-1133-0006-0311',
                'created_by' => 1,
                'created_at' => now()
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
