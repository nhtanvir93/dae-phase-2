<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Consumption',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'created_by' => 1,
            'created_at' => now()
        ]);

        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Processing',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'created_by' => 1,
            'created_at' => now()
        ]);

        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Business',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'created_by' => 1,
            'created_at' => now()
        ]);

        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Personal Use',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'created_by' => 1,
            'created_at' => now()
        ]);

        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Education & Research',
            'is_research' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'created_by' => 1,
            'created_at' => now()
        ]);

        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Propagation',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        $purposeId = DB::table('config_purposes')->insertGetId([
            'name' => 'Multiplication',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('seed_purposes')->insertGetId([
            'purpose_id' => $purposeId,
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
