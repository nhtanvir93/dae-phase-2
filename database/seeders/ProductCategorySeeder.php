<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Non Seed',
            'is_seed' => false,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Seed',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Seedlings',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Tuber',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Corn',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Budwood',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Cutting',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('product_categories')->insert([
            'name' => 'Parcel',
            'is_seed' => true,
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
