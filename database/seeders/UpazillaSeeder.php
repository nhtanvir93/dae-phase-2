<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpazillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upazillas')->insert([
            'name' => 'Savar',
            'bn_name' => 'সাভার',
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dhamrai',
            'bn_name' => 'ধামরাই',
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Keraniganj',
            'bn_name' => 'কেরাণীগঞ্জ',
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nawabganj',
            'bn_name' => 'নবাবগঞ্জ',
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dohar',
            'bn_name' => 'দোহার',
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Araihazar',
            'bn_name' => 'আড়াইহাজার',
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bandar',
            'bn_name' => 'বন্দর',
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Narayanganj Sadar',
            'bn_name' => 'নারায়নগঞ্জ সদর',
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rupganj',
            'bn_name' => 'রূপগঞ্জ',
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sonargaon',
            'bn_name' => 'সোনারগাঁ',
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fakirhat',
            'bn_name' => 'ফকিরহাট',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bagerhat Sadar',
            'bn_name' => 'বাগেরহাট সদর',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mollahat',
            'bn_name' => 'মোল্লাহাট',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sarankhola',
            'bn_name' => 'শরণখোলা',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rampal',
            'bn_name' => 'রামপাল',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Morrelganj',
            'bn_name' => 'মোড়েলগঞ্জ',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kachua',
            'bn_name' => 'কচুয়া',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mongla',
            'bn_name' => 'মোংলা',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chitalmari',
            'bn_name' => 'চিতলমারী',
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fulbaria',
            'bn_name' => 'ফুলবাড়ীয়া',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Trishal',
            'bn_name' => 'ত্রিশাল',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhaluka',
            'bn_name' => 'ভালুকা',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Muktagacha',
            'bn_name' => 'মুক্তাগাছা',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mymensingh Sadar',
            'bn_name' => 'ময়মনসিংহ সদর',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dhobaura',
            'bn_name' => 'ধোবাউড়া',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Phulpur',
            'bn_name' => 'ফুলপুর',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Haluaghat',
            'bn_name' => 'হালুয়াঘাট',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gouripur',
            'bn_name' => 'গৌরীপুর',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gafargaon',
            'bn_name' => 'গফরগাঁও',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Iswarganj',
            'bn_name' => 'ঈশ্বরগঞ্জ',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nandail',
            'bn_name' => 'নান্দাইল',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tarakanda',
            'bn_name' => 'তারাকান্দা',
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rangunia',
            'bn_name' => 'রাঙ্গুনিয়া',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sitakunda',
            'bn_name' => 'সীতাকুন্ড',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mirsharai',
            'bn_name' => 'মীরসরাই',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Patiya',
            'bn_name' => 'পটিয়া',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sandwip',
            'bn_name' => 'সন্দ্বীপ',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Banshkhali',
            'bn_name' => 'বাঁশখালী',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Boalkhali',
            'bn_name' => 'বোয়ালখালী',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Anwara',
            'bn_name' => 'আনোয়ারা',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chandanaish',
            'bn_name' => 'চন্দনাইশ',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Satkania',
            'bn_name' => 'সাতকানিয়া',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lohagara',
            'bn_name' => 'লোহাগাড়া',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hathazari',
            'bn_name' => 'হাটহাজারী',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fatikchhari',
            'bn_name' => 'ফটিকছড়ি',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Raozan',
            'bn_name' => 'রাউজান',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Karnafuli',
            'bn_name' => 'কর্ণফুলী',
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Balaganj',
            'bn_name' => 'বালাগঞ্জ',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Beanibazar',
            'bn_name' => 'বিয়ানীবাজার',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bishwanath',
            'bn_name' => 'বিশ্বনাথ',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Companiganj',
            'bn_name' => 'কোম্পানীগঞ্জ',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fenchuganj',
            'bn_name' => 'ফেঞ্চুগঞ্জ',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Golapganj',
            'bn_name' => 'গোলাপগঞ্জ',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gowainghat',
            'bn_name' => 'গোয়াইনঘাট',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jaintiapur',
            'bn_name' => 'জৈন্তাপুর',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kanaighat',
            'bn_name' => 'কানাইঘাট',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sylhet Sadar',
            'bn_name' => 'সিলেট সদর',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Zakiganj',
            'bn_name' => 'জকিগঞ্জ',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dakshinsurma',
            'bn_name' => 'দক্ষিণ সুরমা',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Osmaninagar',
            'bn_name' => 'ওসমানী নগর',
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Coxsbazar Sadar',
            'bn_name' => 'কক্সবাজার সদর',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chakaria',
            'bn_name' => 'চকরিয়া',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kutubdia',
            'bn_name' => 'কুতুবদিয়া',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ukhiya',
            'bn_name' => 'উখিয়া',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Moheshkhali',
            'bn_name' => 'মহেশখালী',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pekua',
            'bn_name' => 'পেকুয়া',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ramu',
            'bn_name' => 'রামু',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Teknaf',
            'bn_name' => 'টেকনাফ',
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Manirampur',
            'bn_name' => 'মণিরামপুর',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Abhaynagar',
            'bn_name' => 'অভয়নগর',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bagherpara',
            'bn_name' => 'বাঘারপাড়া',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chougachha',
            'bn_name' => 'চৌগাছা',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jhikargacha',
            'bn_name' => 'ঝিকরগাছা',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Keshabpur',
            'bn_name' => 'কেশবপুর',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jessore Sadar',
            'bn_name' => 'যশোর সদর',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sharsha',
            'bn_name' => 'শার্শা',
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Amtali',
            'bn_name' => 'আমতলী',
            'district_id' => 11,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Barguna Sadar',
            'bn_name' => 'বরগুনা সদর',
            'district_id' => 11,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Betagi',
            'bn_name' => 'বেতাগী',
            'district_id' => 11,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bamna',
            'bn_name' => 'বামনা',
            'district_id' => 11,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pathorghata',
            'bn_name' => 'পাথরঘাটা',
            'district_id' => 11,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Taltali',
            'bn_name' => 'তালতলি',
            'district_id' => 11,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Barisal Sadar',
            'bn_name' => 'বরিশাল সদর',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bakerganj',
            'bn_name' => 'বাকেরগঞ্জ',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Babuganj',
            'bn_name' => 'বাবুগঞ্জ',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Wazirpur',
            'bn_name' => 'উজিরপুর',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Banaripara',
            'bn_name' => 'বানারীপাড়া',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gournadi',
            'bn_name' => 'গৌরনদী',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Agailjhara',
            'bn_name' => 'আগৈলঝাড়া',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mehendiganj',
            'bn_name' => 'মেহেন্দিগঞ্জ',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Muladi',
            'bn_name' => 'মুলাদী',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hizla',
            'bn_name' => 'হিজলা',
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhola Sadar',
            'bn_name' => 'ভোলা সদর',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Borhan Sddin',
            'bn_name' => 'বোরহান উদ্দিন',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Charfesson',
            'bn_name' => 'চরফ্যাশন',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Doulatkhan',
            'bn_name' => 'দৌলতখান',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Monpura',
            'bn_name' => 'মনপুরা',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tazumuddin',
            'bn_name' => 'তজুমদ্দিন',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lalmohan',
            'bn_name' => 'লালমোহন',
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jhalakathi Sadar',
            'bn_name' => 'ঝালকাঠি সদর',
            'district_id' => 14,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kathalia',
            'bn_name' => 'কাঠালিয়া',
            'district_id' => 14,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nalchity',
            'bn_name' => 'নলছিটি',
            'district_id' => 14,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rajapur',
            'bn_name' => 'রাজাপুর',
            'district_id' => 14,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bauphal',
            'bn_name' => 'বাউফল',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Patuakhali Sadar',
            'bn_name' => 'পটুয়াখালী সদর',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dumki',
            'bn_name' => 'দুমকি',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dashmina',
            'bn_name' => 'দশমিনা',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalapara',
            'bn_name' => 'কলাপাড়া',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mirzaganj',
            'bn_name' => 'মির্জাগঞ্জ',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Galachipa',
            'bn_name' => 'গলাচিপা',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rangabali',
            'bn_name' => 'রাঙ্গাবালী',
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pirojpur Sadar',
            'bn_name' => 'পিরোজপুর সদর',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nazirpur',
            'bn_name' => 'নাজিরপুর',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kawkhali',
            'bn_name' => 'কাউখালী',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Zianagar',
            'bn_name' => 'জিয়ানগর',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhandaria',
            'bn_name' => 'ভান্ডারিয়া',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mathbaria',
            'bn_name' => 'মঠবাড়ীয়া',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nesarabad',
            'bn_name' => 'নেছারাবাদ',
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bandarban Sadar',
            'bn_name' => 'বান্দরবান সদর',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Alikadam',
            'bn_name' => 'আলীকদম',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Naikhongchhari',
            'bn_name' => 'নাইক্ষ্যংছড়ি',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rowangchhari',
            'bn_name' => 'রোয়াংছড়ি',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lama',
            'bn_name' => 'লামা',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ruma',
            'bn_name' => 'রুমা',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Thanchi',
            'bn_name' => 'থানচি',
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chhagalnaiya',
            'bn_name' => 'ছাগলনাইয়া',
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Feni Sadar',
            'bn_name' => 'ফেনী সদর',
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sonagazi',
            'bn_name' => 'সোনাগাজী',
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fulgazi',
            'bn_name' => 'ফুলগাজী',
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Parshuram',
            'bn_name' => 'পরশুরাম',
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Daganbhuiyan',
            'bn_name' => 'দাগনভূঞা',
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Khagrachhari Sadar',
            'bn_name' => 'খাগড়াছড়ি সদর',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dighinala',
            'bn_name' => 'দিঘীনালা',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Panchari',
            'bn_name' => 'পানছড়ি',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Laxmichhari',
            'bn_name' => 'লক্ষীছড়ি',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mohalchari',
            'bn_name' => 'মহালছড়ি',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Manikchari',
            'bn_name' => 'মানিকছড়ি',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ramgarh',
            'bn_name' => 'রামগড়',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Matiranga',
            'bn_name' => 'মাটিরাঙ্গা',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Guimara',
            'bn_name' => 'গুইমারা',
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Noakhali Sadar',
            'bn_name' => 'নোয়াখালী সদর',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Companiganj',
            'bn_name' => 'কোম্পানীগঞ্জ',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Begumganj',
            'bn_name' => 'বেগমগঞ্জ',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hatia',
            'bn_name' => 'হাতিয়া',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Subarnachar',
            'bn_name' => 'সুবর্ণচর',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kabirhat',
            'bn_name' => 'কবিরহাট',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Senbug',
            'bn_name' => 'সেনবাগ',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chatkhil',
            'bn_name' => 'চাটখিল',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sonaimori',
            'bn_name' => 'সোনাইমুড়ী',
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rangamati Sadar',
            'bn_name' => 'রাঙ্গামাটি সদর',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaptai',
            'bn_name' => 'কাপ্তাই',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kawkhali',
            'bn_name' => 'কাউখালী',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Baghaichari',
            'bn_name' => 'বাঘাইছড়ি',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Barkal',
            'bn_name' => 'বরকল',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Langadu',
            'bn_name' => 'লংগদু',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rajasthali',
            'bn_name' => 'রাজস্থলী',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Belaichari',
            'bn_name' => 'বিলাইছড়ি',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Juraichari',
            'bn_name' => 'জুরাছড়ি',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Naniarchar',
            'bn_name' => 'নানিয়ারচর',
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Brahmanbaria Sadar',
            'bn_name' => 'ব্রাহ্মণবাড়িয়া সদর',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kasba',
            'bn_name' => 'কসবা',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nasirnagar',
            'bn_name' => 'নাসিরনগর',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sarail',
            'bn_name' => 'সরাইল',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ashuganj',
            'bn_name' => 'আশুগঞ্জ',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Akhaura',
            'bn_name' => 'আখাউড়া',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nabinagar',
            'bn_name' => 'নবীনগর',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bancharampur',
            'bn_name' => 'বাঞ্ছারামপুর',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bijoynagar',
            'bn_name' => 'বিজয়নগর',
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Haimchar',
            'bn_name' => 'হাইমচর',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kachua',
            'bn_name' => 'কচুয়া',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shahrasti',
            'bn_name' => 'শাহরাস্তি	',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chandpur Sadar',
            'bn_name' => 'চাঁদপুর সদর',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Matlab South',
            'bn_name' => 'মতলব দক্ষিণ',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hajiganj',
            'bn_name' => 'হাজীগঞ্জ',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Matlab North',
            'bn_name' => 'মতলব উত্তর',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Faridgonj',
            'bn_name' => 'ফরিদগঞ্জ',
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Debidwar',
            'bn_name' => 'দেবিদ্বার',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Barura',
            'bn_name' => 'বরুড়া',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Brahmanpara',
            'bn_name' => 'ব্রাহ্মণপাড়া',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chandina',
            'bn_name' => 'চান্দিনা',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chauddagram',
            'bn_name' => 'চৌদ্দগ্রাম',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Daudkandi',
            'bn_name' => 'দাউদকান্দি',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Homna',
            'bn_name' => 'হোমনা',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Laksam',
            'bn_name' => 'লাকসাম',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Muradnagar',
            'bn_name' => 'মুরাদনগর',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nangalkot',
            'bn_name' => 'নাঙ্গলকোট',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Comilla Sadar',
            'bn_name' => 'কুমিল্লা সদর',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Meghna',
            'bn_name' => 'মেঘনা',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Monohargonj',
            'bn_name' => 'মনোহরগঞ্জ',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sadarsouth',
            'bn_name' => 'সদর দক্ষিণ',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Titas',
            'bn_name' => 'তিতাস',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Burichang',
            'bn_name' => 'বুড়িচং',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lalmai',
            'bn_name' => 'লালমাই',
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lakshmipur Sadar',
            'bn_name' => 'লক্ষ্মীপুর সদর',
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kamalnagar',
            'bn_name' => 'কমলনগর',
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Raipur',
            'bn_name' => 'রায়পুর',
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ramgati',
            'bn_name' => 'রামগতি',
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ramganj',
            'bn_name' => 'রামগঞ্জ',
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Faridpur Sadar',
            'bn_name' => 'ফরিদপুর সদর',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Alfadanga',
            'bn_name' => 'আলফাডাঙ্গা',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Boalmari',
            'bn_name' => 'বোয়ালমারী',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sadarpur',
            'bn_name' => 'সদরপুর',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nagarkanda',
            'bn_name' => 'নগরকান্দা',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhanga',
            'bn_name' => 'ভাঙ্গা',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Charbhadrasan',
            'bn_name' => 'চরভদ্রাসন',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Madhukhali',
            'bn_name' => 'মধুখালী',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Saltha',
            'bn_name' => 'সালথা',
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaliganj',
            'bn_name' => 'কালীগঞ্জ',
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaliakair',
            'bn_name' => 'কালিয়াকৈর',
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kapasia',
            'bn_name' => 'কাপাসিয়া',
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gazipur Sadar',
            'bn_name' => 'গাজীপুর সদর',
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sreepur',
            'bn_name' => 'শ্রীপুর',
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gopalganj Sadar',
            'bn_name' => 'গোপালগঞ্জ সদর',
            'district_id' => 31,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kashiani',
            'bn_name' => 'কাশিয়ানী',
            'district_id' => 31,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tungipara',
            'bn_name' => 'টুংগীপাড়া',
            'district_id' => 31,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kotalipara',
            'bn_name' => 'কোটালীপাড়া',
            'district_id' => 31,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Muksudpur',
            'bn_name' => 'মুকসুদপুর',
            'district_id' => 31,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Madaripur Sadar',
            'bn_name' => 'মাদারীপুর সদর',
            'district_id' => 32,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shibchar',
            'bn_name' => 'শিবচর',
            'district_id' => 32,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalkini',
            'bn_name' => 'কালকিনি',
            'district_id' => 32,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rajoir',
            'bn_name' => 'রাজৈর',
            'district_id' => 32,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Harirampur',
            'bn_name' => 'হরিরামপুর',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Saturia',
            'bn_name' => 'সাটুরিয়া',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Manikganj Sadar',
            'bn_name' => 'মানিকগঞ্জ সদর',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gior',
            'bn_name' => 'ঘিওর',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shibaloy',
            'bn_name' => 'শিবালয়',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Doulatpur',
            'bn_name' => 'দৌলতপুর',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Singiar',
            'bn_name' => 'সিংগাইর',
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Munshiganj Sadar',
            'bn_name' => 'মুন্সিগঞ্জ সদর',
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sreenagar',
            'bn_name' => 'শ্রীনগর',
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sirajdikhan',
            'bn_name' => 'সিরাজদিখান',
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Louhajanj',
            'bn_name' => 'লৌহজং',
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gajaria',
            'bn_name' => 'গজারিয়া',
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tongibari',
            'bn_name' => 'টংগীবাড়ি',
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rajbari Sadar',
            'bn_name' => 'রাজবাড়ী সদর',
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Goalanda',
            'bn_name' => 'গোয়ালন্দ',
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pangsa',
            'bn_name' => 'পাংশা',
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Baliakandi',
            'bn_name' => 'বালিয়াকান্দি',
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalukhali',
            'bn_name' => 'কালুখালী',
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shariatpur Sadar',
            'bn_name' => 'শরিয়তপুর সদর',
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Naria',
            'bn_name' => 'নড়িয়া',
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Zajira',
            'bn_name' => 'জাজিরা',
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gosairhat',
            'bn_name' => 'গোসাইরহাট',
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhedarganj',
            'bn_name' => 'ভেদরগঞ্জ',
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Damudya',
            'bn_name' => 'ডামুড্যা',
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chuadanga Sadar',
            'bn_name' => 'চুয়াডাঙ্গা সদর',
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Alamdanga',
            'bn_name' => 'আলমডাঙ্গা',
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Damurhuda',
            'bn_name' => 'দামুড়হুদা',
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jibannagar',
            'bn_name' => 'জীবননগর',
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jhenaidah Sadar',
            'bn_name' => 'ঝিনাইদহ সদর',
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shailkupa',
            'bn_name' => 'শৈলকুপা',
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Harinakundu',
            'bn_name' => 'হরিণাকুন্ডু',
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaliganj',
            'bn_name' => 'কালীগঞ্জ',
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kotchandpur',
            'bn_name' => 'কোটচাঁদপুর',
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Moheshpur',
            'bn_name' => 'মহেশপুর',
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Paikgasa',
            'bn_name' => 'পাইকগাছা',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fultola',
            'bn_name' => 'ফুলতলা',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Digholia',
            'bn_name' => 'দিঘলিয়া',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rupsha',
            'bn_name' => 'রূপসা',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Terokhada',
            'bn_name' => 'তেরখাদা',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dumuria',
            'bn_name' => 'ডুমুরিয়া',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Botiaghata',
            'bn_name' => 'বটিয়াঘাটা',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dakop',
            'bn_name' => 'দাকোপ',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Koyra',
            'bn_name' => 'কয়রা',
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kushtia Sadar',
            'bn_name' => 'কুষ্টিয়া সদর',
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kumarkhali',
            'bn_name' => 'কুমারখালী',
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Khoksa',
            'bn_name' => 'খোকসা',
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mirpur',
            'bn_name' => 'মিরপুর',
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Daulatpur',
            'bn_name' => 'দৌলতপুর',
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bheramara',
            'bn_name' => 'ভেড়ামারা',
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shalikha',
            'bn_name' => 'শালিখা',
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sreepur',
            'bn_name' => 'শ্রীপুর',
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Magura Sadar',
            'bn_name' => 'মাগুরা সদর',
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mohammadpur',
            'bn_name' => 'মহম্মদপুর',
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mujibnagar',
            'bn_name' => 'মুজিবনগর',
            'district_id' => 46,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Meherpur Sadar',
            'bn_name' => 'মেহেরপুর সদর',
            'district_id' => 46,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gangni',
            'bn_name' => 'গাংনী',
            'district_id' => 46,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Narail Sadar',
            'bn_name' => 'নড়াইল সদর',
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lohagara',
            'bn_name' => 'লোহাগড়া',
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalia',
            'bn_name' => 'কালিয়া',
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Assasuni',
            'bn_name' => 'আশাশুনি',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Debhata',
            'bn_name' => 'দেবহাটা',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalaroa',
            'bn_name' => 'কলারোয়া',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Satkhira Sadar',
            'bn_name' => 'সাতক্ষীরা সদর',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shyamnagar',
            'bn_name' => 'শ্যামনগর',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tala',
            'bn_name' => 'তালা',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaliganj',
            'bn_name' => 'কালিগঞ্জ',
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jamalpur Sadar',
            'bn_name' => 'জামালপুর সদর',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Melandah',
            'bn_name' => 'মেলান্দহ',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Islampur',
            'bn_name' => 'ইসলামপুর',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dewangonj',
            'bn_name' => 'দেওয়ানগঞ্জ',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sarishabari',
            'bn_name' => 'সরিষাবাড়ী',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Madarganj',
            'bn_name' => 'মাদারগঞ্জ',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bokshiganj',
            'bn_name' => 'বকশীগঞ্জ',
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Itna',
            'bn_name' => 'ইটনা',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Katiadi',
            'bn_name' => 'কটিয়াদী',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhairab',
            'bn_name' => 'ভৈরব',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tarail',
            'bn_name' => 'তাড়াইল',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hossainpur',
            'bn_name' => 'হোসেনপুর',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pakundia',
            'bn_name' => 'পাকুন্দিয়া',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kuliarchar',
            'bn_name' => 'কুলিয়ারচর',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kishoreganj Sadar',
            'bn_name' => 'কিশোরগঞ্জ সদর',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Karimgonj',
            'bn_name' => 'করিমগঞ্জ',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bajitpur',
            'bn_name' => 'বাজিতপুর',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Austagram',
            'bn_name' => 'অষ্টগ্রাম',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mithamoin',
            'bn_name' => 'মিঠামইন',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nikli',
            'bn_name' => 'নিকলী',
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Barhatta',
            'bn_name' => 'বারহাট্টা',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Durgapur',
            'bn_name' => 'দুর্গাপুর',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kendua',
            'bn_name' => 'কেন্দুয়া',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Atpara',
            'bn_name' => 'আটপাড়া',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Madan',
            'bn_name' => 'মদন',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Khaliajuri',
            'bn_name' => 'খালিয়াজুরী',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalmakanda',
            'bn_name' => 'কলমাকান্দা',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mohongonj',
            'bn_name' => 'মোহনগঞ্জ',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Purbadhala',
            'bn_name' => 'পূর্বধলা',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Netrokona Sadar',
            'bn_name' => 'নেত্রকোণা সদর',
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sherpur Sadar',
            'bn_name' => 'শেরপুর সদর',
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nalitabari',
            'bn_name' => 'নালিতাবাড়ী',
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sreebordi',
            'bn_name' => 'শ্রীবরদী',
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nokla',
            'bn_name' => 'নকলা',
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jhenaigati',
            'bn_name' => 'ঝিনাইগাতী',
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Basail',
            'bn_name' => 'বাসাইল',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhuapur',
            'bn_name' => 'ভুয়াপুর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Delduar',
            'bn_name' => 'দেলদুয়ার',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ghatail',
            'bn_name' => 'ঘাটাইল',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gopalpur',
            'bn_name' => 'গোপালপুর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Madhupur',
            'bn_name' => 'মধুপুর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mirzapur',
            'bn_name' => 'মির্জাপুর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nagarpur',
            'bn_name' => 'নাগরপুর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sakhipur',
            'bn_name' => 'সখিপুর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tangail Sadar',
            'bn_name' => 'টাঙ্গাইল সদর',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalihati',
            'bn_name' => 'কালিহাতী',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dhanbari',
            'bn_name' => 'ধনবাড়ী',
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kahaloo',
            'bn_name' => 'কাহালু',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bogra Sadar',
            'bn_name' => 'বগুড়া সদর',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shariakandi',
            'bn_name' => 'সারিয়াকান্দি',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shajahanpur',
            'bn_name' => 'শাজাহানপুর',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dupchanchia',
            'bn_name' => 'দুপচাচিঁয়া',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Adamdighi',
            'bn_name' => 'আদমদিঘি',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nondigram',
            'bn_name' => 'নন্দিগ্রাম',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sonatala',
            'bn_name' => 'সোনাতলা',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dhunot',
            'bn_name' => 'ধুনট',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gabtali',
            'bn_name' => 'গাবতলী',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sherpur',
            'bn_name' => 'শেরপুর',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shibganj',
            'bn_name' => 'শিবগঞ্জ',
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chapainawabganj Sadar',
            'bn_name' => 'চাঁপাইনবাবগঞ্জ সদর',
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gomostapur',
            'bn_name' => 'গোমস্তাপুর',
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nachol',
            'bn_name' => 'নাচোল',
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bholahat',
            'bn_name' => 'ভোলাহাট',
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shibganj',
            'bn_name' => 'শিবগঞ্জ',
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Akkelpur',
            'bn_name' => 'আক্কেলপুর',
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kalai',
            'bn_name' => 'কালাই',
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Khetlal',
            'bn_name' => 'ক্ষেতলাল',
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Panchbibi',
            'bn_name' => 'পাঁচবিবি',
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Joypurhat Sadar',
            'bn_name' => 'জয়পুরহাট সদর',
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mohadevpur',
            'bn_name' => 'মহাদেবপুর',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Badalgachi',
            'bn_name' => 'বদলগাছী',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Patnitala',
            'bn_name' => 'পত্নিতলা',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dhamoirhat',
            'bn_name' => 'ধামইরহাট',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Niamatpur',
            'bn_name' => 'নিয়ামতপুর',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Manda',
            'bn_name' => 'মান্দা',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Atrai',
            'bn_name' => 'আত্রাই',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Raninagar',
            'bn_name' => 'রাণীনগর',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Naogaon Sadar',
            'bn_name' => 'নওগাঁ সদর',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Porsha',
            'bn_name' => 'পোরশা',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sapahar',
            'bn_name' => 'সাপাহার',
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Natore Sadar',
            'bn_name' => 'নাটোর সদর',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Singra',
            'bn_name' => 'সিংড়া',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Baraigram',
            'bn_name' => 'বড়াইগ্রাম',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bagatipara',
            'bn_name' => 'বাগাতিপাড়া',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lalpur',
            'bn_name' => 'লালপুর',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gurudaspur',
            'bn_name' => 'গুরুদাসপুর',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Naldanga',
            'bn_name' => 'নলডাঙ্গা',
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sujanagar',
            'bn_name' => 'সুজানগর',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ishurdi',
            'bn_name' => 'ঈশ্বরদী',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhangura',
            'bn_name' => 'ভাঙ্গুড়া',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pabna Sadar',
            'bn_name' => 'পাবনা সদর',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bera',
            'bn_name' => 'বেড়া',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Atghoria',
            'bn_name' => 'আটঘরিয়া',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chatmohar',
            'bn_name' => 'চাটমোহর',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Santhia',
            'bn_name' => 'সাঁথিয়া',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Faridpur',
            'bn_name' => 'ফরিদপুর',
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Paba',
            'bn_name' => 'পবা',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Durgapur',
            'bn_name' => 'দুর্গাপুর',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mohonpur',
            'bn_name' => 'মোহনপুর',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Charghat',
            'bn_name' => 'চারঘাট',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Puthia',
            'bn_name' => 'পুঠিয়া',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bagha',
            'bn_name' => 'বাঘা',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Godagari',
            'bn_name' => 'গোদাগাড়ী',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tanore',
            'bn_name' => 'তানোর',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bagmara',
            'bn_name' => 'বাগমারা',
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Belkuchi',
            'bn_name' => 'বেলকুচি',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chauhali',
            'bn_name' => 'চৌহালি',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kamarkhand',
            'bn_name' => 'কামারখন্দ',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kazipur',
            'bn_name' => 'কাজীপুর',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Raigonj',
            'bn_name' => 'রায়গঞ্জ',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shahjadpur',
            'bn_name' => 'শাহজাদপুর',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sirajganj Sadar',
            'bn_name' => 'সিরাজগঞ্জ সদর',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tarash',
            'bn_name' => 'তাড়াশ',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ullapara',
            'bn_name' => 'উল্লাপাড়া',
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nawabganj',
            'bn_name' => 'নবাবগঞ্জ',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Birganj',
            'bn_name' => 'বীরগঞ্জ',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ghoraghat',
            'bn_name' => 'ঘোড়াঘাট',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Birampur',
            'bn_name' => 'বিরামপুর',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Parbatipur',
            'bn_name' => 'পার্বতীপুর',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bochaganj',
            'bn_name' => 'বোচাগঞ্জ',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaharol',
            'bn_name' => 'কাহারোল',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Fulbari',
            'bn_name' => 'ফুলবাড়ী',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dinajpur Sadar',
            'bn_name' => 'দিনাজপুর সদর',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hakimpur',
            'bn_name' => 'হাকিমপুর',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Khansama',
            'bn_name' => 'খানসামা',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Birol',
            'bn_name' => 'বিরল',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chirirbandar',
            'bn_name' => 'চিরিরবন্দর',
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sadullapur',
            'bn_name' => 'সাদুল্লাপুর',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gaibandha Sadar',
            'bn_name' => 'গাইবান্ধা সদর',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Palashbari',
            'bn_name' => 'পলাশবাড়ী',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Saghata',
            'bn_name' => 'সাঘাটা',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gobindaganj',
            'bn_name' => 'গোবিন্দগঞ্জ',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sundarganj',
            'bn_name' => 'সুন্দরগঞ্জ',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Phulchari',
            'bn_name' => 'ফুলছড়ি',
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kurigram Sadar',
            'bn_name' => 'কুড়িগ্রাম সদর',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nageshwari',
            'bn_name' => 'নাগেশ্বরী',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bhurungamari',
            'bn_name' => 'ভুরুঙ্গামারী',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Phulbari',
            'bn_name' => 'ফুলবাড়ী',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rajarhat',
            'bn_name' => 'রাজারহাট',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ulipur',
            'bn_name' => 'উলিপুর',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chilmari',
            'bn_name' => 'চিলমারী',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rowmari',
            'bn_name' => 'রৌমারী',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Charrajibpur',
            'bn_name' => 'চর রাজিবপুর',
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lalmonirhat Sadar',
            'bn_name' => 'লালমনিরহাট সদর',
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaliganj',
            'bn_name' => 'কালীগঞ্জ',
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Hatibandha',
            'bn_name' => 'হাতীবান্ধা',
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Patgram',
            'bn_name' => 'পাটগ্রাম',
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Aditmari',
            'bn_name' => 'আদিতমারী',
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Syedpur',
            'bn_name' => 'সৈয়দপুর',
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Domar',
            'bn_name' => 'ডোমার',
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dimla',
            'bn_name' => 'ডিমলা',
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jaldhaka',
            'bn_name' => 'জলঢাকা',
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kishorganj',
            'bn_name' => 'কিশোরগঞ্জ',
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nilphamari Sadar',
            'bn_name' => 'নীলফামারী সদর',
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Panchagarh Sadar',
            'bn_name' => 'পঞ্চগড় সদর',
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Debiganj',
            'bn_name' => 'দেবীগঞ্জ',
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Boda',
            'bn_name' => 'বোদা',
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Atwari',
            'bn_name' => 'আটোয়ারী',
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tetulia',
            'bn_name' => 'তেতুলিয়া',
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rangpur Sadar',
            'bn_name' => 'রংপুর সদর',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Gangachara',
            'bn_name' => 'গংগাচড়া',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Taragonj',
            'bn_name' => 'তারাগঞ্জ',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Badargonj',
            'bn_name' => 'বদরগঞ্জ',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Mithapukur',
            'bn_name' => 'মিঠাপুকুর',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pirgonj',
            'bn_name' => 'পীরগঞ্জ',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kaunia',
            'bn_name' => 'কাউনিয়া',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pirgacha',
            'bn_name' => 'পীরগাছা',
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Thakurgaon Sadar',
            'bn_name' => 'ঠাকুরগাঁও সদর',
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Pirganj',
            'bn_name' => 'পীরগঞ্জ',
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ranisankail',
            'bn_name' => 'রাণীশংকৈল',
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Haripur',
            'bn_name' => 'হরিপুর',
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Baliadangi',
            'bn_name' => 'বালিয়াডাঙ্গী',
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Nabiganj',
            'bn_name' => 'নবীগঞ্জ',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bahubal',
            'bn_name' => 'বাহুবল',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Ajmiriganj',
            'bn_name' => 'আজমিরীগঞ্জ',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Baniachong',
            'bn_name' => 'বানিয়াচং',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Lakhai',
            'bn_name' => 'লাখাই',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chunarughat',
            'bn_name' => 'চুনারুঘাট',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Habiganj Sadar',
            'bn_name' => 'হবিগঞ্জ সদর',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Madhabpur',
            'bn_name' => 'মাধবপুর',
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Barlekha',
            'bn_name' => 'বড়লেখা',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kamolganj',
            'bn_name' => 'কমলগঞ্জ',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Kulaura',
            'bn_name' => 'কুলাউড়া',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Moulvibazar Sadar',
            'bn_name' => 'মৌলভীবাজার সদর',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Rajnagar',
            'bn_name' => 'রাজনগর',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sreemangal',
            'bn_name' => 'শ্রীমঙ্গল',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Juri',
            'bn_name' => 'জুড়ী',
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Sunamganj Sadar',
            'bn_name' => 'সুনামগঞ্জ সদর',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'South Sunamganj',
            'bn_name' => 'দক্ষিণ সুনামগঞ্জ',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Bishwambarpur',
            'bn_name' => 'বিশ্বম্ভরপুর',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Chhatak',
            'bn_name' => 'ছাতক',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jagannathpur',
            'bn_name' => 'জগন্নাথপুর',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dowarabazar',
            'bn_name' => 'দোয়ারাবাজার',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Tahirpur',
            'bn_name' => 'তাহিরপুর',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Dharmapasha',
            'bn_name' => 'ধর্মপাশা',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Jamalganj',
            'bn_name' => 'জামালগঞ্জ',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shalla',
            'bn_name' => 'শাল্লা',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Derai',
            'bn_name' => 'দিরাই',
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Belabo',
            'bn_name' => 'বেলাবো',
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Monohardi',
            'bn_name' => 'মনোহরদী',
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Narsingdi Sadar',
            'bn_name' => 'নরসিংদী সদর',
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Palash',
            'bn_name' => 'পলাশ',
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Raipura',
            'bn_name' => 'রায়পুরা',
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('upazillas')->insert([
            'name' => 'Shibpur',
            'bn_name' => 'শিবপুর',
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
