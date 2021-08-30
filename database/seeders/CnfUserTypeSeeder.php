<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CnfUserTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'C&F',
            'is_cnf' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
