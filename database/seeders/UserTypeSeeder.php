<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'System Admin',
            'is_super_admin' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('user_types')->insert([
            'name' => 'DAE Admin/Management',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('user_types')->insert([
            'name' => 'Applicant',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('user_types')->insert([
            'name' => 'DAE User',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('user_types')->insert([
            'name' => 'Print Man',
            'created_by' => 1,
            'created_at' => now()
        ]);

    }
}
