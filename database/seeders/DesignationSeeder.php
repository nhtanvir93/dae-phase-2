<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designations')->insert([
            'id' => 1,
            'title' => 'DG',
            'level' => 0,
            'full_name' => 'Director General',
            'bn_full_name' => 'মহাপরিচালক',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 2,
            'title' => 'Director',
            'level' => 1,
            'full_name' => 'Director',
            'bn_full_name' => 'পরিচালক',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 3,
            'title' => 'AD',
            'level' => 2,
            'full_name' => 'Additional Director',
            'bn_full_name' => 'অতিরিক্ত পরিচালক',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 4,
            'title' => 'DD',
            'level' => 3,
            'full_name' => 'Deputy Director',
            'bn_full_name' => 'উপপরিচালক',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 5,
            'title' => 'ADD',
            'level' => 4,
            'full_name' => 'Additional Deputy Director',
            'bn_full_name' => 'অতিরিক্ত উপ-পরিচালক',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 6,
            'title' => 'QE/QP',
            'level' => 5,
            'full_name' => 'Quarantine Entomologist/ Quarantine Pathologist',
            'bn_full_name' => 'সংগনিরোধ কীটতত্ত্ববিদ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 7,
            'title' => 'SAQ',
            'level' => 6,
            'full_name' => 'SAQ/Office Assistant',
            'bn_full_name' => 'অফিস সহকারী',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 100,
            'title' => 'Other',
            'level' => null,
            'full_name' => 'System Admin',
            'bn_full_name' => null,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 101,
            'title' => 'Implementation',
            'level' => 8,
            'full_name' => 'Implementation',
            'bn_full_name' => 'বাস্তবায়ন',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 103,
            'title' => 'Lab Technician',
            'level' => 9,
            'full_name' => 'Lab Technician',
            'bn_full_name' => 'ল্যাব কারিগর',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 105,
            'title' => 'FA',
            'level' => 10,
            'full_name' => 'Field Assistant',
            'bn_full_name' => 'মাঠ সহকারী',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('designations')->insert([
            'id' => 109,
            'title' => 'PO',
            'level' => 11,
            'full_name' => 'Plant Observer',
            'bn_full_name' => 'উদ্ভিদ পর্যবেক্ষক',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
