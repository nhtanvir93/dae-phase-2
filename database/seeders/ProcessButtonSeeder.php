<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessButtonSeeder extends Seeder
{
    public function run()
    {
        DB::table('process_buttons')->insert([
            'name' => 'Forward',
            'type' => 'FORWARD',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        DB::table('process_buttons')->insert([
            'name' => 'Backward',
            'type' => 'BACKWARD',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        DB::table('process_buttons')->insert([
            'name' => 'Approve',
            'type' => 'APPROVE',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        DB::table('process_buttons')->insert([
            'name' => 'Reject',
            'type' => 'REJECT',
            'created_by' => 1,
            'created_at' => now(),
        ]);

        DB::table('process_buttons')->insert([
            'name' => 'Recheck',
            'type' => 'RECHECK',
            'created_by' => 1,
            'created_at' => now(),
        ]);
    }
}
