<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeeSetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $data[] = [
            'id' => 1,
            'app_type_id' => 3,
            'product_type_id' => 1,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 2,
            'app_type_id' => 3,
            'product_type_id' => 1,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 3,
            'app_type_id' => 2,
            'product_type_id' => 1,
            'quantity_from' => .01,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 4,
            'app_type_id' => 2,
            'product_type_id' => 1,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.02,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 5,
            'app_type_id' => 4,
            'product_type_id' => 1,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 6,
            'app_type_id' => 4,
            'product_type_id' => 1,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 7,
            'app_type_id' => 3,
            'product_type_id' => 2,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 8,
            'app_type_id' => 3,
            'product_type_id' => 2,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 9,
            'app_type_id' => 4,
            'product_type_id' => 2,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 10,
            'app_type_id' => 4,
            'product_type_id' => 2,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 11,
            'app_type_id' => 2,
            'product_type_id' => 2,
            'quantity_from' => 1,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 12,
            'app_type_id' => 2,
            'product_type_id' => 2,
            'quantity_from' => 5.1,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 13,
            'app_type_id' => 3,
            'product_type_id' => 3,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 14,
            'app_type_id' => 3,
            'product_type_id' => 3,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 15,
            'app_type_id' => 4,
            'product_type_id' => 3,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 16,
            'app_type_id' => 4,
            'product_type_id' => 3,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 17,
            'app_type_id' => 2,
            'product_type_id' => 3,
            'quantity_from' => .01,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 18,
            'app_type_id' => 2,
            'product_type_id' => 3,
            'quantity_from' => 5.1,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 19,
            'app_type_id' => 2,
            'product_type_id' => 3,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 20,
            'app_type_id' => 3,
            'product_type_id' => 4,
            'quantity_from' => .001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 21,
            'app_type_id' => 3,
            'product_type_id' => 4,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 22,
            'app_type_id' => 4,
            'product_type_id' => 4,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 23,
            'app_type_id' => 4,
            'product_type_id' => 4,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 24,
            'app_type_id' => 2,
            'product_type_id' => 4,
            'quantity_from' => .01,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 25,
            'app_type_id' => 2,
            'product_type_id' => 4,
            'quantity_from' => 5.1,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 26,
            'app_type_id' => 3,
            'product_type_id' => 5,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 27,
            'app_type_id' => 3,
            'product_type_id' => 5,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 28,
            'app_type_id' => 4,
            'product_type_id' => 5,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 29,
            'app_type_id' => 4,
            'product_type_id' => 5,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 30,
            'app_type_id' => 2,
            'product_type_id' => 5,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 31,
            'app_type_id' => 2,
            'product_type_id' => 5,
            'quantity_from' => 1000.1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.02,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 32,
            'app_type_id' => 3,
            'product_type_id' => 6,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 33,
            'app_type_id' => 3,
            'product_type_id' => 6,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 2,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 34,
            'app_type_id' => 4,
            'product_type_id' => 6,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 0,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 35,
            'app_type_id' => 4,
            'product_type_id' => 6,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 1,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 36,
            'app_type_id' => 2,
            'product_type_id' => 6,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 37,
            'app_type_id' => 2,
            'product_type_id' => 6,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 3,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 39,
            'app_type_id' => 3,
            'product_type_id' => 7,
            'quantity_from' => 1,
            'quantity_to' => 50,
            'price_per_quantity' => 50,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 40,
            'app_type_id' => 3,
            'product_type_id' => 7,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.2,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 41,
            'app_type_id' => 4,
            'product_type_id' => 7,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 0,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 42,
            'app_type_id' => 4,
            'product_type_id' => 7,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 1,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 43,
            'app_type_id' => 2,
            'product_type_id' => 7,
            'quantity_from' => 1,
            'quantity_to' => 50,
            'price_per_quantity' => 50,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 45,
            'app_type_id' => 2,
            'product_type_id' => 7,
            'quantity_from' => 51,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.1,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 46,
            'app_type_id' => 1,
            'product_type_id' => 13,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 5,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 51,
            'app_type_id' => 1,
            'product_type_id' => 18,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 54,
            'app_type_id' => 1,
            'product_type_id' => 21,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 55,
            'app_type_id' => 1,
            'product_type_id' => 22,
            'quantity_from' => 0.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 56,
            'app_type_id' => 1,
            'product_type_id' => 23,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 57,
            'app_type_id' => 1,
            'product_type_id' => 24,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 58,
            'app_type_id' => 1,
            'product_type_id' => 25,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 59,
            'app_type_id' => 3,
            'product_type_id' => 9,
            'quantity_from' => .01,
            'quantity_to' => .5,
            'price_per_quantity' => .5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 60,
            'app_type_id' => 3,
            'product_type_id' => 9,
            'quantity_from' => .51,
            'quantity_to' => 1000,
            'price_per_quantity' => 999.5,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 61,
            'app_type_id' => 3,
            'product_type_id' => 9,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 62,
            'app_type_id' => 3,
            'product_type_id' => 10,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 63,
            'app_type_id' => 3,
            'product_type_id' => 10,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 64,
            'app_type_id' => 3,
            'product_type_id' => 8,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 65,
            'app_type_id' => 3,
            'product_type_id' => 8,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 2,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 66,
            'app_type_id' => 2,
            'product_type_id' => 8,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 67,
            'app_type_id' => 2,
            'product_type_id' => 8,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.2,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 70,
            'app_type_id' => 2,
            'product_type_id' => 9,
            'quantity_from' => .001,
            'quantity_to' => .5,
            'price_per_quantity' => .5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 71,
            'app_type_id' => 2,
            'product_type_id' => 9,
            'quantity_from' => .501,
            'quantity_to' => 1000,
            'price_per_quantity' => 999.5,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 72,
            'app_type_id' => 2,
            'product_type_id' => 9,
            'quantity_from' => 1000.01,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 73,
            'app_type_id' => 1,
            'product_type_id' => 26,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 74,
            'app_type_id' => 2,
            'product_type_id' => 10,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 75,
            'app_type_id' => 2,
            'product_type_id' => 10,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 77,
            'app_type_id' => 5,
            'product_type_id' => 1,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 78,
            'app_type_id' => 5,
            'product_type_id' => 6,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 0,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 79,
            'app_type_id' => 5,
            'product_type_id' => 8,
            'quantity_from' => 1,
            'quantity_to' => 10,
            'price_per_quantity' => 10,
            'quantity_per_price' => 0,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 80,
            'app_type_id' => 5,
            'product_type_id' => 8,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 1,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 81,
            'app_type_id' => 5,
            'product_type_id' => 6,
            'quantity_from' => 11,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 1,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 82,
            'app_type_id' => 5,
            'product_type_id' => 1,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 83,
            'app_type_id' => 5,
            'product_type_id' => 3,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 84,
            'app_type_id' => 5,
            'product_type_id' => 3,
            'quantity_from' => 1000.1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 85,
            'app_type_id' => 5,
            'product_type_id' => 2,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 86,
            'app_type_id' => 5,
            'product_type_id' => 2,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 87,
            'app_type_id' => 5,
            'product_type_id' => 4,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 88,
            'app_type_id' => 5,
            'product_type_id' => 4,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 89,
            'app_type_id' => 5,
            'product_type_id' => 5,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 90,
            'app_type_id' => 5,
            'product_type_id' => 5,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 91,
            'app_type_id' => 5,
            'product_type_id' => 10,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 92,
            'app_type_id' => 5,
            'product_type_id' => 10,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 93,
            'app_type_id' => 5,
            'product_type_id' => null,
            'quantity_from' => .1,
            'quantity_to' => .5,
            'price_per_quantity' => .5,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 94,
            'app_type_id' => 5,
            'product_type_id' => 9,
            'quantity_from' => .6,
            'quantity_to' => 1000,
            'price_per_quantity' => 999.5,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 95,
            'app_type_id' => 5,
            'product_type_id' => 9,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.001,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 96,
            'app_type_id' => 5,
            'product_type_id' => 9,
            'quantity_from' => .1,
            'quantity_to' => .5,
            'price_per_quantity' => .5,
            'quantity_per_price' => 10,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 101,
            'app_type_id' => 3,
            'product_type_id' => 32,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 104,
            'app_type_id' => 3,
            'product_type_id' => 32,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 105,
            'app_type_id' => 2,
            'product_type_id' => 32,
            'quantity_from' => .001,
            'quantity_to' => 1,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 106,
            'app_type_id' => 2,
            'product_type_id' => 32,
            'quantity_from' => 1.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.02,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 108,
            'app_type_id' => 1,
            'product_type_id' => 34,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 1,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 109,
            'app_type_id' => 1,
            'product_type_id' => 4,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 110,
            'app_type_id' => 1,
            'product_type_id' => 3,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 111,
            'app_type_id' => 2,
            'product_type_id' => 2,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 112,
            'app_type_id' => 3,
            'product_type_id' => 36,
            'quantity_from' => .001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 113,
            'app_type_id' => 3,
            'product_type_id' => 36,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 114,
            'app_type_id' => 3,
            'product_type_id' => 39,
            'quantity_from' => .001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 115,
            'app_type_id' => 3,
            'product_type_id' => 39,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 116,
            'app_type_id' => 3,
            'product_type_id' => 40,
            'quantity_from' => .001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 117,
            'app_type_id' => 3,
            'product_type_id' => 40,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 118,
            'app_type_id' => 3,
            'product_type_id' => 41,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 119,
            'app_type_id' => 3,
            'product_type_id' => 41,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 120,
            'app_type_id' => 3,
            'product_type_id' => 42,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 121,
            'app_type_id' => 3,
            'product_type_id' => 42,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 122,
            'app_type_id' => 1,
            'product_type_id' => 9,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 123,
            'app_type_id' => 2,
            'product_type_id' => 4,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 124,
            'app_type_id' => 3,
            'product_type_id' => 11,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 125,
            'app_type_id' => 3,
            'product_type_id' => 11,
            'quantity_from' => 1000.1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 126,
            'app_type_id' => 2,
            'product_type_id' => 41,
            'quantity_from' => .01,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 127,
            'app_type_id' => 2,
            'product_type_id' => 41,
            'quantity_from' => 1000.1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 128,
            'app_type_id' => 2,
            'product_type_id' => 42,
            'quantity_from' => .01,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 129,
            'app_type_id' => 2,
            'product_type_id' => 42,
            'quantity_from' => 1000.1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 130,
            'app_type_id' => 3,
            'product_type_id' => 22,
            'quantity_from' => .0001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 131,
            'app_type_id' => 3,
            'product_type_id' => 22,
            'quantity_from' => 1000.0001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 132,
            'app_type_id' => 3,
            'product_type_id' => 43,
            'quantity_from' => .001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 50,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 133,
            'app_type_id' => 3,
            'product_type_id' => 43,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 134,
            'app_type_id' => 1,
            'product_type_id' => 1,
            'quantity_from' => .000000001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 135,
            'app_type_id' => 1,
            'product_type_id' => 44,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 136,
            'app_type_id' => 1,
            'product_type_id' => 45,
            'quantity_from' => 0.1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 137,
            'app_type_id' => 1,
            'product_type_id' => 47,
            'quantity_from' => 0.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 139,
            'app_type_id' => 1,
            'product_type_id' => 49,
            'quantity_from' => 0.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.03,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 141,
            'app_type_id' => 3,
            'product_type_id' => 53,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 100,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 143,
            'app_type_id' => 3,
            'product_type_id' => 53,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 145,
            'app_type_id' => 3,
            'product_type_id' => 51,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 100,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 147,
            'app_type_id' => 3,
            'product_type_id' => 51,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 149,
            'app_type_id' => 3,
            'product_type_id' => 55,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 100,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 151,
            'app_type_id' => 3,
            'product_type_id' => 55,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 153,
            'app_type_id' => 3,
            'product_type_id' => 57,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 100,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 155,
            'app_type_id' => 3,
            'product_type_id' => 57,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.01,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 157,
            'app_type_id' => 3,
            'product_type_id' => 38,
            'quantity_from' => 0.0001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 159,
            'app_type_id' => 3,
            'product_type_id' => 38,
            'quantity_from' => 1000.0001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 161,
            'app_type_id' => 3,
            'product_type_id' => 59,
            'quantity_from' => .0001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 163,
            'app_type_id' => 3,
            'product_type_id' => 59,
            'quantity_from' => 1000.0001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 165,
            'app_type_id' => 2,
            'product_type_id' => 51,
            'quantity_from' => .01,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 5,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 167,
            'app_type_id' => 2,
            'product_type_id' => 59,
            'quantity_from' => .001,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 169,
            'app_type_id' => 2,
            'product_type_id' => 59,
            'quantity_from' => 5.001,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 171,
            'app_type_id' => 2,
            'product_type_id' => 59,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 173,
            'app_type_id' => 2,
            'product_type_id' => 39,
            'quantity_from' => .001,
            'quantity_to' => .5,
            'price_per_quantity' => .5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 175,
            'app_type_id' => 2,
            'product_type_id' => 39,
            'quantity_from' => .501,
            'quantity_to' => 1000,
            'price_per_quantity' => 999.5,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 177,
            'app_type_id' => 2,
            'product_type_id' => 39,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 179,
            'app_type_id' => 2,
            'product_type_id' => 40,
            'quantity_from' => 1,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 50,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 181,
            'app_type_id' => 2,
            'product_type_id' => 40,
            'quantity_from' => 1001.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.02,
            'min_payable' => 20,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 183,
            'app_type_id' => 1,
            'product_type_id' => 37,
            'quantity_from' => 0.0001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 185,
            'app_type_id' => 2,
            'product_type_id' => 43,
            'quantity_from' => .01,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => 100,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 187,
            'app_type_id' => 2,
            'product_type_id' => 43,
            'quantity_from' => 1001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.02,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 189,
            'app_type_id' => 2,
            'product_type_id' => 11,
            'quantity_from' => .001,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 191,
            'app_type_id' => 2,
            'product_type_id' => 11,
            'quantity_from' => 5.001,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 193,
            'app_type_id' => 2,
            'product_type_id' => 11,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 195,
            'app_type_id' => 2,
            'product_type_id' => 22,
            'quantity_from' => .001,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 197,
            'app_type_id' => 2,
            'product_type_id' => 22,
            'quantity_from' => 5.001,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 200,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 199,
            'app_type_id' => 2,
            'product_type_id' => 22,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 201,
            'app_type_id' => 1,
            'product_type_id' => 61,
            'quantity_from' => 0.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 203,
            'app_type_id' => 1,
            'product_type_id' => 32,
            'quantity_from' => 0.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.00025,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 205,
            'app_type_id' => 2,
            'product_type_id' => 36,
            'quantity_from' => .001,
            'quantity_to' => 1000,
            'price_per_quantity' => 1000,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 207,
            'app_type_id' => 2,
            'product_type_id' => 36,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.02,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 209,
            'app_type_id' => 3,
            'product_type_id' => 63,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 211,
            'app_type_id' => 2,
            'product_type_id' => 63,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 213,
            'app_type_id' => 1,
            'product_type_id' => 63,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.005,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 215,
            'app_type_id' => 1,
            'product_type_id' => 2,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 217,
            'app_type_id' => 2,
            'product_type_id' => 38,
            'quantity_from' => .001,
            'quantity_to' => 5,
            'price_per_quantity' => 5,
            'quantity_per_price' => 50,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 219,
            'app_type_id' => 2,
            'product_type_id' => 38,
            'quantity_from' => 5.001,
            'quantity_to' => 1000,
            'price_per_quantity' => 995,
            'quantity_per_price' => 100,
            'has_infinity_to' => 0,
            'per_quantity_price' => null,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 221,
            'app_type_id' => 2,
            'product_type_id' => 38,
            'quantity_from' => 1000.001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.05,
            'min_payable' => null,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 223,
            'app_type_id' => 1,
            'product_type_id' => 38,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 225,
            'app_type_id' => 1,
            'product_type_id' => 65,
            'quantity_from' => 1,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $data[] = [
            'id' => 227,
            'app_type_id' => 1,
            'product_type_id' => 5,
            'quantity_from' => 0.0001,
            'quantity_to' => null,
            'price_per_quantity' => null,
            'quantity_per_price' => null,
            'has_infinity_to' => 1,
            'per_quantity_price' => 0.25,
            'min_payable' => 500,
            'created_by' => 1,
            'created_at' => now()
        ];

        $collection = collect($data);

        $fee_setups = $collection->chunk(1000);

        $fee_setups = $fee_setups->toArray();

        foreach($fee_setups as $fee_setup_chunk) {

            DB::table('config_fee_setups')->insert($fee_setup_chunk);

        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
