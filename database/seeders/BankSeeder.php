<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'Bangladesh Bank',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('banks')->insert([
            'name' => 'Sonali Bank',
            'created_by' => 1,
            'created_at' => now()
        ]);

    }
}
