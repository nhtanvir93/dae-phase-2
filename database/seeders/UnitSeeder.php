<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->insert([
            'name' => 'Kg',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('units')->insert([
            'name' => 'Piece',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('units')->insert([
            'name' => 'Bale',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('units')->insert([
            'name' => 'Per Certificate',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('units')->insert([
            'name' => 'Gram',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('units')->insert([
            'name' => 'Truss',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
