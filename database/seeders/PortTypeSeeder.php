<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('port_types')->insert([
            'name' => 'A',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_types')->insert([
            'name' => 'B',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('port_types')->insert([
            'name' => 'C',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
