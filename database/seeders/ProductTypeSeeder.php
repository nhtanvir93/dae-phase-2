<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
			'id' => 1,
			'name' => 'Cereal food grains like paddy, rice, wheat etc. (Non Seed)',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 2,
			'name' => 'Onion, Garlic, Pulses, Oilseeds etc.',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 3,
			'name' => 'Fresh Fruits & Vegetables',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 4,
			'name' => 'Spices, Pulses & Others',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 5,
			'name' => 'Raw cotton',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 6,
			'name' => 'Plants/Seedlings',
			'unit_id' => 2,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 7,
			'name' => 'Flowers, Knops(Flower buds) etc.',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 8,
			'name' => 'Cuttings, Bud woods, Cut flowers etc.',
			'unit_id' => 2,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 9,
			'name' => 'Vegetables seeds and Flower seeds',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 10,
			'name' => 'Other seeds including Potato, Rice, Maize etc',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 11,
			'name' => 'Plant Products',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 12,
			'name' => 'Other seeds',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 13,
			'name' => 'Jute and jute product in bale',
			'unit_id' => 3,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 15,
			'name' => 'Fresh Fruits & Vegetables etc.',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 16,
			'name' => 'Cereal food grains like Paddy, Rice, Wheat etc (PC) without Fumigation',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 18,
			'name' => 'Various Kinds of Seeds',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 19,
			'name' => 'Samples for Exportable Plants/ Plants products',
			'unit_id' => 4,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 20,
			'name' => 'Sesame without Fumigation',
			'unit_id' => 4,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 21,
			'name' => 'Various Oil',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 22,
			'name' => 'Tobacco and tobacco products',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 23,
			'name' => 'Rice Bran',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 24,
			'name' => 'Rice Bran Deoiled Cake',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 25,
			'name' => 'Other Plants or Plants Products',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-05'
		]);

		DB::table('product_types')->insert([
			'id' => 26,
			'name' => 'Food Stuff',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-06'
		]);

		DB::table('product_types')->insert([
			'id' => 27,
			'name' => 'Cereal food grains like Paddy, Rice, Wheat etc. (AP) ',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2017-04-10'
		]);

		DB::table('product_types')->insert([
			'id' => 32,
			'name' => 'Sample: Seed and Plants/Plant parts',
			'unit_id' => 5,
			'created_by' => 1,
			'created_at' => '2017-06-20'
		]);

		DB::table('product_types')->insert([
			'id' => 34,
			'name' => 'Jute & Jute Products in truss',
			'unit_id' => 6,
			'created_by' => 1,
			'created_at' => '2018-10-17'
		]);

		DB::table('product_types')->insert([
			'id' => 35,
			'name' => 'Rice',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2018-12-02'
		]);

		DB::table('product_types')->insert([
			'id' => 36,
			'name' => 'Starch',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2018-12-19'
		]);

		DB::table('product_types')->insert([
			'id' => 37,
			'name' => 'Cotton and Cotton product',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-01-14'
		]);

		DB::table('product_types')->insert([
			'id' => 38,
			'name' => 'Tea',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-01-14'
		]);

		DB::table('product_types')->insert([
			'id' => 39,
			'name' => 'Mushroom and Mushroom Products',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-01-15'
		]);

		DB::table('product_types')->insert([
			'id' => 40,
			'name' => 'Wood/Timber Item (Non Seed) ',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-01-17'
		]);

		DB::table('product_types')->insert([
			'id' => 41,
			'name' => 'Jute Seeds (Non Member)',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-02-09'
		]);

		DB::table('product_types')->insert([
			'id' => 42,
			'name' => 'Jute Seeds (Seed Association Member)',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-02-20'
		]);

		DB::table('product_types')->insert([
			'id' => 43,
			'name' => 'Medicinal Plant Parts (Non Seed)',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-09-25'
		]);

		DB::table('product_types')->insert([
			'id' => 44,
			'name' => 'Wooden Pallets ( Empty or Non Plant & Plant Product)',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-11-21'
		]);

		DB::table('product_types')->insert([
			'id' => 45,
			'name' => 'Wood & Wood Product',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2019-11-27'
		]);

		DB::table('product_types')->insert([
			'id' => 47,
			'name' => 'Jute and Jute product in Kg',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-01-22'
		]);

		DB::table('product_types')->insert([
			'id' => 49,
			'name' => 'Raw Jute in Kg',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-01-22'
		]);

		DB::table('product_types')->insert([
			'id' => 51,
			'name' => 'Jute Seed (JRO 524) Non Member',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-02-17'
		]);

		DB::table('product_types')->insert([
			'id' => 53,
			'name' => 'Jute Seed (JRO 524) Association Member',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-02-17'
		]);

		DB::table('product_types')->insert([
			'id' => 55,
			'name' => 'Kenaf Seed (Mesta) Association Member',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-02-17'
		]);

		DB::table('product_types')->insert([
			'id' => 57,
			'name' => 'Kenaf Seed (Mesta) Non Member',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-02-17'
		]);

		DB::table('product_types')->insert([
			'id' => 59,
			'name' => 'Dry Nuts',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2020-11-29'
		]);

		DB::table('product_types')->insert([
			'id' => 61,
			'name' => 'Coconut husk, khail, glume, coco dust',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2021-02-24'
		]);

		DB::table('product_types')->insert([
			'id' => 63,
			'name' => 'Test Product Type',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2021-04-01'
		]);

		DB::table('product_types')->insert([
			'id' => 65,
			'name' => 'Frozen Fruits, Vegetables & Pastry',
			'unit_id' => 1,
			'created_by' => 1,
			'created_at' => '2021-06-01'
		]);
    }
}
