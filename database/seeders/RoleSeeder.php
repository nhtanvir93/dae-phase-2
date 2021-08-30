<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Dg',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'Director',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Ad',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 4,
            'name' => 'Dd',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 6,
            'name' => 'Add',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 9,
            'name' => 'Scrutiny Officer',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 10,
            'name' => 'System Admin',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 11,
            'name' => 'Public User',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 12,
            'name' => 'Inspection Officer',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 13,
            'name' => 'Print Control',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 15,
            'name' => 'Certificate Verification',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 24,
            'name' => 'Import',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 25,
            'name' => 'Export',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 26,
            'name' => 'Dae Admin',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 27,
            'name' => 'Pre-scrutiny Officer',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 28,
            'name' => 'Lab Incharge',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 29,
            'name' => 'Lab Technician',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 30,
            'name' => 'Qe/qp',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 31,
            'name' => 'Call Center',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 33,
            'name' => 'Qe Import',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 35,
            'name' => 'Add 2 (import)',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 37,
            'name' => 'Add 1 (import)',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 39,
            'name' => 'Qp Import',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 41,
            'name' => 'Dd Import',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 45,
            'name' => 'Implementation',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 47,
            'name' => 'Cnf',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 49,
            'name' => 'Managing Director',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('roles')->insert([
            'id' => 51,
            'name' => 'Port Admin',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
