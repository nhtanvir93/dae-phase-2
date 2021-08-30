<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VarietySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('varieties')->insert([
            'name' => 'Inbreed',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('varieties')->insert([
            'name' => 'OPV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('varieties')->insert([
            'name' => 'Hybrid',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('varieties')->insert([
            'name' => 'Cultivar',
            'created_by' => 1,
            'created_at' => now()
        ]);

    }
}
