<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeansOfTransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config_means_of_transports')->insert([
            'name' => 'Air',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_means_of_transports')->insert([
            'name' => 'Land',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_means_of_transports')->insert([
            'name' => 'River',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_means_of_transports')->insert([
            'name' => 'Sea',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('config_means_of_transports')->insert([
            'name' => 'Others',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
