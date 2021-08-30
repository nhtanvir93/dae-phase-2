<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'daeSuperAdmin',
            'email' => 'nazmul.tanvir@synesisit.com.bd',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
            'created_at' => now(),
            'mobile' => '01968569447',
            'is_active' => true,
            'company_type' => 'PERSONAL',
            'is_profile_completed' => 1
        ]);
    }
}
