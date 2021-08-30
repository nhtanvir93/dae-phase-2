<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('port_categories')->insert([
            'name' => 'Airport Category A',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'Seaport Category A',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'Central Pack House',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'Landport Category A',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'Airport Category B',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'Landport Category B',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'River Port Category B',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_categories')->insert([
            'name' => 'Landport Category C',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
