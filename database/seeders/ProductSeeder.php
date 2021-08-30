<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		
		DB::table('products')->insert([
			'id' => 1,
			'name' => 'Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza  sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 2,
			'name' => 'Wheat',
			'product_type_id' => 1,
			'botanical_name' => 'Triticum aestivum  Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 3,
			'name' => 'Maize',
			'product_type_id' => 1,
			'botanical_name' => 'Zea mays Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 4,
			'name' => 'Sorghum ',
			'product_type_id' => 1,
			'botanical_name' => 'Sorghum vulgare',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 5,
			'name' => 'Barley',
			'product_type_id' => 1,
			'botanical_name' => 'Maranta sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 6,
			'name' => 'Sago',
			'product_type_id' => 1,
			'botanical_name' => 'Metroxylon sagu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 7,
			'name' => 'na',
			'product_type_id' => 1,
			'botanical_name' => 'Triticum aestivum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 8,
			'name' => 'Other',
			'product_type_id' => 1,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 9,
			'name' => 'Coconut',
			'product_type_id' => 6,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 10,
			'name' => 'Date palm',
			'product_type_id' => 6,
			'botanical_name' => 'Phoenix  dactylifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 11,
			'name' => 'Bougainvillea',
			'product_type_id' => 6,
			'botanical_name' => 'Bougainvillea spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 12,
			'name' => 'Anthurium',
			'product_type_id' => 6,
			'botanical_name' => 'Anthurium andraeanum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 13,
			'name' => 'Pump Tree',
			'product_type_id' => 6,
			'botanical_name' => 'Arecaceae',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 14,
			'name' => 'Christmas Tree',
			'product_type_id' => 6,
			'botanical_name' => 'Araucaria columnaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 15,
			'name' => 'Cattleya Orchid',
			'product_type_id' => 6,
			'botanical_name' => 'Cattleya spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 16,
			'name' => 'Other',
			'product_type_id' => 6,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 17,
			'name' => 'Rice',
			'product_type_id' => 16,
			'botanical_name' => 'Oryza  sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 18,
			'name' => 'Flour',
			'product_type_id' => 16,
			'botanical_name' => 'Triticum aestivum ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 19,
			'name' => 'Other',
			'product_type_id' => 16,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 20,
			'name' => 'Prickles',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 21,
			'name' => 'Jam',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 22,
			'name' => 'Jelly',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 23,
			'name' => 'Chips',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 24,
			'name' => 'Frozen foods ',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 25,
			'name' => 'Other',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 26,
			'name' => 'Rice',
			'product_type_id' => 27,
			'botanical_name' => 'Oryza  sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 27,
			'name' => 'Wheat',
			'product_type_id' => 27,
			'botanical_name' => 'Triticum aestivum  Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 28,
			'name' => 'Maize',
			'product_type_id' => 27,
			'botanical_name' => 'Zea mays Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 29,
			'name' => 'Sorghum',
			'product_type_id' => 27,
			'botanical_name' => 'Sorghum vulgare',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 30,
			'name' => 'Barley Grain',
			'product_type_id' => 27,
			'botanical_name' => 'Maranta sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 31,
			'name' => 'Sago',
			'product_type_id' => 27,
			'botanical_name' => 'Metroxylon sagu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 32,
			'name' => 'Flour ',
			'product_type_id' => 27,
			'botanical_name' => 'Triticum aestivum ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 33,
			'name' => 'Other',
			'product_type_id' => 27,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 34,
			'name' => 'Jute',
			'product_type_id' => 13,
			'botanical_name' => 'Corchorcus olitorius',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 35,
			'name' => 'Other',
			'product_type_id' => 13,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 36,
			'name' => 'Jute',
			'product_type_id' => null,
			'botanical_name' => 'Corchorcus olitorius',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 37,
			'name' => 'Other',
			'product_type_id' => null,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 38,
			'name' => 'Mango',
			'product_type_id' => 15,
			'botanical_name' => 'Mangifera indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 39,
			'name' => 'Jujube',
			'product_type_id' => 15,
			'botanical_name' => 'Ziziphus mauritiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 40,
			'name' => 'Litchi',
			'product_type_id' => 15,
			'botanical_name' => 'Litchi chinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 41,
			'name' => 'Satkara',
			'product_type_id' => 15,
			'botanical_name' => 'Citrus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 42,
			'name' => 'Coconut',
			'product_type_id' => 15,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 43,
			'name' => 'Water Melon',
			'product_type_id' => 15,
			'botanical_name' => 'Citrullus lanatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 44,
			'name' => 'Asian Palm',
			'product_type_id' => 15,
			'botanical_name' => 'Boorassus flavbellifer',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 45,
			'name' => 'Papaya',
			'product_type_id' => 15,
			'botanical_name' => 'Carica  papaya',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 46,
			'name' => 'Lemon',
			'product_type_id' => 15,
			'botanical_name' => 'Citrus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 47,
			'name' => 'Jeckfruit',
			'product_type_id' => 15,
			'botanical_name' => 'Artocurpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 48,
			'name' => 'Guava',
			'product_type_id' => 15,
			'botanical_name' => 'Psidium guajava',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 49,
			'name' => 'Latkon',
			'product_type_id' => 15,
			'botanical_name' => 'Baccaurea motleyana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 50,
			'name' => 'Wood Apple',
			'product_type_id' => 15,
			'botanical_name' => 'Aegle marmelos',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 51,
			'name' => 'Black Berry',
			'product_type_id' => 15,
			'botanical_name' => 'Rubus Fruticosus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 52,
			'name' => 'Amlaki',
			'product_type_id' => 15,
			'botanical_name' => 'Phyllanthus  embelica ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 53,
			'name' => 'Pineapple',
			'product_type_id' => 15,
			'botanical_name' => 'Ananas comosus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 54,
			'name' => 'Maize',
			'product_type_id' => 15,
			'botanical_name' => 'Zea mays Linn ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 55,
			'name' => 'Lettuce',
			'product_type_id' => 15,
			'botanical_name' => 'Lactuca sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 56,
			'name' => 'Potato',
			'product_type_id' => 15,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 57,
			'name' => 'Tomato',
			'product_type_id' => 15,
			'botanical_name' => 'Lycopersicon esculentum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 58,
			'name' => 'Pumpkin',
			'product_type_id' => 15,
			'botanical_name' => 'Cucurbita moschata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 59,
			'name' => 'Bean',
			'product_type_id' => 15,
			'botanical_name' => 'Dolichos lablab',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 60,
			'name' => 'Radish',
			'product_type_id' => 15,
			'botanical_name' => 'Raphanus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 61,
			'name' => 'Okra',
			'product_type_id' => 15,
			'botanical_name' => 'Abelmoschus esculentus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 62,
			'name' => 'Drumstick',
			'product_type_id' => 15,
			'botanical_name' => 'Moringa oleifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 63,
			'name' => 'Plantain',
			'product_type_id' => 15,
			'botanical_name' => 'Musa paradisiaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 64,
			'name' => 'Cauliflower',
			'product_type_id' => 15,
			'botanical_name' => 'Brassica oleracea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 65,
			'name' => 'Cabbage',
			'product_type_id' => 15,
			'botanical_name' => 'Brassica oleracea var. capitata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 66,
			'name' => 'Yard long bean',
			'product_type_id' => 15,
			'botanical_name' => 'Vigna sinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 67,
			'name' => 'Brinjal',
			'product_type_id' => 15,
			'botanical_name' => 'Solanum melongena',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 68,
			'name' => 'Cucumber',
			'product_type_id' => 15,
			'botanical_name' => 'Cucumis sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 69,
			'name' => 'Bottle gourd',
			'product_type_id' => 15,
			'botanical_name' => 'Lagenaria leucantha',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 70,
			'name' => 'Bitter Gourd',
			'product_type_id' => 15,
			'botanical_name' => 'Momordica charantia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 71,
			'name' => 'Sweet Gourd',
			'product_type_id' => 15,
			'botanical_name' => 'Cucurbita maxima',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 72,
			'name' => 'Ridge gourd',
			'product_type_id' => 15,
			'botanical_name' => 'Luffa acutangula',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 73,
			'name' => 'Ash gourd',
			'product_type_id' => 15,
			'botanical_name' => 'Benincasa hispida',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 74,
			'name' => 'Pea',
			'product_type_id' => 15,
			'botanical_name' => 'Pisum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 75,
			'name' => 'Corm ',
			'product_type_id' => 15,
			'botanical_name' => 'Colocasia  sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 76,
			'name' => 'Betel Leaf',
			'product_type_id' => 15,
			'botanical_name' => 'Piper betle',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-31',
			'reason' => 'restricted ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:39:42',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 77,
			'name' => 'Leafy vegetables ',
			'product_type_id' => 15,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 78,
			'name' => 'Other',
			'product_type_id' => 15,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 79,
			'name' => 'Rice bran Oil',
			'product_type_id' => 21,
			'botanical_name' => 'Oryza  sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 80,
			'name' => 'Mustard Oil',
			'product_type_id' => 21,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 81,
			'name' => 'Sesame Oil',
			'product_type_id' => 21,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 82,
			'name' => 'Other',
			'product_type_id' => 21,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 83,
			'name' => 'Vegetables seeds',
			'product_type_id' => 18,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 84,
			'name' => 'Other',
			'product_type_id' => 18,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 85,
			'name' => 'Flower Plant',
			'product_type_id' => 19,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 86,
			'name' => 'Ornamental plants',
			'product_type_id' => 19,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 87,
			'name' => 'Fruits Plant ',
			'product_type_id' => 19,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 88,
			'name' => 'Other',
			'product_type_id' => 19,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 89,
			'name' => 'Sesame',
			'product_type_id' => 20,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 90,
			'name' => 'Other',
			'product_type_id' => 20,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 91,
			'name' => 'Tobacco',
			'product_type_id' => 22,
			'botanical_name' => 'Nicotiana tabacum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 92,
			'name' => 'Other',
			'product_type_id' => 22,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 93,
			'name' => 'Rice',
			'product_type_id' => 23,
			'botanical_name' => 'Oryza  sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 94,
			'name' => 'Other',
			'product_type_id' => 23,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 95,
			'name' => 'Rice',
			'product_type_id' => 24,
			'botanical_name' => 'Oryza  sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 96,
			'name' => 'Other',
			'product_type_id' => 24,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 97,
			'name' => 'Gladiolus Bulb ',
			'product_type_id' => 8,
			'botanical_name' => 'Gladiolus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 98,
			'name' => 'Flower Plant',
			'product_type_id' => 8,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 99,
			'name' => 'Ornamental plants',
			'product_type_id' => 8,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 100,
			'name' => 'Other',
			'product_type_id' => 8,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 101,
			'name' => 'Gladiolus ',
			'product_type_id' => 7,
			'botanical_name' => 'Gladiolus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 102,
			'name' => 'Orchid ',
			'product_type_id' => 7,
			'botanical_name' => 'Aranda sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 103,
			'name' => 'Zerbeera',
			'product_type_id' => 7,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 104,
			'name' => 'Other',
			'product_type_id' => 7,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 105,
			'name' => 'Apple',
			'product_type_id' => 3,
			'botanical_name' => 'Malus sylvestris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 106,
			'name' => 'Orange',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 107,
			'name' => 'Grape',
			'product_type_id' => 3,
			'botanical_name' => 'Vitis vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 108,
			'name' => 'Pear',
			'product_type_id' => 3,
			'botanical_name' => 'Pyrus  communis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 109,
			'name' => 'Cherry',
			'product_type_id' => 3,
			'botanical_name' => 'Prunus  cerasus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 110,
			'name' => 'Malta',
			'product_type_id' => 3,
			'botanical_name' => 'C. sinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 111,
			'name' => 'Pomegranate',
			'product_type_id' => 3,
			'botanical_name' => 'Punica  granatum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 112,
			'name' => 'Jujube',
			'product_type_id' => 3,
			'botanical_name' => 'Zizyphus mauritiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 09:06:07',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 113,
			'name' => 'Litchi',
			'product_type_id' => 3,
			'botanical_name' => 'Litchi chinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 114,
			'name' => 'Apricot',
			'product_type_id' => 3,
			'botanical_name' => 'Prunus  armeniaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 115,
			'name' => 'Satkara',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 116,
			'name' => 'Date palm',
			'product_type_id' => 3,
			'botanical_name' => 'Phoenix  dactylifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 117,
			'name' => 'Tamarind',
			'product_type_id' => 3,
			'botanical_name' => 'Tamarindus indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 118,
			'name' => 'Peach',
			'product_type_id' => 3,
			'botanical_name' => 'Prunus persica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 119,
			'name' => 'Potato ',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 120,
			'name' => 'Capsicum',
			'product_type_id' => 3,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 121,
			'name' => 'Button Mushroom',
			'product_type_id' => 3,
			'botanical_name' => 'Agaricus bisporus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 122,
			'name' => 'Other',
			'product_type_id' => 3,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 123,
			'name' => 'Onion',
			'product_type_id' => 2,
			'botanical_name' => 'Allium cepa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-21',
			'reason' => 'Real onion ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:37:19',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 124,
			'name' => 'Garlic',
			'product_type_id' => 2,
			'botanical_name' => 'Allium sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 125,
			'name' => 'Lentil',
			'product_type_id' => 2,
			'botanical_name' => 'Lens culinaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 126,
			'name' => 'Green Gram',
			'product_type_id' => 2,
			'botanical_name' => 'Vigna radialor',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 127,
			'name' => 'Pea',
			'product_type_id' => 2,
			'botanical_name' => 'Pisum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 128,
			'name' => 'Grass pea',
			'product_type_id' => 2,
			'botanical_name' => 'Lathyrus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 129,
			'name' => 'Chick pea',
			'product_type_id' => 2,
			'botanical_name' => 'Cicer arietinum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 130,
			'name' => 'Mustard',
			'product_type_id' => 2,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 131,
			'name' => 'Soybean',
			'product_type_id' => 2,
			'botanical_name' => 'Glycine max',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 132,
			'name' => 'Sun Flower ',
			'product_type_id' => 2,
			'botanical_name' => 'Helianthus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 133,
			'name' => 'Til',
			'product_type_id' => 2,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 134,
			'name' => 'Other',
			'product_type_id' => 2,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 135,
			'name' => 'Black Cumin',
			'product_type_id' => 4,
			'botanical_name' => 'Nigella sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 136,
			'name' => 'Cardamom',
			'product_type_id' => 4,
			'botanical_name' => 'Elettaria  cardamomum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 137,
			'name' => 'Betel nut',
			'product_type_id' => 4,
			'botanical_name' => 'Areca catechu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 138,
			'name' => 'Bay Leaf ',
			'product_type_id' => 4,
			'botanical_name' => 'Cinnamomum tamala',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 139,
			'name' => 'Green Chili',
			'product_type_id' => 4,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 140,
			'name' => 'Turmaric',
			'product_type_id' => 4,
			'botanical_name' => 'Curcuma longa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 141,
			'name' => 'test product here 2',
			'product_type_id' => 4,
			'botanical_name' => '----',
			'is_active' => 0,
			'inactivity_to_date' => '2022-09-30',
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'onion is in onion, garlic category. ',
			'certificate_validity_days' => 140,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-24 04:16:49',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 142,
			'name' => 'Cinnamon',
			'product_type_id' => 4,
			'botanical_name' => 'Cinnamomum  cassia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 143,
			'name' => 'na',
			'product_type_id' => 4,
			'botanical_name' => 'na',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 144,
			'name' => 'Clove',
			'product_type_id' => 4,
			'botanical_name' => 'Syzygium aromaticum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 145,
			'name' => 'Ginger',
			'product_type_id' => 4,
			'botanical_name' => 'Zingiber  officinale',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 146,
			'name' => 'Cumin',
			'product_type_id' => 4,
			'botanical_name' => 'Cuminum cyminum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 147,
			'name' => 'Coriander',
			'product_type_id' => 4,
			'botanical_name' => 'Coriandrum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 148,
			'name' => 'Sesame Seed',
			'product_type_id' => 4,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 149,
			'name' => 'Fenugreek',
			'product_type_id' => 4,
			'botanical_name' => 'Trigonella foenum-graecum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 150,
			'name' => 'Small piper',
			'product_type_id' => 4,
			'botanical_name' => 'Piper  nigrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 151,
			'name' => 'Groundnut',
			'product_type_id' => 4,
			'botanical_name' => 'Arachis hypogea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 152,
			'name' => 'Nutmeg',
			'product_type_id' => 4,
			'botanical_name' => 'Myristica  fragrans',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 153,
			'name' => 'Kismis (Raisin)',
			'product_type_id' => 4,
			'botanical_name' => 'Vitis  vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 154,
			'name' => 'Cubeb',
			'product_type_id' => 4,
			'botanical_name' => 'Piper cubeba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 155,
			'name' => 'Fennel',
			'product_type_id' => 4,
			'botanical_name' => 'Foeniculum vulgare',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 156,
			'name' => 'Mace',
			'product_type_id' => 4,
			'botanical_name' => 'Myristica sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 157,
			'name' => 'Other',
			'product_type_id' => 4,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 158,
			'name' => 'Cotton',
			'product_type_id' => 5,
			'botanical_name' => 'Gossypium spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 159,
			'name' => 'Other',
			'product_type_id' => 5,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 160,
			'name' => 'Gladiolus',
			'product_type_id' => 9,
			'botanical_name' => 'Gladiolus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 161,
			'name' => 'Maize',
			'product_type_id' => 9,
			'botanical_name' => 'Zea mays Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 162,
			'name' => 'Chick pea',
			'product_type_id' => 9,
			'botanical_name' => 'Cicer arietinum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 163,
			'name' => 'Mustard',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 164,
			'name' => 'Pea',
			'product_type_id' => 9,
			'botanical_name' => 'Pisum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 165,
			'name' => 'Ash gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Benincasa hispida',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 166,
			'name' => 'Sun Flower',
			'product_type_id' => 9,
			'botanical_name' => 'Helianthus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 167,
			'name' => 'Cow Pea',
			'product_type_id' => 9,
			'botanical_name' => 'Vigna spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 168,
			'name' => 'Ridge gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Luffa acutangula',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 169,
			'name' => 'n/a',
			'product_type_id' => 9,
			'botanical_name' => 'xxx',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 170,
			'name' => 'Sweet Gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Cucurbita maxima',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 171,
			'name' => 'Tomato',
			'product_type_id' => 9,
			'botanical_name' => 'Lycopersicon esculentum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-31',
			'reason' => 'restricted in ip',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:41:26',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 172,
			'name' => 'Carrot',
			'product_type_id' => 9,
			'botanical_name' => 'Daucus carota',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 173,
			'name' => 'Pumpkin',
			'product_type_id' => 9,
			'botanical_name' => 'Cucurbita moschata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 174,
			'name' => 'Lettuce',
			'product_type_id' => 9,
			'botanical_name' => 'Lactuca sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 175,
			'name' => 'Bitter Gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Momordica charantia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 176,
			'name' => 'Kohlrabi',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica oleracea variety gongylodes',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 177,
			'name' => 'Bottle gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Lagenaria leucantha',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 178,
			'name' => 'Radish',
			'product_type_id' => 9,
			'botanical_name' => 'Raphanus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 179,
			'name' => 'Cucumber',
			'product_type_id' => 9,
			'botanical_name' => 'Cucumis sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 180,
			'name' => 'Cauliflower',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica oleracea var. botrytis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 181,
			'name' => 'Brinjal',
			'product_type_id' => 9,
			'botanical_name' => 'Solanum melongena',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 182,
			'name' => 'Yard long bean',
			'product_type_id' => 9,
			'botanical_name' => 'Vigna unguiculata ssp. sesquipedalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 183,
			'name' => 'Cabbage',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica oleracea var. capitata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 184,
			'name' => 'Okra',
			'product_type_id' => 9,
			'botanical_name' => 'Abelmoschus esculentus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 185,
			'name' => 'Other',
			'product_type_id' => 9,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 186,
			'name' => 'Potato ',
			'product_type_id' => 10,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 187,
			'name' => 'Other',
			'product_type_id' => 10,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 188,
			'name' => 'Onion Powder',
			'product_type_id' => 11,
			'botanical_name' => 'Allium cepa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 189,
			'name' => 'Dried Distillers Grains with Solubles',
			'product_type_id' => 1,
			'botanical_name' => 'Zea mays L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 190,
			'name' => 'Potato flakes ',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 191,
			'name' => 'Other',
			'product_type_id' => 11,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 192,
			'name' => 'Jute',
			'product_type_id' => null,
			'botanical_name' => 'Corchorcus olitorius',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 193,
			'name' => 'Other',
			'product_type_id' => null,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 194,
			'name' => 'Jute',
			'product_type_id' => null,
			'botanical_name' => 'Corchorcus olitorius',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 195,
			'name' => 'Other',
			'product_type_id' => null,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 196,
			'name' => 'Rice',
			'product_type_id' => null,
			'botanical_name' => 'Oryza Sativa linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 197,
			'name' => 'Flour',
			'product_type_id' => null,
			'botanical_name' => 'Tricticum aestivum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 198,
			'name' => 'Other',
			'product_type_id' => null,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 199,
			'name' => 'Sesame',
			'product_type_id' => null,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 200,
			'name' => 'Other',
			'product_type_id' => null,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 201,
			'name' => 'Wooden Pallets',
			'product_type_id' => 25,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 202,
			'name' => 'Wooden Furniture',
			'product_type_id' => 25,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 203,
			'name' => 'Coconut ',
			'product_type_id' => 32,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 204,
			'name' => 'Date palm',
			'product_type_id' => 32,
			'botanical_name' => 'Phoenix  dactylifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 205,
			'name' => 'Flower Plant',
			'product_type_id' => 32,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 206,
			'name' => 'Ornamental plants',
			'product_type_id' => 32,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 207,
			'name' => 'Pump Tree',
			'product_type_id' => 32,
			'botanical_name' => 'Arecaceae',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 208,
			'name' => 'Christmas Tree',
			'product_type_id' => 32,
			'botanical_name' => 'Araucaria columnaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 209,
			'name' => 'Fruits Plant',
			'product_type_id' => 32,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 210,
			'name' => 'Gladiolus',
			'product_type_id' => 32,
			'botanical_name' => 'Gladiolus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 211,
			'name' => 'Orchid ',
			'product_type_id' => 32,
			'botanical_name' => 'Aranda sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 212,
			'name' => 'Zerbeera',
			'product_type_id' => 32,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 213,
			'name' => 'Rice',
			'product_type_id' => 32,
			'botanical_name' => 'Oryza sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 214,
			'name' => 'Tomato',
			'product_type_id' => 32,
			'botanical_name' => 'Lycopersicon esculentum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 215,
			'name' => 'Wheat',
			'product_type_id' => 32,
			'botanical_name' => 'Tricticum aestivum Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 216,
			'name' => 'Maize',
			'product_type_id' => 32,
			'botanical_name' => 'Zea mays Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 217,
			'name' => 'Carrot',
			'product_type_id' => 32,
			'botanical_name' => 'Daucus carota',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 218,
			'name' => 'Sorghum',
			'product_type_id' => 32,
			'botanical_name' => 'Sorghum vulgare',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 219,
			'name' => 'Pumpkin',
			'product_type_id' => 32,
			'botanical_name' => 'Cucurbita moschata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 220,
			'name' => 'Barley Grain ',
			'product_type_id' => 32,
			'botanical_name' => 'Maranta sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 221,
			'name' => 'Bean',
			'product_type_id' => 32,
			'botanical_name' => 'Dolichos lablab',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 222,
			'name' => 'Sago',
			'product_type_id' => 32,
			'botanical_name' => 'Metroxylon sagu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 223,
			'name' => 'Papaya',
			'product_type_id' => 32,
			'botanical_name' => 'Carica papaya',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 224,
			'name' => 'Radish',
			'product_type_id' => 32,
			'botanical_name' => 'Raphanus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 225,
			'name' => 'Apple',
			'product_type_id' => 32,
			'botanical_name' => 'Malus sylvestris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 226,
			'name' => 'Cauliflower',
			'product_type_id' => 32,
			'botanical_name' => 'Brassica oleracea var. botrytis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 227,
			'name' => 'Cabbage',
			'product_type_id' => 32,
			'botanical_name' => 'Brassica oleracea var. capitata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 228,
			'name' => 'Okra',
			'product_type_id' => 32,
			'botanical_name' => 'Abelmoschus esculentus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 229,
			'name' => 'Orange',
			'product_type_id' => 32,
			'botanical_name' => 'Citrus raticulata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 230,
			'name' => 'Grape',
			'product_type_id' => 32,
			'botanical_name' => 'Vitis vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 231,
			'name' => 'Pear',
			'product_type_id' => 32,
			'botanical_name' => 'Pyrus communis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 232,
			'name' => 'Cherry',
			'product_type_id' => 32,
			'botanical_name' => 'Prunus cerasus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 233,
			'name' => 'Malta',
			'product_type_id' => 32,
			'botanical_name' => 'C.sinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 234,
			'name' => 'Pomegranate',
			'product_type_id' => 32,
			'botanical_name' => 'Punica granatum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 235,
			'name' => 'Jujube',
			'product_type_id' => 32,
			'botanical_name' => 'Ziziphus mauritiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 236,
			'name' => 'Litchi',
			'product_type_id' => 32,
			'botanical_name' => 'Litchi chinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 237,
			'name' => 'Apricot',
			'product_type_id' => 32,
			'botanical_name' => 'Prunus armeniaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 238,
			'name' => 'Satkara',
			'product_type_id' => 32,
			'botanical_name' => 'Citrus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 239,
			'name' => 'Tamarind',
			'product_type_id' => 32,
			'botanical_name' => 'Tamarindus indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 240,
			'name' => 'Lentil',
			'product_type_id' => 32,
			'botanical_name' => 'Lens culinaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 241,
			'name' => 'Chick pea',
			'product_type_id' => 32,
			'botanical_name' => 'Cicer arietinum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 242,
			'name' => 'Peach',
			'product_type_id' => 32,
			'botanical_name' => 'Prunus persica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 243,
			'name' => 'Mustard',
			'product_type_id' => 32,
			'botanical_name' => 'Bracissca napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 244,
			'name' => 'Til',
			'product_type_id' => 32,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 245,
			'name' => 'Potato',
			'product_type_id' => 32,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 246,
			'name' => 'Yard long bean',
			'product_type_id' => 32,
			'botanical_name' => 'Vigna unguiculata ssp. sesquipedalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 247,
			'name' => 'Capsicum',
			'product_type_id' => 32,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 248,
			'name' => 'Mushroom',
			'product_type_id' => 32,
			'botanical_name' => 'Mushroom sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 249,
			'name' => 'Brinjal',
			'product_type_id' => 32,
			'botanical_name' => 'Solanum melongena',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 250,
			'name' => 'Onion',
			'product_type_id' => 32,
			'botanical_name' => 'Allium cepa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 251,
			'name' => 'Cucumber',
			'product_type_id' => 32,
			'botanical_name' => 'Cucumis sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 252,
			'name' => 'Garlic ',
			'product_type_id' => 32,
			'botanical_name' => 'Allium sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 253,
			'name' => 'Green Gram',
			'product_type_id' => 32,
			'botanical_name' => 'Vigna radialor',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 254,
			'name' => 'Pea',
			'product_type_id' => 32,
			'botanical_name' => 'Pisum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 255,
			'name' => 'Bottle gourd',
			'product_type_id' => 32,
			'botanical_name' => 'Lagenaria leucantha',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 256,
			'name' => 'Grass pea',
			'product_type_id' => 32,
			'botanical_name' => 'Lathyrus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 257,
			'name' => 'Bitter gourd ',
			'product_type_id' => 32,
			'botanical_name' => 'Momordica charantia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 258,
			'name' => 'Sweet Gourd',
			'product_type_id' => 32,
			'botanical_name' => 'Cucarbita maxima',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 259,
			'name' => 'Ridge Gourd',
			'product_type_id' => 32,
			'botanical_name' => 'Luffa acutangula',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 260,
			'name' => 'Soybean ',
			'product_type_id' => 32,
			'botanical_name' => 'Glycine max',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 261,
			'name' => 'Ash Gourd',
			'product_type_id' => 32,
			'botanical_name' => 'Benincasa hispida',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 262,
			'name' => 'Sun Flower',
			'product_type_id' => 32,
			'botanical_name' => 'Helianthus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 263,
			'name' => 'Cotton',
			'product_type_id' => 32,
			'botanical_name' => 'Gossypium sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 264,
			'name' => 'Black Cumin',
			'product_type_id' => 32,
			'botanical_name' => 'Nigella sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 265,
			'name' => 'Cardamom',
			'product_type_id' => 32,
			'botanical_name' => 'Elettaria cardamomum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 266,
			'name' => 'Cinnamon ',
			'product_type_id' => 32,
			'botanical_name' => 'Cinnamomum cassia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 267,
			'name' => 'Clove',
			'product_type_id' => 32,
			'botanical_name' => 'Syzygium aromaticum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 268,
			'name' => 'Cumin',
			'product_type_id' => 32,
			'botanical_name' => 'Cuminum cyminum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 269,
			'name' => 'Pesta',
			'product_type_id' => 32,
			'botanical_name' => 'Pistacia vera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 270,
			'name' => 'Groundnut',
			'product_type_id' => 32,
			'botanical_name' => 'Arachis hypogea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 271,
			'name' => 'Kismis',
			'product_type_id' => 32,
			'botanical_name' => 'Vitis vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 272,
			'name' => 'Fennel',
			'product_type_id' => 32,
			'botanical_name' => 'Vitis vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 273,
			'name' => 'Mace',
			'product_type_id' => 32,
			'botanical_name' => 'Myristica sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 274,
			'name' => 'Cubeb',
			'product_type_id' => 32,
			'botanical_name' => 'Piper cubeba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 275,
			'name' => 'Nutmeg',
			'product_type_id' => 32,
			'botanical_name' => 'Myristica frangrans',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 276,
			'name' => 'Small piper',
			'product_type_id' => 32,
			'botanical_name' => 'Piper nigrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 277,
			'name' => 'Fenugreek',
			'product_type_id' => 32,
			'botanical_name' => 'Trivonella Foenum-graecum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 278,
			'name' => 'Coriander',
			'product_type_id' => 32,
			'botanical_name' => 'Coriandrum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 279,
			'name' => 'Ginger',
			'product_type_id' => 32,
			'botanical_name' => 'Zingiber officinale',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 280,
			'name' => 'Chili',
			'product_type_id' => 32,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 281,
			'name' => 'Bay Leaf',
			'product_type_id' => 32,
			'botanical_name' => 'Cinnamomum tamala',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 282,
			'name' => 'Betel nut',
			'product_type_id' => 32,
			'botanical_name' => 'Areca catechu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 283,
			'name' => 'Soybean Extraction',
			'product_type_id' => 2,
			'botanical_name' => 'Glycine max',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 284,
			'name' => 'NOT_GIVEN1',
			'product_type_id' => null,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 285,
			'name' => 'test1',
			'product_type_id' => 3,
			'botanical_name' => 'testbotani',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'made active',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-04 11:00:56',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 286,
			'name' => 'test2',
			'product_type_id' => null,
			'botanical_name' => 'testbotani',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 287,
			'name' => 'test3',
			'product_type_id' => null,
			'botanical_name' => 'testbotani',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 288,
			'name' => 'test4',
			'product_type_id' => null,
			'botanical_name' => 'testbotani',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 289,
			'name' => 'test5',
			'product_type_id' => 1,
			'botanical_name' => 'testbotani',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 291,
			'name' => 'Jute Products',
			'product_type_id' => 34,
			'botanical_name' => '-',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 292,
			'name' => 'not/a',
			'product_type_id' => 15,
			'botanical_name' => 'not/a',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 293,
			'name' => 'Taro',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 294,
			'name' => 'Pumpkin',
			'product_type_id' => 3,
			'botanical_name' => 'Cucurbita pepo',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H Requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:26:31',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 295,
			'name' => 'Taro stolons',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 296,
			'name' => 'Bitter gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Momordica charantia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 297,
			'name' => 'Broad Beans/Sheem',
			'product_type_id' => 3,
			'botanical_name' => 'Vicia faba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 298,
			'name' => 'Drumstick',
			'product_type_id' => 3,
			'botanical_name' => 'Moringa oleifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 299,
			'name' => 'Aromatic Rice (Chinigura)',
			'product_type_id' => 35,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 300,
			'name' => 'Maize Starch',
			'product_type_id' => 36,
			'botanical_name' => 'Zea mays',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 301,
			'name' => 'Potato Starch',
			'product_type_id' => 36,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 302,
			'name' => 'Rice Starch',
			'product_type_id' => 36,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 303,
			'name' => 'Cassava Starch',
			'product_type_id' => 36,
			'botanical_name' => 'Manihot esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 304,
			'name' => 'Tapioca Starch',
			'product_type_id' => 36,
			'botanical_name' => 'Manihot esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 305,
			'name' => 'Aromatic Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 306,
			'name' => 'Yarn Waste',
			'product_type_id' => 37,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 307,
			'name' => 'Tea',
			'product_type_id' => 38,
			'botanical_name' => 'Camellia sinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 308,
			'name' => 'Broken Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 309,
			'name' => 'Unmanufactured Flue Cured Tobacco ',
			'product_type_id' => 22,
			'botanical_name' => 'Nicotiana tabacum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 310,
			'name' => 'Unmanufactured Tobacco',
			'product_type_id' => 22,
			'botanical_name' => 'Nicotiana tabacum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 311,
			'name' => 'Unmanufactured Dark Air Cured Tobacco',
			'product_type_id' => 22,
			'botanical_name' => 'Nicotiana tabacum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 312,
			'name' => 'Cotton Ruge',
			'product_type_id' => 37,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 313,
			'name' => 'Mushroom Spore with Substrate',
			'product_type_id' => 39,
			'botanical_name' => 'Agaricus bisporus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 314,
			'name' => 'Mushroom Spore',
			'product_type_id' => 39,
			'botanical_name' => 'Agaricus bisporus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 315,
			'name' => 'Mushroom Black Peat',
			'product_type_id' => 39,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 316,
			'name' => 'Ekki Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Lophira alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 317,
			'name' => 'Pine Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Pinus spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 318,
			'name' => 'Azobe Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Lophira alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 319,
			'name' => 'N/a',
			'product_type_id' => 40,
			'botanical_name' => 'n/a',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 320,
			'name' => 'Mandarin',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus reticulata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 321,
			'name' => 'Wheat Flour',
			'product_type_id' => 1,
			'botanical_name' => 'Triticum aestivum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 322,
			'name' => 'Watermelon',
			'product_type_id' => 10,
			'botanical_name' => 'Citrullus lanatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 323,
			'name' => 'Ground nut',
			'product_type_id' => 10,
			'botanical_name' => 'Arachis hypogea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 324,
			'name' => 'Testing',
			'product_type_id' => 2,
			'botanical_name' => 'Testing Botanical Name',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 325,
			'name' => 'Jute (JRO 524)',
			'product_type_id' => 41,
			'botanical_name' => 'Corchorus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 326,
			'name' => 'Kenaf',
			'product_type_id' => 41,
			'botanical_name' => 'Hibiscus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 327,
			'name' => 'N/A',
			'product_type_id' => 41,
			'botanical_name' => 'N/A',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 328,
			'name' => 'Jute (JRO 524)',
			'product_type_id' => 42,
			'botanical_name' => 'Corchorus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 329,
			'name' => 'Kenaf',
			'product_type_id' => 42,
			'botanical_name' => 'Hibiscus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 330,
			'name' => 'Bok choy',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica rapa subsp. chinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 331,
			'name' => 'Marigold',
			'product_type_id' => 9,
			'botanical_name' => 'Tagetes erecta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 332,
			'name' => 'Hybrid Rice: R Line',
			'product_type_id' => 10,
			'botanical_name' => 'Oryza sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 333,
			'name' => 'Maize',
			'product_type_id' => 10,
			'botanical_name' => 'Zea mays',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 334,
			'name' => 'Sorghum',
			'product_type_id' => 10,
			'botanical_name' => 'Sorghum vulgare',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 335,
			'name' => 'Turnip',
			'product_type_id' => 32,
			'botanical_name' => 'Brassica rapa sub sp. Rapa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 336,
			'name' => 'Turnip',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica rapa sub sp. Rapa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 337,
			'name' => 'Beech Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Fagus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 338,
			'name' => 'Other',
			'product_type_id' => 25,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 339,
			'name' => 'n/a',
			'product_type_id' => 4,
			'botanical_name' => 'n/a',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 340,
			'name' => 'Onion Flakes',
			'product_type_id' => 4,
			'botanical_name' => 'Allium cepa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 341,
			'name' => 'Garlic Powder',
			'product_type_id' => 4,
			'botanical_name' => 'Allium sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 342,
			'name' => 'Garlic Flakes',
			'product_type_id' => 4,
			'botanical_name' => 'Allium sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 343,
			'name' => 'Ginger Powder',
			'product_type_id' => 4,
			'botanical_name' => 'Zingiber officinale',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 344,
			'name' => 'Azobe Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Lophira alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 345,
			'name' => 'Azobe Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Lophira alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 346,
			'name' => 'Ekki Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Lophira alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 347,
			'name' => 'Ekki Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Lophira alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 348,
			'name' => 'Basralocus Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Dicorynia guianensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 349,
			'name' => 'Basralocus Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Dicorynia guianensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 350,
			'name' => 'Gmelina Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Gmelina arborea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 351,
			'name' => 'Gmelina Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Gmelina arborea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 352,
			'name' => 'Teak Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Tectona grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 353,
			'name' => 'Teak Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Tectona grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 354,
			'name' => 'Niove Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Staudtia kamerunensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 355,
			'name' => 'Niove Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Staudtia kamerunensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 356,
			'name' => 'Okan Round log',
			'product_type_id' => 40,
			'botanical_name' => 'Cylicodiscus gabunensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 357,
			'name' => 'Okan Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Cylicodiscus gabunensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 358,
			'name' => 'Broccoli',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica oleracea var. italica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 359,
			'name' => 'Broccoli',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica oleracea var. italica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 360,
			'name' => 'Limbali Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Gilbertiodendron sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 361,
			'name' => 'Psyllium Husk',
			'product_type_id' => 4,
			'botanical_name' => 'Plantago ovata Forsk ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 362,
			'name' => 'Kalizira Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 363,
			'name' => 'Aromatic Rice (kalizeera)',
			'product_type_id' => 35,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 364,
			'name' => 'Aromatic Rice',
			'product_type_id' => 35,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 365,
			'name' => 'Walaba Round logs',
			'product_type_id' => 40,
			'botanical_name' => 'Eperua Spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 366,
			'name' => 'Bullet Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Manilkara bidentara',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 367,
			'name' => 'Berg Gronfolo Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Qualea rosea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 368,
			'name' => 'Broccoli',
			'product_type_id' => 32,
			'botanical_name' => 'Brassica oleracea var. italica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 369,
			'name' => 'Linseed',
			'product_type_id' => 2,
			'botanical_name' => 'Linum usitatissimum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 370,
			'name' => 'White pepper',
			'product_type_id' => 4,
			'botanical_name' => 'Piper nigrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 371,
			'name' => 'n/a.',
			'product_type_id' => 4,
			'botanical_name' => 'n/.a',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'another product in same exist',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-21 10:21:20',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 372,
			'name' => 'Black Pepper',
			'product_type_id' => 4,
			'botanical_name' => 'Piper nigrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 373,
			'name' => 'Hybrid Rice: F1',
			'product_type_id' => 10,
			'botanical_name' => 'Oryza sativa linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 374,
			'name' => 'Pearl Millet',
			'product_type_id' => 10,
			'botanical_name' => 'Pennisetum americanum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 375,
			'name' => 'Barley',
			'product_type_id' => 10,
			'botanical_name' => 'Hordeum spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 376,
			'name' => 'Oat',
			'product_type_id' => 10,
			'botanical_name' => 'Avena sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 377,
			'name' => 'Papaya',
			'product_type_id' => 10,
			'botanical_name' => 'Carica papaya',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 378,
			'name' => 'Muskmelon',
			'product_type_id' => 10,
			'botanical_name' => 'Cucumis melo',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 379,
			'name' => 'Cassava',
			'product_type_id' => 10,
			'botanical_name' => 'Manihot esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 380,
			'name' => 'Brussels Sprouts',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica oleracea var. gemmifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 381,
			'name' => 'Squash',
			'product_type_id' => 9,
			'botanical_name' => 'Cucurbita maxima',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 382,
			'name' => 'Sponge gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Luffa aegyptiaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 383,
			'name' => 'Wax gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Benincasa hispida',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 384,
			'name' => 'Carrot',
			'product_type_id' => 3,
			'botanical_name' => 'Daucus carota',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 385,
			'name' => 'Wild Bean',
			'product_type_id' => 9,
			'botanical_name' => 'Phaseolus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 386,
			'name' => 'Wild Bean',
			'product_type_id' => 32,
			'botanical_name' => 'Phaseolus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 387,
			'name' => 'Basil',
			'product_type_id' => 9,
			'botanical_name' => 'Ocimum basilicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 388,
			'name' => 'Chili',
			'product_type_id' => 10,
			'botanical_name' => 'Capsicum frutescens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 389,
			'name' => 'Almond',
			'product_type_id' => 3,
			'botanical_name' => 'Prunus amygdalus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 390,
			'name' => 'Almond',
			'product_type_id' => 32,
			'botanical_name' => 'Prunus amygdalus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 391,
			'name' => 'Aloo Bukhara',
			'product_type_id' => 3,
			'botanical_name' => 'Prunus domestica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 392,
			'name' => 'Aloo Bukhara',
			'product_type_id' => 32,
			'botanical_name' => 'Prunus domestica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 393,
			'name' => 'Pesta',
			'product_type_id' => 3,
			'botanical_name' => 'Pistacia vera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 394,
			'name' => 'Raisin',
			'product_type_id' => 3,
			'botanical_name' => 'Vitis vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 395,
			'name' => 'Ber',
			'product_type_id' => 3,
			'botanical_name' => 'Ziziphus mauritiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 396,
			'name' => 'Avocado',
			'product_type_id' => 3,
			'botanical_name' => 'Persea americana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 397,
			'name' => 'Avocado',
			'product_type_id' => 32,
			'botanical_name' => 'Persea americana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 398,
			'name' => 'Lemon',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus limon',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 399,
			'name' => 'Lime',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus aurantiifolia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 400,
			'name' => 'Grapefruit',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus paradisi',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 401,
			'name' => 'Cocoa',
			'product_type_id' => 3,
			'botanical_name' => 'Theobroma spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 402,
			'name' => 'Dragon fruit',
			'product_type_id' => 3,
			'botanical_name' => 'Hylocereus undatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 403,
			'name' => 'Durian',
			'product_type_id' => 3,
			'botanical_name' => 'Durio zibethinus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 404,
			'name' => 'Kiwi',
			'product_type_id' => 3,
			'botanical_name' => 'Actinidia spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 405,
			'name' => 'Longan',
			'product_type_id' => 3,
			'botanical_name' => 'Dimocarpus longan',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 406,
			'name' => 'Mango',
			'product_type_id' => 3,
			'botanical_name' => 'Mangifera indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-21',
			'reason' => 'restricted for 3 days.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:37:49',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 407,
			'name' => 'Mangosteen',
			'product_type_id' => 3,
			'botanical_name' => 'Garcinia mangostana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 408,
			'name' => 'Rambutan',
			'product_type_id' => 3,
			'botanical_name' => 'Nephelium lappaceum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 409,
			'name' => 'Strawberry',
			'product_type_id' => 3,
			'botanical_name' => 'Fragaria spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 410,
			'name' => 'Plantain Grass',
			'product_type_id' => 32,
			'botanical_name' => 'Plantago lanceolata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 411,
			'name' => 'Keruing wood',
			'product_type_id' => 40,
			'botanical_name' => 'Dipterocarpus sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 412,
			'name' => 'Red oak wood',
			'product_type_id' => 40,
			'botanical_name' => 'Quercus rubra',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 413,
			'name' => 'other',
			'product_type_id' => 32,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 414,
			'name' => 'Cotton',
			'product_type_id' => 10,
			'botanical_name' => 'Gossypium sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 415,
			'name' => 'Coriander',
			'product_type_id' => 10,
			'botanical_name' => 'Coriandrum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 416,
			'name' => 'Dry Chili',
			'product_type_id' => 4,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 417,
			'name' => 'Alubukhara',
			'product_type_id' => 4,
			'botanical_name' => 'Prunus domestica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 418,
			'name' => 'Onion',
			'product_type_id' => 10,
			'botanical_name' => 'Allium cepa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 419,
			'name' => 'Tobacco',
			'product_type_id' => 32,
			'botanical_name' => 'Nicotiana tabacum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 420,
			'name' => 'Unmanufactured Flue Cured Virginia Tobacco Strips',
			'product_type_id' => 22,
			'botanical_name' => 'Nicotiana tabacum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 421,
			'name' => 'Dillenia wood',
			'product_type_id' => 40,
			'botanical_name' => 'Dillenia sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 422,
			'name' => 'Simpoh Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Dillenia sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 423,
			'name' => 'Tomato',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum lycopersicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-31',
			'reason' => 'restricted for 3 days',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:38:29',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 424,
			'name' => 'Mung bean',
			'product_type_id' => 4,
			'botanical_name' => 'Vigna radiata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 425,
			'name' => 'Rapeseed',
			'product_type_id' => 2,
			'botanical_name' => 'Brassica sp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 426,
			'name' => 'Spinach',
			'product_type_id' => 9,
			'botanical_name' => 'Spinacia oleracea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 427,
			'name' => 'Wamaradan wood log',
			'product_type_id' => 40,
			'botanical_name' => 'Dicorynia  guianensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 428,
			'name' => 'Eucalyptus Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Eucalyptus globulus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 429,
			'name' => 'Sipo Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Entandrophragma utile',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 430,
			'name' => 'Sipo Square Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Entandrophragma utile',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 431,
			'name' => 'Sapele Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Entandrophragma cylindricum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 432,
			'name' => 'Sapele Square Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Entandrophragma cylindricum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 433,
			'name' => 'Tamarind Seed',
			'product_type_id' => 2,
			'botanical_name' => 'Tamarindus indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 434,
			'name' => 'Spruce, Pine, Fir (Lumber)',
			'product_type_id' => 40,
			'botanical_name' => 'Picea spp., Pinus spp., Abies spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 435,
			'name' => 'Black Matpe',
			'product_type_id' => 4,
			'botanical_name' => 'Vigna mungo',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'The name was corrected',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-15 10:30:21',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 436,
			'name' => 'Cassia',
			'product_type_id' => 4,
			'botanical_name' => 'Cinnamomum cassia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 437,
			'name' => 'Dates',
			'product_type_id' => 3,
			'botanical_name' => 'Phoenix dactylifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 438,
			'name' => 'Dun Pea',
			'product_type_id' => 4,
			'botanical_name' => 'Pisum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 439,
			'name' => 'Cabbage',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica oleracea var. capitata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 440,
			'name' => 'Cauliflower',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica oleracea botrytis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 11:52:10',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 441,
			'name' => 'Betel Leaf',
			'product_type_id' => 4,
			'botanical_name' => 'Piper betle',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-31',
			'reason' => 'restricted',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:39:11',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 442,
			'name' => 'Ayous Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Triplochiton scleroxylon',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 443,
			'name' => 'Ayous Rough Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Triplochiton scleroxylon',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 444,
			'name' => 'Other',
			'product_type_id' => 34,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 445,
			'name' => 'Yemane Roughly Square Log Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Gmelina arborea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 446,
			'name' => 'Yemane Square Log Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Gmelina arborea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 447,
			'name' => 'Yemane Round Log Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Gmelina arborea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 448,
			'name' => 'Gurjun Round Log Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Dipterocarpus turbinatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 449,
			'name' => 'Gurjun Square Log Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Dipterocarpus turbinatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 450,
			'name' => 'Gurjun Roughly Square Log Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Dipterocarpus turbinatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 451,
			'name' => 'Chinigura Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 452,
			'name' => 'Fresh Tomato',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum lycopersicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 1,
			'restriction_to_date' => '2021-12-31',
			'reason' => 'Tomato Already in List.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-19 03:40:28',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 453,
			'name' => 'Fresh Dates',
			'product_type_id' => 3,
			'botanical_name' => 'Phoenix dactylifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 454,
			'name' => 'Leafless Dendrobium Orchid',
			'product_type_id' => 6,
			'botanical_name' => 'Dendrobium aphyllum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 455,
			'name' => 'Garlic Flakes',
			'product_type_id' => 11,
			'botanical_name' => 'Allium sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 456,
			'name' => 'Moon Orchid',
			'product_type_id' => 6,
			'botanical_name' => 'Phalaenopsis amabilis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 457,
			'name' => 'Mannii Orchid',
			'product_type_id' => 6,
			'botanical_name' => 'Phalaenopsis mannii',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 458,
			'name' => 'Mysore Orchid',
			'product_type_id' => 6,
			'botanical_name' => 'Phalaenopsis mysorensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 459,
			'name' => 'Doritis Orchid',
			'product_type_id' => 6,
			'botanical_name' => 'Doritis pulcherrima',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 460,
			'name' => 'Corn Gluten Meal',
			'product_type_id' => 1,
			'botanical_name' => 'Zea mays L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 461,
			'name' => 'Raisins',
			'product_type_id' => 4,
			'botanical_name' => 'Vitis  vinifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 462,
			'name' => 'Leek',
			'product_type_id' => 4,
			'botanical_name' => 'Allium ampeloprasum L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 463,
			'name' => 'Shallot',
			'product_type_id' => 4,
			'botanical_name' => 'Allium cepa var. aggregatum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 464,
			'name' => 'Joss Powder',
			'product_type_id' => 40,
			'botanical_name' => 'Litsea glutinosa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 465,
			'name' => 'Palm Oil Extraction',
			'product_type_id' => 11,
			'botanical_name' => 'Elaeis guineensis Jacq.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 466,
			'name' => 'Rapeseed Extraction',
			'product_type_id' => 11,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 467,
			'name' => 'Amloki',
			'product_type_id' => 43,
			'botanical_name' => 'Emblica officinalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 468,
			'name' => 'Ashok',
			'product_type_id' => 43,
			'botanical_name' => 'Saraca Asoca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 469,
			'name' => 'Aswagandha',
			'product_type_id' => 43,
			'botanical_name' => 'Withania somnifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 470,
			'name' => 'Bael',
			'product_type_id' => 43,
			'botanical_name' => 'Aegle marmelous',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 471,
			'name' => 'Rose',
			'product_type_id' => 43,
			'botanical_name' => 'Rosa spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 472,
			'name' => 'Hyptis (tokma)',
			'product_type_id' => 43,
			'botanical_name' => 'Hyptis suaveolens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 473,
			'name' => 'Galanga',
			'product_type_id' => 43,
			'botanical_name' => 'Alpinia galanga',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 474,
			'name' => 'Ceylon leadwort',
			'product_type_id' => 43,
			'botanical_name' => 'Plumbago zeylanica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 475,
			'name' => 'Kokilaksah (Talmakhna)',
			'product_type_id' => 43,
			'botanical_name' => 'Asteracantha longifolia (Hygrophila auriculata)',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 476,
			'name' => 'Tukchini (Karbi)',
			'product_type_id' => 43,
			'botanical_name' => 'Smilax glabra',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 477,
			'name' => 'Tragacanth Gum',
			'product_type_id' => 43,
			'botanical_name' => 'Astragalus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 478,
			'name' => 'Chebulic myrobalan (Horitoki)',
			'product_type_id' => 43,
			'botanical_name' => 'Terminalia chebula',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 479,
			'name' => 'Bhui Amla',
			'product_type_id' => 43,
			'botanical_name' => 'Phyllanthus amarus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 480,
			'name' => 'Brahmi',
			'product_type_id' => 43,
			'botanical_name' => 'Bacopa monnieri',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 481,
			'name' => 'Chirata',
			'product_type_id' => 43,
			'botanical_name' => 'Swertia chirata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 482,
			'name' => 'Gymnema',
			'product_type_id' => 43,
			'botanical_name' => 'Gymnema sylvestre',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 483,
			'name' => 'Indian bdellium (guggul)',
			'product_type_id' => 43,
			'botanical_name' => 'Commiphora wightii',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 484,
			'name' => 'Gulancha',
			'product_type_id' => 43,
			'botanical_name' => 'Tinospora cordifolia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 485,
			'name' => 'Glory lily (ulot chondal)',
			'product_type_id' => 43,
			'botanical_name' => 'Gloriosa superba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 486,
			'name' => 'Kalmegh (Bhui neem)',
			'product_type_id' => 43,
			'botanical_name' => 'Andrographis paniculata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 487,
			'name' => 'Copra',
			'product_type_id' => 11,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 488,
			'name' => 'Ash Wood Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Fraxinus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 489,
			'name' => 'Ash Wood Square Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Fraxinus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 490,
			'name' => 'Mustard Oil Cake',
			'product_type_id' => 11,
			'botanical_name' => 'Brassica spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 491,
			'name' => 'Rape seed extract',
			'product_type_id' => 11,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 492,
			'name' => 'Khaya Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Khaya anthotheca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 493,
			'name' => 'Khaya Roughly Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Khaya anthotheca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 494,
			'name' => 'Iroko Round Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Milicia excelsa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 495,
			'name' => 'Iroko Roughly Logs',
			'product_type_id' => 40,
			'botanical_name' => 'Milicia excelsa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 496,
			'name' => 'Cotton Seed Extraction',
			'product_type_id' => 11,
			'botanical_name' => 'Gossypium spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 497,
			'name' => 'Wooden Pallets ',
			'product_type_id' => 44,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 498,
			'name' => 'Wooden Furniture',
			'product_type_id' => 45,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 499,
			'name' => 'Other',
			'product_type_id' => 45,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 500,
			'name' => 'Snake Gourd',
			'product_type_id' => 9,
			'botanical_name' => 'Trichosanthes cucumerina',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 501,
			'name' => 'Frozen fruits and vegetable',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 503,
			'name' => 'Marigold',
			'product_type_id' => 8,
			'botanical_name' => 'Tagetes erecta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 505,
			'name' => 'Rose',
			'product_type_id' => 8,
			'botanical_name' => 'Rosa chinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 507,
			'name' => 'Lily',
			'product_type_id' => 8,
			'botanical_name' => 'Lilium spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 509,
			'name' => 'Easter lily',
			'product_type_id' => 8,
			'botanical_name' => 'Lilium longiflorum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 511,
			'name' => 'Gerbera',
			'product_type_id' => 8,
			'botanical_name' => 'Gerbera jamesonii',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 513,
			'name' => 'Marigold',
			'product_type_id' => 7,
			'botanical_name' => 'Tagetes erecta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 515,
			'name' => 'n/a',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 517,
			'name' => 'Persimmon',
			'product_type_id' => 3,
			'botanical_name' => 'Diospyros kaki',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 519,
			'name' => 'Iceberg Lettuce',
			'product_type_id' => 3,
			'botanical_name' => 'Lactuca sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 521,
			'name' => 'Parsley',
			'product_type_id' => 3,
			'botanical_name' => 'Petroselinum crispum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 523,
			'name' => 'Asparagus',
			'product_type_id' => 3,
			'botanical_name' => 'Asparagus officinalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 525,
			'name' => 'Celery ',
			'product_type_id' => 3,
			'botanical_name' => 'Apium graveolens ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 527,
			'name' => 'lemongrass',
			'product_type_id' => null,
			'botanical_name' => 'Cymbopogon schoenanthus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 529,
			'name' => 'Bok choy',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica rapa subsp. chinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 531,
			'name' => 'Cherry Tomato',
			'product_type_id' => null,
			'botanical_name' => 'Solanum lycopersicum var. cerasiforme',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 533,
			'name' => 'Birch Wood',
			'product_type_id' => 40,
			'botanical_name' => 'Betula spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 535,
			'name' => 'Black Pepper Powder',
			'product_type_id' => 4,
			'botanical_name' => 'Piper nigrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 537,
			'name' => 'Walnut Shell Grit',
			'product_type_id' => 11,
			'botanical_name' => 'Juglans regia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 539,
			'name' => 'Black Pepper Powder',
			'product_type_id' => 11,
			'botanical_name' => 'Piper nigrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 541,
			'name' => 'Bohera',
			'product_type_id' => 43,
			'botanical_name' => 'Terminalia bellirica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 543,
			'name' => 'Onggok Starch Powder',
			'product_type_id' => 1,
			'botanical_name' => 'Manihot esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 545,
			'name' => 'Vidarikand (dry)',
			'product_type_id' => 43,
			'botanical_name' => 'Pueraria tuberosa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 547,
			'name' => 'Shimul mul (dry)',
			'product_type_id' => 43,
			'botanical_name' => 'Bombax ceiba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 549,
			'name' => 'Dhai Ful',
			'product_type_id' => 43,
			'botanical_name' => 'Woodfordia fruticosa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 551,
			'name' => 'Jute',
			'product_type_id' => 47,
			'botanical_name' => 'Corchorcus olitorius',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'updated  botanical name',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-26 04:36:29',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 553,
			'name' => 'Other',
			'product_type_id' => 47,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 555,
			'name' => 'Raw Jute',
			'product_type_id' => 49,
			'botanical_name' => 'Corchorus Species',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Botanical Name updated ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-09 05:43:39',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 557,
			'name' => 'Other',
			'product_type_id' => 49,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 559,
			'name' => 'Sensitive Plant (Lajjabati)',
			'product_type_id' => 43,
			'botanical_name' => 'Mimosa pudica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 561,
			'name' => 'Ajwain',
			'product_type_id' => 43,
			'botanical_name' => 'Carum copticum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 563,
			'name' => 'Behen',
			'product_type_id' => 43,
			'botanical_name' => 'Centaurea behen Linn.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 565,
			'name' => 'Embelia (false black pepper)',
			'product_type_id' => 43,
			'botanical_name' => 'Embelia ribes',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 567,
			'name' => 'Curry Leaf',
			'product_type_id' => 43,
			'botanical_name' => 'Murraya koenigii',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 569,
			'name' => 'Caltrop',
			'product_type_id' => 43,
			'botanical_name' => 'Tribulus terrestris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 571,
			'name' => 'Palmyra palm log',
			'product_type_id' => 40,
			'botanical_name' => 'Borassus flabellifer',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 573,
			'name' => 'Wheat bran',
			'product_type_id' => 1,
			'botanical_name' => 'Triticum aestivum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 575,
			'name' => 'Holy Basil Leaf',
			'product_type_id' => 43,
			'botanical_name' => 'Ocimum tenuiflorum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 577,
			'name' => 'Holy Basil Seed',
			'product_type_id' => 43,
			'botanical_name' => 'Ocimum tenuiflorum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 579,
			'name' => 'RED MERANTI TIMBER',
			'product_type_id' => 40,
			'botanical_name' => 'Shorea siamensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 581,
			'name' => 'Jute (JRO 524)',
			'product_type_id' => 51,
			'botanical_name' => 'Corchorus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Deadline of Application',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-23 12:10:45',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 583,
			'name' => 'Jute (JRO 524)',
			'product_type_id' => 53,
			'botanical_name' => 'Corchorus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Deadline of Application',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-23 12:11:12',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 585,
			'name' => 'Kenaf',
			'product_type_id' => 55,
			'botanical_name' => 'Hibiscus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Deadline of Application',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-21 11:34:26',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 587,
			'name' => 'Kenaf',
			'product_type_id' => 57,
			'botanical_name' => 'Hibiscus spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Deadline of Application',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-21 11:34:50',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 589,
			'name' => 'Murmuriya (mundi)',
			'product_type_id' => 43,
			'botanical_name' => 'Sphaeranthus indicus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 591,
			'name' => 'Pennywort (thankuni)',
			'product_type_id' => 43,
			'botanical_name' => 'Centella asiatica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 593,
			'name' => 'Lodh Bark',
			'product_type_id' => 43,
			'botanical_name' => 'Symplocos racemosa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 595,
			'name' => 'Nux-vomica (Kuchila)',
			'product_type_id' => 43,
			'botanical_name' => 'Strychnos nux-vomica L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 597,
			'name' => 'Soyabean Seed Extraction',
			'product_type_id' => 11,
			'botanical_name' => 'Glycine max',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 599,
			'name' => 'Dendrobium',
			'product_type_id' => 6,
			'botanical_name' => 'Dendrobium spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 601,
			'name' => 'Oncidium',
			'product_type_id' => 6,
			'botanical_name' => 'Oncidium spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 603,
			'name' => 'Phalaenopsis',
			'product_type_id' => 6,
			'botanical_name' => 'Phalaenopsis spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 605,
			'name' => 'Rhynchostylis',
			'product_type_id' => 6,
			'botanical_name' => 'Rhynchostylis spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 607,
			'name' => 'Catasetum',
			'product_type_id' => 6,
			'botanical_name' => 'Catasetum spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 609,
			'name' => 'Gurjan wood veneer',
			'product_type_id' => 40,
			'botanical_name' => 'Dipterocarpus turbinatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 611,
			'name' => 'Burma teak wood veneer',
			'product_type_id' => 40,
			'botanical_name' => 'Tectona grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 613,
			'name' => 'Red oak wood veneer',
			'product_type_id' => 40,
			'botanical_name' => 'Quercus spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 615,
			'name' => 'Teak Wood Veneer',
			'product_type_id' => null,
			'botanical_name' => 'Tectona grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 617,
			'name' => 'Garlic Powder',
			'product_type_id' => 11,
			'botanical_name' => 'Allium sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 619,
			'name' => 'Ginger Powder',
			'product_type_id' => 11,
			'botanical_name' => 'Zingiber officinale',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 621,
			'name' => 'Other',
			'product_type_id' => 43,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 623,
			'name' => 'Yellow Pea',
			'product_type_id' => 2,
			'botanical_name' => 'Lathyrus aphaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 625,
			'name' => 'Red Chili Flakes',
			'product_type_id' => 4,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 627,
			'name' => 'Hybrid Rice: A Line',
			'product_type_id' => 10,
			'botanical_name' => 'Oryza sativa Linn',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 629,
			'name' => 'Gurjun Wodden Sleeper',
			'product_type_id' => 40,
			'botanical_name' => 'Dipterocarpus turbinatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 635,
			'name' => 'Tali Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Erythrophleum suaveolens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 637,
			'name' => 'Bilinga Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Nauclea gilletti',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 639,
			'name' => 'Rambutan',
			'product_type_id' => 6,
			'botanical_name' => 'Nephelium lappaceum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 641,
			'name' => 'Durian',
			'product_type_id' => 6,
			'botanical_name' => 'Durio spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 643,
			'name' => 'Avocado',
			'product_type_id' => 6,
			'botanical_name' => 'Persea americana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 645,
			'name' => 'De Oil Rice Bran Extraction',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 647,
			'name' => 'Teak Wood Veneer',
			'product_type_id' => 40,
			'botanical_name' => 'Tectona grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 649,
			'name' => 'Mahogany Wood Veneer',
			'product_type_id' => 40,
			'botanical_name' => 'Swietenia macrophylla',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 651,
			'name' => 'Tapioca Residue Pellets',
			'product_type_id' => 3,
			'botanical_name' => 'Manihot esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 653,
			'name' => 'Sweet Pepper',
			'product_type_id' => 10,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 655,
			'name' => 'Henna Powder',
			'product_type_id' => 11,
			'botanical_name' => 'Lawsonia inermis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => null,
			'updated_by' => null
		]);

		DB::table('products')->insert([
			'id' => 657,
			'name' => 'Long Grain Basmoti Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-16 06:45:23',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 659,
			'name' => 'Aucoumea Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Aucoumea klaineana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Reference to the application of G.M Trade International dated 23/11/2020 which was docketed vide 31945 date 23/11/2020. ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 04:46:54',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 661,
			'name' => 'Kangkong',
			'product_type_id' => 9,
			'botanical_name' => 'Ipomoea aquatica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'On the request of DD Export dated on 29/11/2020 over phone call',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 04:51:24',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 663,
			'name' => 'Pine Nut Kernels',
			'product_type_id' => 59,
			'botanical_name' => 'Pinus lambertiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Nut Category specified',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:00:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 665,
			'name' => 'Pine Nut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Pinus lambertiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Nut category specified',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:01:36',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 667,
			'name' => 'Pecan Nut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Carya illinoinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Nut category specified',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:03:34',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 669,
			'name' => 'Pecan Nut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Carya illinoinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:03:59',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 671,
			'name' => 'Pili Nut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Canarium ovatum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:09:09',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 673,
			'name' => 'Pili Nut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Canarium ovatum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:09:34',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 675,
			'name' => 'Macadamia Nut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Macadamia spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:14:04',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 677,
			'name' => 'Macadamia Nut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Macadamia spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:17:52',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 679,
			'name' => 'Chestnut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Castanea dentata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:19:36',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 681,
			'name' => 'Chestnut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Castanea dentata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:20:58',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 683,
			'name' => 'Pistachio Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Pistacia vera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-30 12:57:31',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 685,
			'name' => 'Pistachio with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Pistacia vera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:24:53',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 687,
			'name' => 'Almond',
			'product_type_id' => 59,
			'botanical_name' => 'Prunus amygdalus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:28:08',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 689,
			'name' => 'Almond with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Prunus amygdalus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 05:27:37',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 691,
			'name' => 'Cashew Nut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Anacardium occidentale L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-30 12:55:08',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 693,
			'name' => 'Cashew Nut With Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Anacardium occidentale L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:24:29',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 695,
			'name' => 'Peanut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Arachis hypogaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:26:30',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 697,
			'name' => 'Peanut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Arachis hypogaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:28:09',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 699,
			'name' => 'Groundnut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Arachis hypogaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:28:37',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 701,
			'name' => 'Groundnut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Arachis hypogaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:29:09',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 703,
			'name' => 'Walnut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Juglans regia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-30 12:58:00',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 705,
			'name' => 'Walnut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Juglans regia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:30:23',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 707,
			'name' => 'Hazelnut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Corylus avellana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-30 12:56:50',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 709,
			'name' => 'Hazelnut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Corylus avellana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:32:10',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 711,
			'name' => 'Brazil Nut Kernel',
			'product_type_id' => 59,
			'botanical_name' => 'Bertholletia excelsa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-30 12:56:16',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 713,
			'name' => 'Brazil Nut with Shell',
			'product_type_id' => 59,
			'botanical_name' => 'Bertholletia excelsa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'nut',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-11-29 09:33:28',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 715,
			'name' => 'Tomato Powder',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum lycopersicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-20 03:08:50',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 717,
			'name' => 'Kinnow',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus reticulata cv. Kinnow',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-23 02:54:38',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 719,
			'name' => 'WOOD ICE CREAM SPOON',
			'product_type_id' => 40,
			'botanical_name' => 'Betula spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2020-12-29 02:35:45',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 721,
			'name' => 'test p1',
			'product_type_id' => 4,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'test',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-13 01:20:54',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 723,
			'name' => 'Bottle Gourd Kernel',
			'product_type_id' => 11,
			'botanical_name' => 'Lagenaria siceraria',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'product was absent ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-14 01:41:32',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 725,
			'name' => 'Foxtail millet',
			'product_type_id' => 1,
			'botanical_name' => 'Setaria italica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:49:00',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 727,
			'name' => 'Crape jasmine',
			'product_type_id' => 7,
			'botanical_name' => 'Tabernaemontana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:50:38',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 729,
			'name' => 'Dry plum',
			'product_type_id' => 26,
			'botanical_name' => 'Zizyphus mauritiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:53:14',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 731,
			'name' => 'Dry chilli',
			'product_type_id' => 26,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:55:03',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 733,
			'name' => 'Dry mango',
			'product_type_id' => 26,
			'botanical_name' => 'Mangifera indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:56:01',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 735,
			'name' => 'Molasses',
			'product_type_id' => 26,
			'botanical_name' => 'Saccharum officinarum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:57:01',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 737,
			'name' => 'Ground nut',
			'product_type_id' => 26,
			'botanical_name' => 'Arachis hypogaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:58:19',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 739,
			'name' => 'Dry country bean seeds',
			'product_type_id' => 26,
			'botanical_name' => 'Lablab purpureus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 10:59:32',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 741,
			'name' => 'Red chilli powder',
			'product_type_id' => 26,
			'botanical_name' => 'Capsicum sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:03:05',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 743,
			'name' => 'Vermicelli',
			'product_type_id' => 26,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:04:03',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 745,
			'name' => 'Puffed rice',
			'product_type_id' => 26,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:04:49',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 747,
			'name' => 'Dry tamarind',
			'product_type_id' => 25,
			'botanical_name' => 'Tamarindus indicus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:05:32',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 749,
			'name' => 'Bori',
			'product_type_id' => 26,
			'botanical_name' => 'Vigna mungo',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:06:14',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 751,
			'name' => 'Jackfruit',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:09:13',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 753,
			'name' => 'Pineapple',
			'product_type_id' => 3,
			'botanical_name' => 'Ananas sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:10:26',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 755,
			'name' => 'Burmese grape',
			'product_type_id' => 3,
			'botanical_name' => 'Baccaurea  sapida',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:06:40',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 757,
			'name' => 'Hog plum',
			'product_type_id' => 3,
			'botanical_name' => 'Spondius pinnata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 08:53:38',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 759,
			'name' => 'Guava',
			'product_type_id' => 3,
			'botanical_name' => 'Psidium guajava',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:12:48',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 761,
			'name' => 'Carambola',
			'product_type_id' => 3,
			'botanical_name' => 'Averrhoa carambola',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:13:27',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 763,
			'name' => 'Indian dillenia',
			'product_type_id' => 3,
			'botanical_name' => 'Dillenia Indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:14:12',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 765,
			'name' => 'Olive',
			'product_type_id' => 3,
			'botanical_name' => 'Elaeocarpus robustus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:14:42',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 767,
			'name' => 'Elephant foot apple',
			'product_type_id' => 3,
			'botanical_name' => 'Feronia limonia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:16:24',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 769,
			'name' => 'Wood apple',
			'product_type_id' => 3,
			'botanical_name' => 'Aegle marmelos',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:17:47',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 771,
			'name' => 'Sugar cane',
			'product_type_id' => 3,
			'botanical_name' => 'Saccharum officinarum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:18:23',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 773,
			'name' => 'Shaddock',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:19:07',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 775,
			'name' => 'Aonla',
			'product_type_id' => 3,
			'botanical_name' => 'Phyllanthus emblica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:19:42',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 777,
			'name' => 'Blackberry',
			'product_type_id' => 3,
			'botanical_name' => 'Syzygium grandis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:20:22',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 779,
			'name' => 'Custard apple',
			'product_type_id' => 3,
			'botanical_name' => 'Annona carambola',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:21:05',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 781,
			'name' => 'Palmyra palm',
			'product_type_id' => 3,
			'botanical_name' => 'Borassus flabellifer',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:21:38',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 783,
			'name' => 'Green coconut',
			'product_type_id' => 3,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:22:19',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 785,
			'name' => 'Star gooseberry',
			'product_type_id' => 3,
			'botanical_name' => 'Phyllanthus acidus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:22:54',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 787,
			'name' => 'Taikar',
			'product_type_id' => 3,
			'botanical_name' => 'Garcinia pedunculata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:23:29',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 789,
			'name' => 'Sapodilla',
			'product_type_id' => 3,
			'botanical_name' => 'Achras sapota',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:24:23',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 791,
			'name' => 'Muskmelon',
			'product_type_id' => 3,
			'botanical_name' => 'Cucumis melo',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:24:54',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 793,
			'name' => 'Sugar-apple',
			'product_type_id' => 3,
			'botanical_name' => 'Annona squamosa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:25:23',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 795,
			'name' => 'Wax apple',
			'product_type_id' => 3,
			'botanical_name' => 'syzygium samarangense',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:25:51',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 797,
			'name' => 'Monkey jack',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus lakoocha',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:26:21',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 799,
			'name' => 'Carissa',
			'product_type_id' => 3,
			'botanical_name' => 'Carissa carandas',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:27:27',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 801,
			'name' => 'Velvet apple',
			'product_type_id' => 3,
			'botanical_name' => 'Diospyros blancoi',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:27:58',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 803,
			'name' => 'Yellow mangosteen',
			'product_type_id' => 3,
			'botanical_name' => 'Atractocarpus fitzalanii',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:28:30',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 805,
			'name' => 'Bottle gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Lagenaria sisceraria',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:29:15',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 807,
			'name' => 'Ash gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Benincasa hispida',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:32:34',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 809,
			'name' => 'Snake gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Trichosanthas anguna',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 08:47:58',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 811,
			'name' => 'Ribbed gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Luffa acutangula',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:33:44',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 813,
			'name' => 'Arum',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:34:42',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 815,
			'name' => 'Stolon of colocasia',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:37:50',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 817,
			'name' => 'Pointed gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Trichosanthes dioica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:38:27',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 819,
			'name' => 'Green papaya',
			'product_type_id' => 3,
			'botanical_name' => 'Carica papaya',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:39:10',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 821,
			'name' => 'Green chilli',
			'product_type_id' => 3,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:39:43',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 823,
			'name' => 'Okra',
			'product_type_id' => 3,
			'botanical_name' => 'Abelmoscsus esculentus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:40:29',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 825,
			'name' => 'Plantain',
			'product_type_id' => 3,
			'botanical_name' => 'Musa paradisiaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:41:16',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 827,
			'name' => 'Yard long bean',
			'product_type_id' => 3,
			'botanical_name' => 'Vigna sesquipedalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:42:25',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 829,
			'name' => 'Banana flower',
			'product_type_id' => 3,
			'botanical_name' => 'Musa sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:43:02',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 831,
			'name' => 'Stem of banana',
			'product_type_id' => 3,
			'botanical_name' => 'Musa sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 11:43:36',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 833,
			'name' => 'Cucumber',
			'product_type_id' => 3,
			'botanical_name' => 'Cucumis sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:00:44',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 835,
			'name' => 'Spiny gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Momordica cochinechinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:01:19',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 837,
			'name' => 'Zara lemon',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus medica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing house requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 07:19:27',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 839,
			'name' => 'Spinach',
			'product_type_id' => 3,
			'botanical_name' => 'Spinacia oleracea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:03:34',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 841,
			'name' => 'Stem amaranthus',
			'product_type_id' => 3,
			'botanical_name' => 'Amaranthus virdis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:04:23',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 843,
			'name' => 'Stem amaranthus leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Amaranthus virdis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:04:55',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 845,
			'name' => 'Colocasia leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:05:26',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 847,
			'name' => 'Indian spinach',
			'product_type_id' => 3,
			'botanical_name' => 'Basella alba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:05:59',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 849,
			'name' => 'Cutting of bottle gourd plants',
			'product_type_id' => 3,
			'botanical_name' => 'Lagenaria vulgaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:06:33',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 851,
			'name' => 'Red amaranthus',
			'product_type_id' => 3,
			'botanical_name' => 'Amaranthus tricolor',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:07:04',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 853,
			'name' => 'Jack fruit seeds',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:07:38',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 855,
			'name' => 'Hot Capsicum',
			'product_type_id' => 3,
			'botanical_name' => 'Capsicum sinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'central packing house requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 08:06:55',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 857,
			'name' => 'Country beans',
			'product_type_id' => 3,
			'botanical_name' => 'Lablab purpureus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:08:49',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 859,
			'name' => 'Onion leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Allium cepa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:09:26',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 861,
			'name' => 'Jute leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Corchorus capsularis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:10:01',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 863,
			'name' => 'Country bean seeds',
			'product_type_id' => 3,
			'botanical_name' => 'Lablab purpureus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:13:00',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 865,
			'name' => 'Turnip',
			'product_type_id' => 3,
			'botanical_name' => 'Curcuma longa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:13:47',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 867,
			'name' => 'Mustard leaf',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica Juncea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:14:52',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 869,
			'name' => 'Elephant’s foot yam',
			'product_type_id' => 3,
			'botanical_name' => 'Amorphophallus paeoniifolius',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:15:43',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 871,
			'name' => 'Centella',
			'product_type_id' => 3,
			'botanical_name' => 'Centella asiantica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:16:13',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 873,
			'name' => 'Air potatoes',
			'product_type_id' => 3,
			'botanical_name' => 'Dioscorea bulbifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:16:57',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 875,
			'name' => 'Winged yam',
			'product_type_id' => 3,
			'botanical_name' => 'Dioscorea alata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:18:00',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 877,
			'name' => 'Stem of colocasia',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:18:31',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 879,
			'name' => 'Coriander leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Coriandar sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:19:09',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 881,
			'name' => 'Mushroom',
			'product_type_id' => 3,
			'botanical_name' => 'Agaricus sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:19:53',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 883,
			'name' => 'French beans',
			'product_type_id' => 3,
			'botanical_name' => 'Phaseolus vulgaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:20:31',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 885,
			'name' => 'Sweet potato',
			'product_type_id' => 3,
			'botanical_name' => 'Ipomoea batatas',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:20:58',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 887,
			'name' => 'Green mango',
			'product_type_id' => 3,
			'botanical_name' => 'Mangifera indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:21:29',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 889,
			'name' => 'Baby corn',
			'product_type_id' => 3,
			'botanical_name' => 'Zea mays',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:21:59',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 891,
			'name' => 'Arum flower',
			'product_type_id' => 3,
			'botanical_name' => 'Colocasia spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:22:41',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 893,
			'name' => 'Garcinia',
			'product_type_id' => 3,
			'botanical_name' => 'Garcinia xanthochymus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:23:10',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 895,
			'name' => 'Goosefoot',
			'product_type_id' => 3,
			'botanical_name' => 'Chenopodium sp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:23:42',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 897,
			'name' => 'Water lily',
			'product_type_id' => 3,
			'botanical_name' => 'Nymphaea pubescens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:19:28',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 899,
			'name' => 'Sesame',
			'product_type_id' => 3,
			'botanical_name' => 'Sesamum indicum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:24:56',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 901,
			'name' => 'Giant taro',
			'product_type_id' => 3,
			'botanical_name' => 'Alocasia macrorrhizos',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:25:27',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 903,
			'name' => 'Radish leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Raphanus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:26:00',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 905,
			'name' => 'Roselle leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Hibiscus sabdariffa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:26:28',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 907,
			'name' => 'Green pea',
			'product_type_id' => 3,
			'botanical_name' => 'Pisum sativum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:27:04',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 909,
			'name' => 'Sponge gourd',
			'product_type_id' => 3,
			'botanical_name' => 'luffa cylindrical',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:27:35',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 911,
			'name' => 'Mint leaf',
			'product_type_id' => 3,
			'botanical_name' => 'Mentha',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:28:02',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 913,
			'name' => 'Grasspea',
			'product_type_id' => 3,
			'botanical_name' => 'Lathyrus sativus L.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:28:33',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 915,
			'name' => 'Water spinach',
			'product_type_id' => 3,
			'botanical_name' => 'Ipomoea aquatica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:28:59',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 917,
			'name' => 'Leek',
			'product_type_id' => 3,
			'botanical_name' => 'allium porrum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:29:27',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 919,
			'name' => 'Zucchini',
			'product_type_id' => 3,
			'botanical_name' => 'Cucurbita pepo',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:30:50',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 921,
			'name' => 'Jute Bag',
			'product_type_id' => 13,
			'botanical_name' => 'Corchorus capsularis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:31:53',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 923,
			'name' => 'Neem leaf',
			'product_type_id' => 25,
			'botanical_name' => 'Azadirachta indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:32:42',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 925,
			'name' => 'Wood apple leaf',
			'product_type_id' => 25,
			'botanical_name' => 'Aegle marmelos',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:33:21',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 927,
			'name' => 'Banana leaf',
			'product_type_id' => 25,
			'botanical_name' => 'Musa paradisiaca',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:34:16',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 929,
			'name' => 'Aloe vera',
			'product_type_id' => 25,
			'botanical_name' => 'Aloe vera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:21:54',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 931,
			'name' => 'Arborvitae',
			'product_type_id' => 25,
			'botanical_name' => 'thuja spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:35:28',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 933,
			'name' => 'Betel leaves',
			'product_type_id' => 25,
			'botanical_name' => 'Piper betle',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-13 11:11:47',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 935,
			'name' => 'Betel nuts',
			'product_type_id' => 25,
			'botanical_name' => 'Areca catechu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:36:36',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 937,
			'name' => 'Mango plants',
			'product_type_id' => 6,
			'botanical_name' => 'Mangifera indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:38:03',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 939,
			'name' => 'Guava plants',
			'product_type_id' => 6,
			'botanical_name' => 'Psidium guajava',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:38:42',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 941,
			'name' => 'Turmeric',
			'product_type_id' => 4,
			'botanical_name' => 'Curcuma longa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:42:55',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 943,
			'name' => 'Lentil',
			'product_type_id' => 4,
			'botanical_name' => 'Lens culinaris',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'airport requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 12:44:27',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 945,
			'name' => 'Brinjal',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum melongena',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Need in Airport',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-17 02:42:47',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 947,
			'name' => 'Radish',
			'product_type_id' => 3,
			'botanical_name' => 'Raphanus sativus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Airport Implementation. ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-18 05:34:04',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 949,
			'name' => 'Kopi Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Goupia glabra',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'product name was absent before 19/01/2021',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-19 02:44:09',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 951,
			'name' => 'Walnut Shell Grit',
			'product_type_id' => 59,
			'botanical_name' => 'Juglans regia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'fee correction',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-21 03:53:15',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 953,
			'name' => 'DUN PEAS.',
			'product_type_id' => 2,
			'botanical_name' => 'pisum spp.',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-01-31 03:57:22',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 955,
			'name' => 'Dahoma Square Log',
			'product_type_id' => 40,
			'botanical_name' => 'Piptadeniastrum africanum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'product was absent',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-04 03:26:33',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 957,
			'name' => 'Dahoma Round Log',
			'product_type_id' => 40,
			'botanical_name' => 'Piptadeniastrum africanum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'product was absent',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-04 03:27:46',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 959,
			'name' => 'Frozen Pastry',
			'product_type_id' => 26,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Newly created as it is required by Chittagong See port',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-07 12:39:57',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 961,
			'name' => 'Other',
			'product_type_id' => 40,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'client\'s code',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-11 05:47:55',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 963,
			'name' => 'Pomelo',
			'product_type_id' => 3,
			'botanical_name' => 'Citrus maxima',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House Requirement ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 07:28:15',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 965,
			'name' => 'Palmyara Plam',
			'product_type_id' => 3,
			'botanical_name' => 'Borassus flabellifer',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'CPH requirement ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 07:42:08',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 967,
			'name' => 'Harbari',
			'product_type_id' => 3,
			'botanical_name' => 'Phyllanthusacidus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House Requirement ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 07:43:58',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 969,
			'name' => 'Sapota',
			'product_type_id' => 3,
			'botanical_name' => 'Marilkara achras',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House Requirement ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 07:45:22',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 971,
			'name' => 'Anola',
			'product_type_id' => 3,
			'botanical_name' => 'Phyllanthus emblica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House Requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-15 07:49:32',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 973,
			'name' => 'Betel Nut',
			'product_type_id' => 3,
			'botanical_name' => 'Areca Catechu',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House Requirement.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 07:30:18',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 975,
			'name' => 'Rajat Leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Acalypha indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:06:42',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 977,
			'name' => 'Defol (Daophal)',
			'product_type_id' => 3,
			'botanical_name' => 'Emblica officinalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 07:37:20',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 979,
			'name' => 'Water chestnut',
			'product_type_id' => 3,
			'botanical_name' => 'Trapa natans',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:01:49',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 981,
			'name' => 'Coffee Plum',
			'product_type_id' => 3,
			'botanical_name' => 'Flacourtia cataphracta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:03:20',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 983,
			'name' => 'Palmyara plum',
			'product_type_id' => 3,
			'botanical_name' => 'Barassus flabellifer',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:08:18',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 985,
			'name' => 'Calamus palm',
			'product_type_id' => 3,
			'botanical_name' => 'Calamus gibbsianus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:09:54',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 987,
			'name' => 'Lady’s finger',
			'product_type_id' => 3,
			'botanical_name' => 'Hibiscus esculentus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 09:29:17',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 989,
			'name' => 'Malabar spinach',
			'product_type_id' => 3,
			'botanical_name' => 'Basella alba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 11:17:03',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 991,
			'name' => 'Bottle Gourd Leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Lagenaria siceraria',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 11:21:37',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 993,
			'name' => 'Amaranthas',
			'product_type_id' => 3,
			'botanical_name' => 'Amaranthus spinosus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-16 11:32:47',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 995,
			'name' => 'Jack Fruits Seed',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 11:58:18',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 997,
			'name' => 'Rosella',
			'product_type_id' => 3,
			'botanical_name' => 'Hibiscus sabdariffa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirement',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:07:50',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 999,
			'name' => 'Chilli',
			'product_type_id' => 3,
			'botanical_name' => 'Capsicum frutescens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:11:02',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1001,
			'name' => 'Mustard leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:23:44',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1003,
			'name' => 'Seeds of Jackfruit',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:25:21',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1005,
			'name' => 'Asparagus bean',
			'product_type_id' => 3,
			'botanical_name' => 'Vigna unguiculata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:28:47',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1007,
			'name' => 'Chui jal',
			'product_type_id' => 3,
			'botanical_name' => 'Piper chaba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:31:03',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1009,
			'name' => 'Henna leaf',
			'product_type_id' => 3,
			'botanical_name' => 'Lwasonia inermis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-17 12:32:10',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1011,
			'name' => 'Turmeric',
			'product_type_id' => 3,
			'botanical_name' => 'Curcuma longga',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H req',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-18 07:15:43',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1013,
			'name' => 'Onion',
			'product_type_id' => 3,
			'botanical_name' => 'Allium cepa',
			'is_active' => 0,
			'inactivity_to_date' => '2022-10-29',
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Onion is defined in spice category. No need to make active. ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-13 11:03:44',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1015,
			'name' => 'Elephant Wood Apple',
			'product_type_id' => 3,
			'botanical_name' => 'Feronia limonia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'CPH Required',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-20 11:02:14',
			'updated_by' => 20951
		]);

		DB::table('products')->insert([
			'id' => 1017,
			'name' => 'Coconut husk',
			'product_type_id' => 61,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'ADD',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 03:57:52',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1019,
			'name' => 'Khail',
			'product_type_id' => 61,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'ADD',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 03:58:35',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1021,
			'name' => 'Glume',
			'product_type_id' => 61,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'ADD',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 03:59:52',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1023,
			'name' => 'Coco Dust',
			'product_type_id' => 61,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'ADD',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 05:31:02',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1025,
			'name' => 'Coco Peat',
			'product_type_id' => 61,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Add',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 05:28:11',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1027,
			'name' => 'Coco Coir/Fiber',
			'product_type_id' => 61,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Add',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 05:29:09',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1029,
			'name' => 'Coco Husk Pieces',
			'product_type_id' => 61,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Add',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 05:30:01',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1031,
			'name' => 'Coconut Coir Peat',
			'product_type_id' => 61,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Add',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 05:30:30',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1033,
			'name' => 'Other',
			'product_type_id' => 61,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Add',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-02-24 05:32:06',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1035,
			'name' => 'flower of hog plum',
			'product_type_id' => 3,
			'botanical_name' => 'Spondius pinnata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'CPH REQUIRMENT',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-07 12:11:48',
			'updated_by' => 20961
		]);

		DB::table('products')->insert([
			'id' => 1037,
			'name' => 'Flowers of Hog Plum',
			'product_type_id' => 3,
			'botanical_name' => 'Spondius pinnata',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'cph requirment',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-02 11:58:12',
			'updated_by' => 20951
		]);

		DB::table('products')->insert([
			'id' => 1039,
			'name' => 'Non-Boiled Atap Rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'According to Ministry of food ref no 13.00.0000.044.001.21.189',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-15 11:16:06',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1041,
			'name' => 'Modified Starch',
			'product_type_id' => 1,
			'botanical_name' => 'Zea mays',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-15 03:50:43',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1043,
			'name' => 'Modified Starch',
			'product_type_id' => 3,
			'botanical_name' => 'Solanum tuberosum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-15 03:51:39',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1045,
			'name' => 'Celery',
			'product_type_id' => 9,
			'botanical_name' => 'Apium graveolens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-16 11:41:20',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1047,
			'name' => 'Chinese Cabbage',
			'product_type_id' => 9,
			'botanical_name' => 'Brassica rapa var.pekinensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-16 11:42:07',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1049,
			'name' => 'Peanut',
			'product_type_id' => 32,
			'botanical_name' => 'Arachis hypogaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-16 11:47:03',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1051,
			'name' => 'Brussels sprout',
			'product_type_id' => 3,
			'botanical_name' => 'Brassica oleracea var. gemmifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-18 11:47:27',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1053,
			'name' => 'Pearl Millet',
			'product_type_id' => 1,
			'botanical_name' => 'Pennisetum americanum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-18 03:43:59',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1055,
			'name' => 'Japonica rice',
			'product_type_id' => 1,
			'botanical_name' => 'Oryza sativa subsp. japonica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-21 10:18:01',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1057,
			'name' => 'Palm Nut Kernel',
			'product_type_id' => 2,
			'botanical_name' => 'Elaeis guineensis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-22 11:26:15',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1059,
			'name' => 'Asparagus',
			'product_type_id' => 43,
			'botanical_name' => 'Asparagus officinalis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-25 03:53:42',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1061,
			'name' => 'Bamboo',
			'product_type_id' => 40,
			'botanical_name' => 'Bambusoideae',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-25 04:00:31',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1063,
			'name' => 'chilli seed',
			'product_type_id' => 9,
			'botanical_name' => 'Capsicum annuum',
			'is_active' => 0,
			'inactivity_to_date' => '2025-12-31',
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'As chili seed is a spice item according to PQR, 2018  and fee varies ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-04-26 12:53:39',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1065,
			'name' => 'Watermelon',
			'product_type_id' => 3,
			'botanical_name' => 'Citrullus lanatus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'New product has been added.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-03-28 12:57:15',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1067,
			'name' => 'Test Product',
			'product_type_id' => 63,
			'botanical_name' => 'Test Product',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Testing purpose',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-04-01 02:03:26',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1069,
			'name' => 'Testing Product',
			'product_type_id' => 63,
			'botanical_name' => 'Test Product',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Test Product',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-04-01 02:04:14',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1071,
			'name' => 'Mustard Oil Cake',
			'product_type_id' => 2,
			'botanical_name' => 'Brassica spp',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-04-08 02:54:49',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1073,
			'name' => 'Neem leaves',
			'product_type_id' => 3,
			'botanical_name' => 'Azadirachta indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central pack House Req.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-04-11 05:59:45',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1075,
			'name' => 'Teasle Gourd',
			'product_type_id' => 3,
			'botanical_name' => 'Momordica dioica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'C P H',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-04-19 05:07:00',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1077,
			'name' => 'Residues of Starch',
			'product_type_id' => 36,
			'botanical_name' => 'Manihot esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-02 11:47:16',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1079,
			'name' => 'Passion fruit',
			'product_type_id' => 3,
			'botanical_name' => 'Passiflora edulis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-02 12:04:15',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1081,
			'name' => 'Nectarine',
			'product_type_id' => 3,
			'botanical_name' => 'Prunus persica var. nucipersica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-02 12:04:45',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1083,
			'name' => 'Canola',
			'product_type_id' => 2,
			'botanical_name' => 'Brassica napus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong sea port asked to add this product. ',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-02 02:24:52',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1085,
			'name' => 'Dun Peas',
			'product_type_id' => 2,
			'botanical_name' => 'Pisum sativum subsp. arvense',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Plant quarantine wing of Chattogram Seaport requested to add this product.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-06 01:27:44',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1093,
			'name' => 'Green jackfruit',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House req.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-06 05:41:12',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1095,
			'name' => 'Rose apple',
			'product_type_id' => 3,
			'botanical_name' => 'Syzygium malaccense',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Pack House req.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-24 08:20:00',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1097,
			'name' => 'Dewa fruit',
			'product_type_id' => 3,
			'botanical_name' => 'Artocarpus lacucha',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House req.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-24 08:21:21',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1099,
			'name' => 'Yellow Pea',
			'product_type_id' => 4,
			'botanical_name' => 'Pisum spp',
			'is_active' => 0,
			'inactivity_to_date' => '2030-12-31',
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'duplicate entry',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-24 12:35:26',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1101,
			'name' => 'Karanda',
			'product_type_id' => 3,
			'botanical_name' => 'Carissa carandas',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Pack House requested to add this product.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-05-30 04:13:49',
			'updated_by' => 18213
		]);

		DB::table('products')->insert([
			'id' => 1103,
			'name' => 'Frozen Fruits',
			'product_type_id' => 65,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 12:57:15',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1105,
			'name' => 'Frozen Vegetables',
			'product_type_id' => 65,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 12:59:40',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1107,
			'name' => 'Other',
			'product_type_id' => 65,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:00:29',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1109,
			'name' => 'ALOO PURI',
			'product_type_id' => 65,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:34:05',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1111,
			'name' => 'DAL PURI',
			'product_type_id' => 65,
			'botanical_name' => null,
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1113,
			'name' => 'COCONUT PURI',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1115,
			'name' => 'BHAPA PITHA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1117,
			'name' => 'PLAIN PARATHA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1119,
			'name' => 'CHITOL PITHA/PITTA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1121,
			'name' => 'CHOI PITHA/PITTA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1123,
			'name' => 'NOON GORA PITHA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1125,
			'name' => 'ROTI PITHA/PITTA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1127,
			'name' => 'SPRING ROLL',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1129,
			'name' => 'SPRING ROLL PASTRY',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1131,
			'name' => 'VEGETABLE SAMOSA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1133,
			'name' => 'VEGETABLE SINGARA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1135,
			'name' => 'KHEJUR GURER SHONDESH PITHA',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1137,
			'name' => 'KHEJUR GUR',
			'product_type_id' => 65,
			'botanical_name' => 'Phoenix dactylifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:32:06',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1139,
			'name' => 'ALOO CHOP',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1141,
			'name' => 'ROTI CHAPATI',
			'product_type_id' => 65,
			'botanical_name' => ' ',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea port requirements.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-01 01:35:13',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1143,
			'name' => 'RED AMARANTH/ LA SHAK',
			'product_type_id' => 65,
			'botanical_name' => 'Amaranthus tricolor',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1145,
			'name' => 'BEAN SEED/SEEM BISI',
			'product_type_id' => 65,
			'botanical_name' => 'Lablab niger',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1147,
			'name' => 'KACHUR LATI',
			'product_type_id' => 65,
			'botanical_name' => 'Colocasia esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1149,
			'name' => 'POTOL/POINTED GOURD',
			'product_type_id' => 65,
			'botanical_name' => 'Trichosanthes dioica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1151,
			'name' => 'KAROLLA/BITTER GOURD',
			'product_type_id' => 65,
			'botanical_name' => 'Momordica charantia',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1153,
			'name' => 'GREEN CHILLI',
			'product_type_id' => 65,
			'botanical_name' => 'Capsicum frutescens',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1155,
			'name' => 'CHALTA/ELEPHANT APPLE',
			'product_type_id' => 65,
			'botanical_name' => 'Dillenia indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1157,
			'name' => 'TARO/MUKHI KACHU',
			'product_type_id' => 65,
			'botanical_name' => 'Colocasia esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1159,
			'name' => 'SHREDDED COCONUT',
			'product_type_id' => 65,
			'botanical_name' => 'Cocos nucifera',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1161,
			'name' => 'TAK BOROI',
			'product_type_id' => 65,
			'botanical_name' => 'Zizyphus mauritiana',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1163,
			'name' => 'GREEN MANGO',
			'product_type_id' => 65,
			'botanical_name' => 'Mangifera indica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1165,
			'name' => 'OLIVE/JALPAI',
			'product_type_id' => 65,
			'botanical_name' => 'Olea europaea',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1169,
			'name' => 'KACHUR MUKHI',
			'product_type_id' => 65,
			'botanical_name' => 'Colocasia esculenta',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1171,
			'name' => 'JACKFRUIT SEED',
			'product_type_id' => 65,
			'botanical_name' => 'Artocarpus heterophyllus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1173,
			'name' => 'DATA',
			'product_type_id' => 65,
			'botanical_name' => 'Amaranthus oleraceus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1175,
			'name' => 'KAKROUTEASLE GOURD',
			'product_type_id' => 65,
			'botanical_name' => 'Momordica dioica',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1177,
			'name' => 'PUI SHAK',
			'product_type_id' => 65,
			'botanical_name' => 'Basella alba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1179,
			'name' => 'NALI SHAK',
			'product_type_id' => 65,
			'botanical_name' => 'Amaranthus viridis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1181,
			'name' => 'CHUI JHAL',
			'product_type_id' => 65,
			'botanical_name' => 'Piper chaba',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1183,
			'name' => 'CHICHINGA',
			'product_type_id' => 65,
			'botanical_name' => 'Trichosanthes cucumerina',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1185,
			'name' => 'OKRA/BINDI/LADIES FINGER',
			'product_type_id' => 65,
			'botanical_name' => 'Abelmoschus esculentus',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1187,
			'name' => 'BORBOTI/YARD LONG BEAN',
			'product_type_id' => 65,
			'botanical_name' => 'Asparagus bean',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Chittagong Sea Port Requirements',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-02 10:24:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1189,
			'name' => 'Dahoma Wood Lumber',
			'product_type_id' => 40,
			'botanical_name' => 'Piptadeniastrum africanum',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => null,
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-03 02:29:25',
			'updated_by' => 9
		]);

		DB::table('products')->insert([
			'id' => 1191,
			'name' => 'Can fruit',
			'product_type_id' => 3,
			'botanical_name' => 'Calamus tenuis',
			'is_active' => 1,
			'inactivity_to_date' => null,
			'is_restricted' => 0,
			'restriction_to_date' => null,
			'reason' => 'Central Packing House requested to add this product.',
			'certificate_validity_days' => 120,
			'created_by' => 1,
			'created_at' => now(),
			'updated_at' => '2021-06-15 03:32:34',
			'updated_by' => 18213
		]);
		
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
