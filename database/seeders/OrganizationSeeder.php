<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('organizations')->insert([
            'id' => 1,
            'name' => 'Plant Quarantine Wing, DAE, Khamarbari, Dhaka',
            'type' => 'HQ',
            'port_type_id' => null,
            'means_of_transport_id' => null,
            'port_category_id' => null,
            'district_id' => 1,
            'custom_house' => '',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 0,
            'is_active_for_ip' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 5,
            'name' => 'Hazrat Shahjalal International Airport, Dhaka',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 1,
            'port_category_id' => 1,
            'district_id' => 1,
            'custom_house' => 'Commissioner of Customs, Custom House, Dhaka',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 8,
            'name' => 'Chattogram Seaport',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 4,
            'port_category_id' => 2,
            'district_id' => 6,
            'custom_house' => 'Commissioner of Customs, Custom House, Chattogram',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 9,
            'name' => 'Tamabil, Sylhet',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 6,
            'district_id' => 7,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Tamabil, Sylhet',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 10,
            'name' => 'Zakiganj, Sylhet',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 7,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Jakiganj',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 11,
            'name' => 'Haluaghat, Mymensingh',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 5,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Kamalpur, Jamalpur',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 12,
            'name' => 'Shewla, Bianibazar, Sylhet',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 7,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Sylhet',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 13,
            'name' => 'Shah Amanat International Airport, Chattogram',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 1,
            'port_category_id' => 1,
            'district_id' => 6,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Chattogram',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 17,
            'name' => 'Mongla Seaport',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 4,
            'port_category_id' => 2,
            'district_id' => 6,
            'custom_house' => 'Mongla',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 19,
            'name' => 'Teknaf, Cox`s Bazer',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 4,
            'district_id' => 8,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Teknaf',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 21,
            'name' => 'Osmani International Airport, Sylhet',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 1,
            'port_category_id' => 5,
            'district_id' => 7,
            'custom_house' => 'Commissioner of Customs, Custom House , Sylhet',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 22,
            'name' => 'Benapole, Jashore',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 4,
            'district_id' => 9,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House , Benapole, Jashore',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 23,
            'name' => 'Hilli, Dinajpur',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 4,
            'district_id' => 63,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Hili',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 24,
            'name' => 'Sonamosjid , Chapainawabgonj',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 4,
            'district_id' => 56,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Sonamosjid, Chapainawabgonj',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 25,
            'name' => 'Burimari , Lalmonirhat',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 6,
            'district_id' => 66,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Burimari , Lalmonirhat',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 26,
            'name' => 'Akhaura, Brahmanbaria',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 4,
            'district_id' => 24,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Akhaura, Brammanbaria',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 28,
            'name' => 'Bhomra, Satkhira',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 4,
            'district_id' => 48,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Custom House , Bhomra , Satkhira',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 31,
            'name' => 'Narayanganj Riverport',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 3,
            'port_category_id' => 7,
            'district_id' => 2,
            'custom_house' => 'Commissioner of Customs, Custom House, Narayanganj',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 32,
            'name' => 'Darshana, Chuadanga',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 6,
            'district_id' => 40,
            'custom_house' => 'Commissioner of Customs, Custom House, Darshana, Chuadanga',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 34,
            'name' => 'Rohanpur, Rajshahi',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 61,
            'custom_house' => 'Commissioner of Customs, Custom House, Rajshahi',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 36,
            'name' => 'Banglabandha, Panchagarh',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 6,
            'district_id' => 68,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Bangla Bandha , Panchagarh',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 37,
            'name' => 'Bibirbazar, Cumilla',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 26,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Bibirbazar , Cumilla',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 38,
            'name' => 'ICD Kamalapur, Dhaka',
            'type' => 'PORT',
            'port_type_id' => 2,
            'means_of_transport_id' => 2,
            'port_category_id' => 6,
            'district_id' => 1,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Dhaka',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 39,
            'name' => 'Kamalpur, Bakshigong, Jamalpur',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 49,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Kamalpur, Bakshigong, Jamalpur',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 40,
            'name' => 'Belunia, Feni',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 20,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Belunia, Feni',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 41,
            'name' => 'Birol, Dinajpur',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 63,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Birol , Dinajpur',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 42,
            'name' => 'Betuli, Fultala, Maulvibazar',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 72,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Betuli, Fultala, Maulvibazar',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 43,
            'name' => 'Chatolpur, Maulvibazar',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 72,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Sylhet',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 44,
            'name' => 'Dolutgang, Jibon nagar, Chuadanga',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 40,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Dolutgang, Jibon nagar, Chuadanga',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 45,
            'name' => 'Bhurungamari, Kurigram ',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 65,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Bhurungamari , Kurigram',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 46,
            'name' => 'Nakugaon, Nalitabari, Sherpur ',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 53,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Nalitabari, Sherpur',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 47,
            'name' => 'Pangaon, Keranigonj, Dhaka',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 1,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House, Dhaka',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 48,
            'name' => 'Payra, Kalapara, Patuakhali',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 15,
            'custom_house' => 'Assistant Commissioner of Customs, Custom House Payra Kalapara, Patuakhali',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 49,
            'name' => 'Mujibnagor,Meherpur',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 46,
            'custom_house' => '',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 50,
            'name' => 'Ashugonj,Brahmanbaria',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 24,
            'custom_house' => '',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 51,
            'name' => '	Balla,Hobigong',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 2,
            'port_category_id' => 8,
            'district_id' => 71,
            'custom_house' => '',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 52,
            'name' => 'DAE',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => null,
            'port_category_id' => 7,
            'district_id' => 34,
            'custom_house' => 'SAPL-IWCT, MUKTERPUR',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 53,
            'name' => 'SAPL-IWCT, MUKTERPUR',
            'type' => 'PORT',
            'port_type_id' => 3,
            'means_of_transport_id' => 3,
            'port_category_id' => 7,
            'district_id' => 34,
            'custom_house' => 'Dhaka',
            'is_active_for_pc' => 0,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('organizations')->insert([
            'id' => 55,
            'name' => 'Central Packing House, Shampur, Dhaka',
            'type' => 'PORT',
            'port_type_id' => 1,
            'means_of_transport_id' => null,
            'port_category_id' => 3,
            'district_id' => 2,
            'custom_house' => 'Narayanganj',
            'is_active_for_pc' => 1,
            'is_active_for_ro' => 1,
            'is_active_for_ip' => 0,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
