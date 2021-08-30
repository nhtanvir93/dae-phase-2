<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('bank_branches')->insert([
            'id' => 2,
            'name' => 'Barisal Office',
            'bank_id' => 1,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 3,
            'name' => 'Bogra Office',
            'bank_id' => 1,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 4,
            'name' => 'Chittagong Office',
            'bank_id' => 1,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 5,
            'name' => 'Khulna Office',
            'bank_id' => 1,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 896,
            'name' => 'Motijheel',
            'bank_id' => 1,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 897,
            'name' => 'Sadarghat',
            'bank_id' => 1,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 898,
            'name' => 'Rajshahi',
            'bank_id' => 1,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 899,
            'name' => 'Sylhet',
            'bank_id' => 1,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 900,
            'name' => 'Mymensingh',
            'bank_id' => 1,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 901,
            'name' => 'Rangpur',
            'bank_id' => 1,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 902,
            'name' => 'Agoiljhara Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 903,
            'name' => 'Aratder Patty Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 904,
            'name' => 'Uzirpur Bandar',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 905,
            'name' => 'College Road Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 906,
            'name' => 'Kamarkhali Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 907,
            'name' => 'Khanpura Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 908,
            'name' => 'C & B Road Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 909,
            'name' => 'Gouronadi Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 910,
            'name' => 'Chawk Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 911,
            'name' => 'Charamuddi Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 912,
            'name' => 'Chakhar Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 913,
            'name' => 'Torkey Bander  Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 914,
            'name' => 'Hizla Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 915,
            'name' => 'Nalchira Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 916,
            'name' => 'Neamoti Bandar Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 917,
            'name' => 'Paisharhat Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 918,
            'name' => 'Barishal Cadet College Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 919,
            'name' => 'Guthia Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 920,
            'name' => 'Bakergonj Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 921,
            'name' => 'Banaripara Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 922,
            'name' => 'Muladi Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 923,
            'name' => 'Medakul Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 924,
            'name' => 'Sagardi Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 925,
            'name' => 'Mehendigonj Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 926,
            'name' => 'Shaheberhat Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 927,
            'name' => 'Goila Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 928,
            'name' => 'Halta Bandar Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 929,
            'name' => 'Dhamura Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 930,
            'name' => 'Barishal University Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 931,
            'name' => 'Khatalia Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 932,
            'name' => 'Jhalakati Court bldg Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 933,
            'name' => 'Nolchity Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 934,
            'name' => 'Nachan Mohol Hat Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 935,
            'name' => 'Mollarhat Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 936,
            'name' => 'Rajapur Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 937,
            'name' => 'Gazaria Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 938,
            'name' => 'Char Fashion Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 939,
            'name' => 'Borhanuddin Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 940,
            'name' => 'Daulatkhan Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 941,
            'name' => 'Bangla Bazar Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 942,
            'name' => 'Tozumuddin Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 943,
            'name' => 'Bhola Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 944,
            'name' => 'Manpura Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 945,
            'name' => 'Mohazan patty  Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 946,
            'name' => 'Lalmohon Branch',
            'bank_id' => 2,
            'district_id' => 13,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 947,
            'name' => 'Kawkhali Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 948,
            'name' => 'Zia Nagar Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 949,
            'name' => 'Mathbaria Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 950,
            'name' => 'Nazirpur Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 951,
            'name' => 'Parerhat Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 952,
            'name' => 'Pirojpur Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 953,
            'name' => 'Tushkhali Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 954,
            'name' => 'Bhandaria Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 955,
            'name' => 'Sree Ram Kathi  Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 956,
            'name' => 'Swarupkathi Branch',
            'bank_id' => 2,
            'district_id' => 16,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 957,
            'name' => 'Ulania bazar Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 958,
            'name' => 'Kalapara Bandar  Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 959,
            'name' => 'Galachipa Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 960,
            'name' => 'Bakul Baria Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 961,
            'name' => 'Dumki Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 962,
            'name' => 'New Town Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 963,
            'name' => 'Patuakhali Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 964,
            'name' => 'Dashmina Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 965,
            'name' => 'Bauphal Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 966,
            'name' => 'Bogabonder Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 967,
            'name' => 'Mohipur Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 968,
            'name' => 'Moukaran bazar Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 969,
            'name' => 'Subidkhali Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 970,
            'name' => 'Barguna Court Buiding Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 971,
            'name' => 'Amtoli Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 972,
            'name' => 'Bamna Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 973,
            'name' => 'Patharghata Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 974,
            'name' => 'Betagi Branch',
            'bank_id' => 2,
            'district_id' => 15,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 975,
            'name' => 'Amin Jute Mills br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 976,
            'name' => 'Ctg. Urea Fertilizer Limited',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 977,
            'name' => 'Mirsarai Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 978,
            'name' => 'Railway Building Br',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 979,
            'name' => 'Reazuddin bazar Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 980,
            'name' => 'Rangunia Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 981,
            'name' => 'Roazarhat Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 982,
            'name' => 'Shah Amanat(R.) Int. Air Port. Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 983,
            'name' => 'Sadarghat Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 984,
            'name' => 'Sandwip Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 985,
            'name' => 'CUET Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 986,
            'name' => 'CDA Market Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 987,
            'name' => 'Sitakunda Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 988,
            'name' => 'Halishahar Housing Estate',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 989,
            'name' => 'Majirghat Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 990,
            'name' => 'Anwara br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 991,
            'name' => 'Kalarpul br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 992,
            'name' => 'Khanbahadur Bazar br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 993,
            'name' => 'Chandnaish br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 994,
            'name' => 'Dohazari br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 995,
            'name' => 'Patiya br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 996,
            'name' => 'Banskhali br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 997,
            'name' => 'Boalkhali br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 998,
            'name' => 'Mouluvibazar br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 999,
            'name' => 'Rustomhat Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1000,
            'name' => 'Lohagara br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1001,
            'name' => 'Rawshanhatbr',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1002,
            'name' => 'Satkania br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1003,
            'name' => 'Ukhia Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1004,
            'name' => 'Coxsbazar Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1005,
            'name' => 'Kutubdia Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1006,
            'name' => 'Chakaria Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1007,
            'name' => 'Teknaf Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1008,
            'name' => 'Dulahazra Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1009,
            'name' => 'Badarkhali Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1010,
            'name' => 'Moheshkhali Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1011,
            'name' => 'Ramu Br.',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1012,
            'name' => 'Eidgaon Branch',
            'bank_id' => 2,
            'district_id' => 8,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1013,
            'name' => 'Alikadam Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1014,
            'name' => 'Thanchi Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1015,
            'name' => 'Naikhangchari Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1016,
            'name' => 'Bandarban Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1017,
            'name' => 'Ruma Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1018,
            'name' => 'Roangchari Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1019,
            'name' => 'Lama Br.',
            'bank_id' => 2,
            'district_id' => 17,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1020,
            'name' => 'Kaokhali br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1021,
            'name' => 'Kaptai br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1022,
            'name' => 'Ghagra br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1023,
            'name' => 'Chandraghona br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1024,
            'name' => 'Jurachari br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1025,
            'name' => 'Naniarchar br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1026,
            'name' => 'New Court Building br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1027,
            'name' => 'Banarupa br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1028,
            'name' => 'Barakal br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1029,
            'name' => 'Baraichari br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1030,
            'name' => 'Baghaichari br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1031,
            'name' => 'Bilaichari br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1032,
            'name' => 'Rajashthali br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1033,
            'name' => 'Rangamati Br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1034,
            'name' => 'Longadu br.',
            'bank_id' => 2,
            'district_id' => 23,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1035,
            'name' => 'Khagrachari br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1036,
            'name' => 'Dighinala br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1037,
            'name' => 'Mahalchari br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1038,
            'name' => 'Matiranga br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1039,
            'name' => 'Panchari br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1040,
            'name' => 'Manikchari br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1041,
            'name' => 'Ramgarh br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1042,
            'name' => 'Laxmichari br.',
            'bank_id' => 2,
            'district_id' => 21,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1043,
            'name' => 'AraniBranch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1044,
            'name' => 'Khashiadanga Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1045,
            'name' => 'Godagari Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1046,
            'name' => 'Greater Road Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1047,
            'name' => 'Charghat Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1048,
            'name' => 'DugapurBranch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1049,
            'name' => 'Tanore Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1050,
            'name' => 'Paba Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1051,
            'name' => 'Police Academy Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1052,
            'name' => 'Puthia Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1053,
            'name' => 'Bagha Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1054,
            'name' => 'Bhabanigonj Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1055,
            'name' => 'Motihar Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1056,
            'name' => 'MonigramBranch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1057,
            'name' => 'MahanpurBranch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1058,
            'name' => 'Mundumala Hat Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1059,
            'name' => 'Mougachi BazarBranch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1060,
            'name' => 'Rajshahi Court Building Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1061,
            'name' => 'Rajshahi Cadet College Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1062,
            'name' => 'Rajshahi Medical College Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1063,
            'name' => 'Rajshahi Cantt.Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1064,
            'name' => 'Rajshahi Railway Complex Branch, Rajshahi',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1065,
            'name' => 'GomastapurBranch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1066,
            'name' => 'Chapainawabganj Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1067,
            'name' => 'Nachol Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1068,
            'name' => 'Bholahat Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1069,
            'name' => 'New Market Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1070,
            'name' => 'Rahanpur Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1071,
            'name' => 'Shibgonj Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1072,
            'name' => 'SonaMasjid Branch, Chapainawabganj',
            'bank_id' => 2,
            'district_id' => 56,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1073,
            'name' => 'Ahammedpur Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1074,
            'name' => 'Gurudaspur Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1075,
            'name' => 'Chanchkoir Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1076,
            'name' => 'DayarampurBranch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1077,
            'name' => 'Natore Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1078,
            'name' => 'Station Bazar Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1079,
            'name' => 'Noldanga Hat Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1080,
            'name' => 'Fulbagan Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1081,
            'name' => 'BaraigramBranch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1082,
            'name' => 'Baghatipara Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1083,
            'name' => 'Puratan Bus Stand Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1084,
            'name' => 'Lalpur Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1085,
            'name' => 'Singra Branch, Natore',
            'bank_id' => 2,
            'district_id' => 59,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1086,
            'name' => 'AbadpukurhatBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1087,
            'name' => 'AtraiBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1088,
            'name' => 'BadalgachiBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1089,
            'name' => 'BhanderpurBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1090,
            'name' => 'Bhawanipur Bazar Branch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1091,
            'name' => 'Dhamuir HatBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1092,
            'name' => 'Naogaon Branch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1093,
            'name' => 'TrimohiniBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1094,
            'name' => 'K.D More Branch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1095,
            'name' => 'MandaBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1096,
            'name' => 'MahadebpurBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1097,
            'name' => 'MohishbathanBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1098,
            'name' => 'Mongolbari HatBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1099,
            'name' => 'NiaamatpurBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1100,
            'name' => 'PatnitalaBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1101,
            'name' => 'PorshaBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1102,
            'name' => 'Sapahar Branch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1103,
            'name' => 'RaninagarBranch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1104,
            'name' => 'TTDC (Raninagar)Branch, Naogaon',
            'bank_id' => 2,
            'district_id' => 58,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1105,
            'name' => 'Akkelpur Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1106,
            'name' => 'Kalai Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1107,
            'name' => 'Khetlall Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1108,
            'name' => 'Joypurhat Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1109,
            'name' => 'Joypurhat East Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1110,
            'name' => 'Panchbibi Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1111,
            'name' => 'Punathat Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1112,
            'name' => 'Hatil Branch, Joypurhat',
            'bank_id' => 2,
            'district_id' => 57,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1113,
            'name' => 'Anantabazar Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1114,
            'name' => 'Arambaria Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1115,
            'name' => 'Atghoria Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1116,
            'name' => 'Ishwardi Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1117,
            'name' => 'Ekdanta Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1118,
            'name' => 'Karanja Bazar Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1119,
            'name' => 'Chatmohor Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1120,
            'name' => 'Dist. Board Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1121,
            'name' => 'Jorgacha Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1122,
            'name' => 'Dasuria Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1123,
            'name' => 'Pabna Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1124,
            'name' => 'Banwarinagar Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1125,
            'name' => 'Baghoil Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1126,
            'name' => 'Bera Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1127,
            'name' => 'Bhangura Bazar Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1128,
            'name' => 'Pabna Banijya Kendra Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1129,
            'name' => 'Santhia Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1130,
            'name' => 'Sujanagar Branch, Pabna',
            'bank_id' => 2,
            'district_id' => 60,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1131,
            'name' => 'Ullapara Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1132,
            'name' => 'Enayetpur Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1133,
            'name' => 'Shahid Sohrawardi Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1134,
            'name' => 'Kazipur Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1135,
            'name' => 'Court Building Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1136,
            'name' => 'Khaskawlia Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1137,
            'name' => 'Chandairkona Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1138,
            'name' => 'Chowbari Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1139,
            'name' => 'JamToil Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1140,
            'name' => 'Tarash Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1141,
            'name' => 'Sadanandapur Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1142,
            'name' => 'Dhangora Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1143,
            'name' => 'Naogaon Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1144,
            'name' => 'Natuarpara Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1145,
            'name' => 'Baghabari ghat Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1146,
            'name' => 'Lahiri Mohonpur Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1147,
            'name' => 'Shahjadpur Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1148,
            'name' => 'Sirajgonj Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1149,
            'name' => 'Sonamukhi Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1150,
            'name' => 'Sohagpur Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1151,
            'name' => 'Hatikumrul Branch, Sirajgonj',
            'bank_id' => 2,
            'district_id' => 62,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1152,
            'name' => 'Training Institute, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1153,
            'name' => 'Azizulhaque College Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1154,
            'name' => 'Adamdighi Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1155,
            'name' => 'College Road Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1156,
            'name' => 'Kahalu Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1157,
            'name' => 'Gabtoli Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1158,
            'name' => 'Guzia Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1159,
            'name' => 'Gohailhat Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1160,
            'name' => 'JamadarPukur Hat Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1161,
            'name' => 'Jampurhat Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1162,
            'name' => 'Talora Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1163,
            'name' => 'Dupchachia Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1164,
            'name' => 'Durgapur Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1165,
            'name' => 'Dhunat Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1166,
            'name' => 'Nandigram Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1167,
            'name' => 'Nasratpur Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1168,
            'name' => 'Namuzahat Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1169,
            'name' => 'Pally UnnanyanAcedemy Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1170,
            'name' => 'Bogra bazar Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1171,
            'name' => 'Bogra Cantt. Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1172,
            'name' => 'Baluahat Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1173,
            'name' => 'Mokamtola Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1174,
            'name' => 'Ranbagha bazar Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1175,
            'name' => 'ShahidZiaur Rahman Medical College Branch, Bo',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1176,
            'name' => 'Santaher Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1177,
            'name' => 'Shaharpukur Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1178,
            'name' => 'Shibgonj Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1179,
            'name' => 'Sherpur Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1180,
            'name' => 'Sherpur Road Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1181,
            'name' => 'Sariakandi Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1182,
            'name' => 'Sonatola Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1183,
            'name' => 'Syed Ahmed College Station Branch, Bogra',
            'bank_id' => 2,
            'district_id' => 55,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1184,
            'name' => 'Alfadanga Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1185,
            'name' => 'Kanaipur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1186,
            'name' => 'Kamarkhali Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1187,
            'name' => 'Court Building  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1188,
            'name' => 'Khalilpur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1189,
            'name' => 'Goal Chamat Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1190,
            'name' => 'Charbhadrasan  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1191,
            'name' => 'Tepakhola Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1192,
            'name' => 'Talma Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1193,
            'name' => 'Nagar Kanda Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1194,
            'name' => 'Faridpur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1195,
            'name' => 'Shaltha Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1196,
            'name' => 'Biswa Zaker Monjil Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1197,
            'name' => 'Boalmari Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1198,
            'name' => 'Shirgram Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1199,
            'name' => 'Madhu Khali Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1200,
            'name' => 'Moyenda Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1201,
            'name' => 'Madhukhali U.Z. Complex Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1202,
            'name' => 'Bhanga Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1203,
            'name' => 'Shadar U.Z. Complex Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1204,
            'name' => 'Hat Krishnapur  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1205,
            'name' => 'Hazigonj Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1206,
            'name' => 'Sadarpur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1207,
            'name' => 'Kashiani Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1208,
            'name' => 'Patgati Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1209,
            'name' => 'Ghagoir  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1210,
            'name' => 'Tungipara Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1211,
            'name' => 'Pachuria Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1212,
            'name' => 'D.C Complex Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1213,
            'name' => 'Banagram Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1214,
            'name' => 'Bowltali Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1215,
            'name' => 'Bhatiapara Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1216,
            'name' => 'Gopalgonj Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1217,
            'name' => 'Mokshedpur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1218,
            'name' => 'Bash Baria Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1219,
            'name' => 'Kalkini Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1220,
            'name' => 'Kulpaddi Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1221,
            'name' => 'Charmuguria Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1222,
            'name' => 'Tekerhat Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1223,
            'name' => 'Dattapara Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1224,
            'name' => 'Powrashava Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1225,
            'name' => 'Madaripur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1226,
            'name' => 'Mill Gate Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1227,
            'name' => 'Rajoir Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1228,
            'name' => 'Shibchar Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1229,
            'name' => 'Angaria Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1230,
            'name' => 'Goshairhat Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1231,
            'name' => 'Jajira Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1232,
            'name' => 'Damuddya Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1233,
            'name' => 'Bhedargonj Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1234,
            'name' => 'Naria Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1235,
            'name' => 'Shariatpur Branch',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1236,
            'name' => 'Kashba Mazail  Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1237,
            'name' => 'Goalanda Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1238,
            'name' => 'Goalanda Upazella Complex  Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1239,
            'name' => 'Pangsha Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1240,
            'name' => 'Pangsha Upazella Complex Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1241,
            'name' => 'Baharpur Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1242,
            'name' => 'Baliakandi Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1243,
            'name' => 'Belgachi Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1244,
            'name' => 'Machpara Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1245,
            'name' => 'Rajbari  Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1246,
            'name' => 'Rajbari Upazella Complex Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1247,
            'name' => 'Kalukhali Branch',
            'bank_id' => 2,
            'district_id' => 37,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1248,
            'name' => 'Amla Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1249,
            'name' => 'Ektarpurhat Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1250,
            'name' => 'Koya Bazar Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1251,
            'name' => 'N.S. Road Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1252,
            'name' => 'Court Building Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1253,
            'name' => 'Kumarkhali Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1254,
            'name' => 'Kumarkhali Upazilla Complex Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1255,
            'name' => 'Kustia Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1256,
            'name' => 'Halsha Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1257,
            'name' => 'Khoksha Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1258,
            'name' => 'Dohakula Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1259,
            'name' => 'Daulatpur Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1260,
            'name' => 'Nandalalpur Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1261,
            'name' => 'Paschim Abdelpur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1262,
            'name' => 'Poradah Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1263,
            'name' => 'Bheramara Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1264,
            'name' => 'Bheramara Power Stn Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1265,
            'name' => 'Madhupur Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1266,
            'name' => 'Mirpur Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1267,
            'name' => 'Shamaspur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1268,
            'name' => 'Kushtia Sugar Mills Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1269,
            'name' => 'Harinarayanpur  Branch',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1270,
            'name' => 'Alamdanga Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1271,
            'name' => 'Uthli Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1272,
            'name' => 'Gakulkhali Bazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1273,
            'name' => 'Chuadanga Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1274,
            'name' => 'Jiban Nagar Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1275,
            'name' => 'Dingiadah Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1276,
            'name' => 'Amjhupi Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1277,
            'name' => 'Garadob Bazar  Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1278,
            'name' => 'Gangni Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1279,
            'name' => 'Gangni Thana Parishad Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1280,
            'name' => 'Darshana Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1281,
            'name' => 'Hatboalia Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1282,
            'name' => 'Munshigonj Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1283,
            'name' => 'Sarojganj bazar Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1284,
            'name' => 'Damurhuda Branch',
            'bank_id' => 2,
            'district_id' => 40,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1285,
            'name' => 'Meherpur Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1286,
            'name' => 'Jore Pukuria Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1287,
            'name' => 'Meherpur Court Buildg Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1288,
            'name' => 'Mujibnagar Upazilla Branch',
            'bank_id' => 2,
            'district_id' => 29,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1289,
            'name' => 'Ibrahimpur Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1290,
            'name' => 'Uttara Model Town Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1291,
            'name' => 'Uttar Khan Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1292,
            'name' => 'Custom House Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1293,
            'name' => 'Kawran Bazar Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1294,
            'name' => 'Farmgate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1295,
            'name' => 'Gulshan Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1296,
            'name' => 'Gulshan New North Circle Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1297,
            'name' => 'Hazrat Shahjalal(R) Int. Airport Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1298,
            'name' => 'Public Service Commission Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1299,
            'name' => 'Dhaka Registration Complex Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1300,
            'name' => 'Tejgaon Industrial Area Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1301,
            'name' => 'Ashulia bazar Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1302,
            'name' => 'Neval Head Quarters Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1303,
            'name' => 'Prime Ministers Office Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1304,
            'name' => 'Kurmitola Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1305,
            'name' => 'Bangabandu Jatio Stadium Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1306,
            'name' => 'Banani Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1307,
            'name' => 'Banani Bazar Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1308,
            'name' => 'Badda Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1309,
            'name' => 'Baridhara Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1310,
            'name' => 'Baitul Mukarram Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1311,
            'name' => 'Moghbazar Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1312,
            'name' => 'Mohakhali Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1313,
            'name' => 'Sonargoan Hotel Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1314,
            'name' => 'Agrani Balika Biddalaya br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1315,
            'name' => 'Agargaon Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1316,
            'name' => 'Aminbazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1317,
            'name' => 'Kakrail br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1318,
            'name' => 'Kalampur Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1319,
            'name' => 'Krishibazar br',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1320,
            'name' => 'Jhikatola br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1321,
            'name' => 'Dhaka University br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1322,
            'name' => 'Dhaka EPZ br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1323,
            'name' => 'Dhamrai br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1324,
            'name' => 'Nayarhat br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1325,
            'name' => 'New Market br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1326,
            'name' => 'BUET Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1327,
            'name' => 'Bazme Qaderia Complex br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1328,
            'name' => 'BISE Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1329,
            'name' => 'BMEB Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1330,
            'name' => 'Begum Rokeya Sarani br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1331,
            'name' => 'Dhanmondi (Ladies) (SB)',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1332,
            'name' => 'Custom House Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1333,
            'name' => 'Mirpur Industrial area',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1334,
            'name' => 'Mirpur cantonment.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1335,
            'name' => 'Mohammadpur Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1336,
            'name' => 'Lalmatia br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1337,
            'name' => 'Public Service Commission Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1338,
            'name' => 'Savar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1339,
            'name' => 'Savar Cantt.br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1340,
            'name' => 'Sat Masjid Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1341,
            'name' => 'Supreme Court Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1342,
            'name' => 'Segun Bagicha br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1343,
            'name' => 'Hazaribag br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1344,
            'name' => 'Hotel Sheraton br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1345,
            'name' => 'Awlad Hossain Market br',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1346,
            'name' => 'NCTB br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1347,
            'name' => 'Kamalapur Railway Station(ICD) br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1348,
            'name' => 'College Gate br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1349,
            'name' => 'Kallayanpur br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1350,
            'name' => 'Krishi Bhaban br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1351,
            'name' => 'Khilgaon br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1352,
            'name' => 'Gana Bhaban br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1353,
            'name' => 'Goran br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1354,
            'name' => 'Green Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1355,
            'name' => 'Jatio Sangsad Bhaban',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1356,
            'name' => 'Dayagonj br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1357,
            'name' => 'Nagar Bhaban br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1358,
            'name' => 'Fakirapool br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1359,
            'name' => 'Banga Bhaban br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1360,
            'name' => 'Bawani Nagar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1361,
            'name' => 'Bashaboo br',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1362,
            'name' => 'Viqarun-nesa-noon School br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1363,
            'name' => 'Manik Mia Avenue br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1364,
            'name' => 'Malibagh br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1365,
            'name' => 'Mirpur Section-1 br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1366,
            'name' => 'Jatrabari br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1367,
            'name' => 'Rampura br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1368,
            'name' => 'Rajuk Bhaban br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1369,
            'name' => 'Shahjahanpur br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1370,
            'name' => 'Sonargaon Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1371,
            'name' => 'Saidabad Bus Terminal br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1372,
            'name' => 'Agla Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1373,
            'name' => 'Ati Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1374,
            'name' => 'Armanitola br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1375,
            'name' => 'Iswar Chandra Street br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1376,
            'name' => 'Urdu Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1377,
            'name' => 'Wari br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1378,
            'name' => 'Kalakopa br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1379,
            'name' => 'Kalatia br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1380,
            'name' => 'Keranigonj br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1381,
            'name' => 'Chowk Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1382,
            'name' => 'Churain br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1383,
            'name' => 'Joypara br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1384,
            'name' => 'District Council Hall br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1385,
            'name' => 'Distrilary Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1386,
            'name' => 'Nawabgonj br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1387,
            'name' => 'Pangaon ICT Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1388,
            'name' => 'Nawabpur Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1389,
            'name' => 'North South Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1390,
            'name' => 'Naya Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1391,
            'name' => 'Nazimuddin Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1392,
            'name' => 'Nazira Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1393,
            'name' => 'Palamgonj br',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1394,
            'name' => 'Postagola br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1395,
            'name' => 'Farashgonj br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1396,
            'name' => 'Babu Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1397,
            'name' => 'Mokimkatara br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1398,
            'name' => 'Mitford Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1399,
            'name' => 'Rasulpur Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1400,
            'name' => 'Ruhitpur br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1401,
            'name' => 'Laxmi Bazar br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1402,
            'name' => 'Lalbagh Road br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1403,
            'name' => 'Araihazar Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1404,
            'name' => 'Kuripara Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1405,
            'name' => 'Godnail Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1406,
            'name' => 'Gopaldi Bazar Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1407,
            'name' => 'Narayangonj Dockyard Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1408,
            'name' => 'Tarabo Bazar Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1409,
            'name' => 'Dharmagonj Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1410,
            'name' => 'Dhuptara Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1411,
            'name' => 'Nabigonj Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1412,
            'name' => 'Nitaigonj Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1413,
            'name' => 'Panchrukhi Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1414,
            'name' => 'Fatullah Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1415,
            'name' => 'Madangonj Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1416,
            'name' => 'Foreign Exchange Branch Narayanganj',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1417,
            'name' => 'Mograpara Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1418,
            'name' => 'Rupgonj Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1419,
            'name' => 'Sonargaon Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1420,
            'name' => 'Bondor Branch',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1421,
            'name' => 'Sree Nagar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1422,
            'name' => 'Gazaria Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1423,
            'name' => 'Tongibari Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1424,
            'name' => 'Taltola Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1425,
            'name' => 'Dighali Bazar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1426,
            'name' => 'Balurchar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1427,
            'name' => 'Bashail Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1428,
            'name' => 'Bhaberchar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1429,
            'name' => 'Maowa Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1430,
            'name' => 'Munshigonj Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1431,
            'name' => 'Rekabi bazar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1432,
            'name' => 'Shekhar Nagar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1433,
            'name' => 'Keyain Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1434,
            'name' => 'Sirajdikhan Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1435,
            'name' => 'Shukhbashpur Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1436,
            'name' => 'Sayedpur Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1437,
            'name' => 'Holdia Bazar Branch',
            'bank_id' => 2,
            'district_id' => 34,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1438,
            'name' => 'Court Building Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1439,
            'name' => 'Goradia Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1440,
            'name' => 'Ghorashal Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1441,
            'name' => 'Danga Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1442,
            'name' => 'Narshingdi Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1443,
            'name' => 'Narayanpur Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1444,
            'name' => 'Palash Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1445,
            'name' => 'Panchdona Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1446,
            'name' => 'Putia Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1447,
            'name' => 'Bakhar Nagar Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1448,
            'name' => 'Belaboo Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1449,
            'name' => 'Beltoli Bazar Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1450,
            'name' => 'Monohardi Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1451,
            'name' => 'Madhabdi Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1452,
            'name' => 'Rampur Bazar Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1453,
            'name' => 'Raipura Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1454,
            'name' => 'Shibpur Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1455,
            'name' => 'Satirpara Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1456,
            'name' => 'Saidabad Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1457,
            'name' => 'Poradia Bazar Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1458,
            'name' => 'Ghior Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1459,
            'name' => 'Chandoir Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1460,
            'name' => 'Dargram Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1461,
            'name' => 'Daulatpur Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1462,
            'name' => 'Balirtek Bazar Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1463,
            'name' => 'Manikgonj Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1464,
            'name' => 'Manikgonj Upazila Complex Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1465,
            'name' => 'Shivalaya Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1466,
            'name' => 'Saturia Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1467,
            'name' => 'Singair Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1468,
            'name' => 'Harirampur Branch',
            'bank_id' => 2,
            'district_id' => 76,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1469,
            'name' => 'Kapasia Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1470,
            'name' => 'Kaliakoir Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1471,
            'name' => 'Kaligonj (Gazipur)',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1472,
            'name' => 'Gazipur Court Building Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1473,
            'name' => 'Joydebpur Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1474,
            'name' => 'National University Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1475,
            'name' => 'Tongi Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1476,
            'name' => 'Tongi Bazar Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1477,
            'name' => 'Pubail Bazar Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1478,
            'name' => 'BSMR Krishi Bsihahiddalaya Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1479,
            'name' => 'Barmi Bazar Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1480,
            'name' => 'BARI Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1481,
            'name' => 'BRRI Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1482,
            'name' => 'BOF.Gazipur Cantt. Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1483,
            'name' => 'BSCIC. Industrial Area Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1484,
            'name' => 'Bhawal Jamalpur Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1485,
            'name' => 'Rajendrapur Cantt. Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1486,
            'name' => 'Shafipur Anser Academy Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1487,
            'name' => 'Sreepur Thana Head Quarter Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1488,
            'name' => 'Station Road Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1489,
            'name' => 'Gazipur Sadar Thana Complex Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1490,
            'name' => 'Singhsree Bazar Branch',
            'bank_id' => 2,
            'district_id' => 30,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1491,
            'name' => 'Addabazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1492,
            'name' => 'Eliatgonj Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1493,
            'name' => 'Wapda Building Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1494,
            'name' => 'Kangsha Nagar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1495,
            'name' => 'Comilla Cant. Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1496,
            'name' => 'Kotbari Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1497,
            'name' => 'Court Building Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1498,
            'name' => 'Gowripur Bazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1499,
            'name' => 'Chandina Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1500,
            'name' => 'Chowddagram Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1501,
            'name' => 'Daudkandi Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1502,
            'name' => 'Debidar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1503,
            'name' => 'Dowlatgonj Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1504,
            'name' => 'Nangalkot Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1505,
            'name' => 'Noabazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1506,
            'name' => 'Paramtola Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1507,
            'name' => 'Payalgacha Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1508,
            'name' => 'Barura Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1509,
            'name' => 'Brahmanpara Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1510,
            'name' => 'BISE Building Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1511,
            'name' => 'Burichang Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1512,
            'name' => 'Bharasar Bazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1513,
            'name' => 'Meghna Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1514,
            'name' => 'Muradnagar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1515,
            'name' => 'Companigonj Bazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1516,
            'name' => 'Ram Mohon Bazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1517,
            'name' => 'Roypur Bazar Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1518,
            'name' => 'Shreekail Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1519,
            'name' => 'Comilla Sadar Dakkhin Upazill Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1520,
            'name' => 'Suagazi Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1521,
            'name' => 'Station Road Comilla Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1522,
            'name' => 'Homna Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1523,
            'name' => 'Monohorgonj Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1524,
            'name' => 'Amanullapur Bazar Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1525,
            'name' => 'College Road Chaumuhani Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1526,
            'name' => 'Kankirhat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1527,
            'name' => 'Kalamunshir Bazar Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1528,
            'name' => 'Khalifarhat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1529,
            'name' => 'Charbata Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1530,
            'name' => 'Charmotua Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1531,
            'name' => 'Chatkhil Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1532,
            'name' => 'Chaprashirhat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1533,
            'name' => 'Chowdhurihat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1534,
            'name' => 'Chowmuhuni Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1535,
            'name' => 'Chayani Bazar Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1536,
            'name' => 'Jaminderhat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1537,
            'name' => 'Tamaruddi Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1538,
            'name' => 'Dayaramdi Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1539,
            'name' => 'Pouro Biponi Bitan Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1540,
            'name' => 'Bashurhat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1541,
            'name' => 'Noakhali Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1542,
            'name' => 'Maijdi Bazar Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1543,
            'name' => 'Shahapur Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1544,
            'name' => 'Sagoria Bazar Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1545,
            'name' => 'Subarna Char Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1546,
            'name' => 'Senbag Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1547,
            'name' => 'Sebarhat Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1548,
            'name' => 'Sonaimuri Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1549,
            'name' => 'Sonapur Old Town Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1550,
            'name' => 'Hatia Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1551,
            'name' => 'Hatia Thana Parisad Branch',
            'bank_id' => 2,
            'district_id' => 22,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1552,
            'name' => 'Kamalnagar Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1553,
            'name' => 'Kanchanpur Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1554,
            'name' => 'Char Alexender Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1555,
            'name' => 'Chandragonj Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1556,
            'name' => 'Char Lawrence Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1557,
            'name' => 'Charshita Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1558,
            'name' => 'Bhabaniganj Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1559,
            'name' => 'Rakhalia Bazar Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1560,
            'name' => 'Ramgonj Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1561,
            'name' => 'Raipur Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1562,
            'name' => 'Lakshmipur Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1563,
            'name' => 'Haidargonj Branch',
            'bank_id' => 2,
            'district_id' => 27,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1564,
            'name' => 'Islampur Road Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1565,
            'name' => 'Guthuma Bazar Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1566,
            'name' => 'Chhagalnaiya Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1567,
            'name' => 'Dagonbhuiyan Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1568,
            'name' => 'Parshuram Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1569,
            'name' => 'Pachgachia Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1570,
            'name' => 'Fulgazi Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1571,
            'name' => 'Feni Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1572,
            'name' => 'Baktermunshi Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1573,
            'name' => 'Mohipal Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1574,
            'name' => 'Matiagoda Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1575,
            'name' => 'Munshirhat Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1576,
            'name' => 'Laskerhat Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1577,
            'name' => 'Lemua Bazar Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1578,
            'name' => 'Sadar Upazilla Complex Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1579,
            'name' => 'Selonia Bazar Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1580,
            'name' => 'Sonagazi Branch',
            'bank_id' => 2,
            'district_id' => 20,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1581,
            'name' => 'Aligonj Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1582,
            'name' => 'Waruk Bazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1583,
            'name' => 'Kachua Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1584,
            'name' => 'Khilabazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1585,
            'name' => 'Gazipur Bazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1586,
            'name' => 'Chandpur Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1587,
            'name' => 'Sengar Char Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1588,
            'name' => 'Nabipur Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1589,
            'name' => 'Kaliapara Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1590,
            'name' => 'Puran Bazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1591,
            'name' => 'Farazikandi Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1592,
            'name' => 'Faridgonj Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1593,
            'name' => 'Matlabgonj Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1594,
            'name' => 'Notun Bazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1595,
            'name' => 'Rahima Nagar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1596,
            'name' => 'Shahrasti Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1597,
            'name' => 'Haimchar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1598,
            'name' => 'Sachar Bazar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1599,
            'name' => 'Sologhar Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1600,
            'name' => 'Haziganj Branch',
            'bank_id' => 2,
            'district_id' => 25,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1601,
            'name' => 'Akhaura Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1602,
            'name' => 'Ashugonj Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1603,
            'name' => 'Kasba Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1604,
            'name' => 'Kuti Bazar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1605,
            'name' => 'Gokorno Ghat Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1606,
            'name' => 'Chatalpar Bazar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1607,
            'name' => 'Chandpur Bazar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1608,
            'name' => 'Ashugonj Fertilizer Factory Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1609,
            'name' => 'Nabinagar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1610,
            'name' => 'Nasir Nagar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1611,
            'name' => 'New Market Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1612,
            'name' => 'Fandauk Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1613,
            'name' => 'Bancharampur Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1614,
            'name' => 'Brahmonbaria Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1615,
            'name' => 'T.A Road Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1616,
            'name' => 'Mirashani Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1617,
            'name' => 'Medda UZ Compl. Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1618,
            'name' => 'Rasullabad Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1619,
            'name' => 'Ruposdi Bazar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1620,
            'name' => 'Shamgram Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1621,
            'name' => 'Sarail Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1622,
            'name' => 'Singer Bil Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1623,
            'name' => 'Harinber Bazar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1624,
            'name' => 'Bijoynagar Branch',
            'bank_id' => 2,
            'district_id' => 24,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1625,
            'name' => 'Asim Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1626,
            'name' => 'Ishwargonj br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1627,
            'name' => 'Kalibari Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1628,
            'name' => 'Valuka br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1629,
            'name' => 'Gafargaon br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1630,
            'name' => 'Gyeshpur Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1631,
            'name' => 'Gouripur br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1632,
            'name' => 'Taherghat Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1633,
            'name' => 'Trisal br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1634,
            'name' => 'Dhobaura br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1635,
            'name' => 'Nandial br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1636,
            'name' => 'Phulpur br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1637,
            'name' => 'Fulbaria br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1638,
            'name' => 'Mymensingh Business Centre br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1639,
            'name' => 'Balia Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1640,
            'name' => 'BINA Br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1641,
            'name' => 'Keshoregonj Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1642,
            'name' => 'Matsa Gobeshona Instt. Br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1643,
            'name' => 'Muktagacha br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1644,
            'name' => 'Shambhuganj Bazar br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1645,
            'name' => 'Sibgohnj br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1646,
            'name' => 'Haluaghat br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1647,
            'name' => 'Mymensingh br.',
            'bank_id' => 2,
            'district_id' => 5,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1648,
            'name' => 'Jhenaigati br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1649,
            'name' => 'Nakla br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1650,
            'name' => 'Nalitabari br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1651,
            'name' => 'Shreebordi br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1652,
            'name' => 'Sherpur br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1653,
            'name' => 'Surjadi Bazar br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1654,
            'name' => 'Nayani Bazar br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1655,
            'name' => 'Rajibpur br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1656,
            'name' => 'Rowmari br.',
            'bank_id' => 2,
            'district_id' => 53,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1657,
            'name' => 'Islampur Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1658,
            'name' => 'Bara Masjid Road br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1659,
            'name' => 'Jamalpur br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1660,
            'name' => 'Jamalpur Bazar br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1661,
            'name' => 'Dewangonj Sugar Mill Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1662,
            'name' => 'Dewangonj Bazar Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1663,
            'name' => 'Nandina br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1664,
            'name' => 'Bakshigonj Br',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1665,
            'name' => 'BSCIC Industrial area br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1666,
            'name' => 'Chaparkona br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1667,
            'name' => 'Mandargonj Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1668,
            'name' => 'Medical Road',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1669,
            'name' => 'Melandah Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1670,
            'name' => 'Jamuna Fertilizer Factory Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1671,
            'name' => 'Shereepur Kumaria Bazar br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1672,
            'name' => 'Sharisabari br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1673,
            'name' => 'Shanandabari Bazar Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1674,
            'name' => 'Sharisabari Upzila Complex Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1675,
            'name' => 'Hazrabari Br.',
            'bank_id' => 2,
            'district_id' => 49,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1676,
            'name' => 'Austogram br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1677,
            'name' => 'Itna br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1678,
            'name' => 'Katiadi bazar br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1679,
            'name' => 'Karimgonj br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1680,
            'name' => 'Kaliachapra br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1681,
            'name' => 'Kishoregonj br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1682,
            'name' => 'Kuliarchar br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1683,
            'name' => 'Chhoysuti br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1684,
            'name' => 'Hossainpur br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1685,
            'name' => 'Nikli br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1686,
            'name' => 'Bhairab br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1687,
            'name' => 'Tarail br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1688,
            'name' => 'Pakundia br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1689,
            'name' => 'Niamatpur br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1690,
            'name' => 'Bazitpur br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1691,
            'name' => 'Mithamoin br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1692,
            'name' => 'Domarakanda br.',
            'bank_id' => 2,
            'district_id' => 50,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1693,
            'name' => 'Kalihati br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1694,
            'name' => 'Kendua bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1695,
            'name' => 'Pakutia br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1696,
            'name' => 'Gopalpur br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1697,
            'name' => 'Gobindasi br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1698,
            'name' => 'Victoria Road br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1699,
            'name' => 'Ghatail br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1700,
            'name' => 'Tangail br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1701,
            'name' => 'Tangail Bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1702,
            'name' => 'Delduar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1703,
            'name' => 'Mohonpur br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1704,
            'name' => 'Nagarpur br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1705,
            'name' => 'Maolana Vasani S and T University br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1706,
            'name' => 'Pakulla Bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1707,
            'name' => 'Nikrail br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1708,
            'name' => 'Court Building br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1709,
            'name' => 'Falda bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1710,
            'name' => 'Bolla bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1711,
            'name' => 'Bashail br. tangail',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1712,
            'name' => 'Gorai br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1713,
            'name' => 'Bhuapur br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1714,
            'name' => 'Modhupur br. Tangail',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1715,
            'name' => 'Mymensingh Road br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1716,
            'name' => 'Mirzapur br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1717,
            'name' => 'Dhanbari br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1718,
            'name' => 'Lauhati br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1719,
            'name' => 'Shaid salauddin cantonment br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1720,
            'name' => 'Shakhipur br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1721,
            'name' => 'Nolin Bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1722,
            'name' => 'Garo Bazar br.',
            'bank_id' => 2,
            'district_id' => 54,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1723,
            'name' => 'Atpara br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1724,
            'name' => 'Kolmakanda br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1725,
            'name' => 'Kandua br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1726,
            'name' => 'Khaliazuri br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1727,
            'name' => 'Thakurkona Bazar br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1728,
            'name' => 'Durgapur br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1729,
            'name' => 'Netrokona br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1730,
            'name' => 'Purbodhala br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1731,
            'name' => 'Barhatta br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1732,
            'name' => 'Madan br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1733,
            'name' => 'Madanpur br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1734,
            'name' => 'Lepsia br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1735,
            'name' => 'Mohongonj br.',
            'bank_id' => 2,
            'district_id' => 52,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1736,
            'name' => 'Kawnia',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1737,
            'name' => 'Kacharibazar',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1738,
            'name' => 'Khalashpir',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1739,
            'name' => 'Gangachara',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1740,
            'name' => 'Taragonj',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1741,
            'name' => 'Jaygirhat',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1742,
            'name' => 'Chatrahat',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1743,
            'name' => 'Dhap',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1744,
            'name' => 'Laldighi hat',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1745,
            'name' => 'Pirgacha',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1746,
            'name' => 'Badargonj',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1747,
            'name' => 'Mahigonj',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1748,
            'name' => 'Rangpur Bazar',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1749,
            'name' => 'Mithapukur',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1750,
            'name' => 'Mirbag',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1751,
            'name' => 'Rangpur Cantt',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1752,
            'name' => 'Pirganj',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1753,
            'name' => 'Haragacha',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1754,
            'name' => 'Kishoregonj',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1755,
            'name' => 'Chilahati',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1756,
            'name' => 'Jaldhaka',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1757,
            'name' => 'Dimla',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1758,
            'name' => 'Domar',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1759,
            'name' => 'Nilphamari',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1760,
            'name' => 'Nilphamari Bazar',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1761,
            'name' => 'Mirgonj',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1762,
            'name' => 'Syedpur',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1763,
            'name' => 'Syedpur Cantt.',
            'bank_id' => 2,
            'district_id' => 67,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1764,
            'name' => 'Ulipur',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1765,
            'name' => 'Kurigram',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1766,
            'name' => 'Chilmari',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1767,
            'name' => 'Nageshwari',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1768,
            'name' => 'Fulbari (Kurigram)',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1769,
            'name' => 'Bhurungamari',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1770,
            'name' => 'Rajarhat',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1771,
            'name' => 'Rowmari',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1779,
            'name' => 'Kamdia',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1780,
            'name' => 'Kamarzani',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1781,
            'name' => 'Gaibanda',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1782,
            'name' => 'Gobindogonj',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1783,
            'name' => 'Palashbari',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1784,
            'name' => 'Mahimagonj',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1785,
            'name' => 'Fashitola',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1786,
            'name' => 'Fulchari',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1787,
            'name' => 'Birat Hat',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1788,
            'name' => 'Bharatkhali',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1789,
            'name' => 'Bonarpara',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1790,
            'name' => 'Puran Bazar',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1791,
            'name' => 'D.B Road',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1792,
            'name' => 'Saghata',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1793,
            'name' => 'Sadullapur',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1794,
            'name' => 'Sundargonj',
            'bank_id' => 2,
            'district_id' => 64,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1795,
            'name' => 'Court Building Dinajpur',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1796,
            'name' => 'Station Road',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1797,
            'name' => 'Suihari',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1798,
            'name' => 'Sheikh Pura',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1799,
            'name' => 'Parbatipur',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1800,
            'name' => 'Bhawanipur Bazar',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1801,
            'name' => 'Birgonj',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1802,
            'name' => 'Ghoraghat',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1803,
            'name' => 'Raniganj Bazar',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1804,
            'name' => 'Setabganj',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1805,
            'name' => 'Mill Road, Setabganj',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1806,
            'name' => 'Khanshama',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1807,
            'name' => 'Pakerhat',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1808,
            'name' => 'Kachiniahat',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1809,
            'name' => 'Kaharol',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1810,
            'name' => 'Shahid Mahbub Cantt',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1811,
            'name' => 'Joynandahat',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1812,
            'name' => 'Hakimpur',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1813,
            'name' => 'Phulbari',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1814,
            'name' => 'Aftabgonj',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1815,
            'name' => 'Binnakuri',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1816,
            'name' => 'Chirir Bandar',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1817,
            'name' => 'Farakkabadh',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1818,
            'name' => 'Nawabganj',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1819,
            'name' => 'Osmanpur',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1820,
            'name' => 'Birol',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1821,
            'name' => 'Birampur',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1822,
            'name' => 'Huglipara',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1823,
            'name' => 'Madhyapara Kathin shila Prokalpo',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1824,
            'name' => 'Barapukuria Kaylakhani',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1825,
            'name' => 'Pulhat',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1826,
            'name' => 'Akhanagar',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1827,
            'name' => 'Gareyahat',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1828,
            'name' => 'Chowduryhat',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1829,
            'name' => 'Jabarhat',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1830,
            'name' => 'Thakurgaon',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1831,
            'name' => 'Thakurgaon Sugar Mills',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1832,
            'name' => 'Nekmarad',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1833,
            'name' => 'Pirgonj',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1834,
            'name' => 'Puratan Bus Stand',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1835,
            'name' => 'Baliadangi',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1836,
            'name' => 'Bhulli Bazar',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1837,
            'name' => 'Ranisankoil',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1838,
            'name' => 'Ruhia',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1839,
            'name' => 'Sibgonj',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1840,
            'name' => 'Horipur',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1841,
            'name' => 'Panchagar',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1842,
            'name' => 'Tatulia',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1843,
            'name' => 'Bhajanpur',
            'bank_id' => 2,
            'district_id' => 70,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1845,
            'name' => 'Atwari',
            'bank_id' => 2,
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1846,
            'name' => 'Boda',
            'bank_id' => 2,
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1847,
            'name' => 'Amjad Ali Road br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1848,
            'name' => 'Osmani Biman Bandar br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1849,
            'name' => 'Sylhet AGM Osmani Medical College.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1850,
            'name' => 'Kanaighat br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1851,
            'name' => 'Kamalbazar br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1852,
            'name' => 'Companigonj br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1853,
            'name' => 'Court Building br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1854,
            'name' => 'Khadimnagar Bazar br.',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1855,
            'name' => 'Golapgonj br.,Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1856,
            'name' => 'Goainghat br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1857,
            'name' => 'Charkhai br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1858,
            'name' => 'Zakigonj br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1859,
            'name' => 'Jaintapur br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1860,
            'name' => 'Dhaka Dakkhin br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1861,
            'name' => 'Tajpur br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1862,
            'name' => 'Dakkhin Fenchugonj br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1863,
            'name' => 'Pirer Bazar br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1864,
            'name' => 'Fenchugonj br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1865,
            'name' => 'Fenchugonj Fertilizer Factory br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1866,
            'name' => 'Balagonj br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1867,
            'name' => 'Beani Bazar br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1868,
            'name' => 'Bishwanath br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1869,
            'name' => 'Bairagir Bazar br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1870,
            'name' => 'Mahajan Patty br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1871,
            'name' => 'Shahjalal University of Science and Technology b',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1872,
            'name' => 'Station Road br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1873,
            'name' => 'Tikarpara br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1874,
            'name' => 'Tillagorh br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1875,
            'name' => 'Sylhet Cantonment br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1876,
            'name' => 'Sylhet City Corporation br. Sylhet',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1877,
            'name' => 'Chatak br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1878,
            'name' => 'Jagannathpur br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1879,
            'name' => 'Jamalganj br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1880,
            'name' => 'Tahirpur br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1881,
            'name' => 'Derai br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1882,
            'name' => 'Dowarabazar br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1883,
            'name' => 'Dharmapasha br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1884,
            'name' => 'Bishwambharpur br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1885,
            'name' => 'Madhyanagar br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1886,
            'name' => 'Shalla br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1887,
            'name' => 'Sunamganj br. Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1888,
            'name' => 'Dokkhin Sunamganj br, Sunamganj',
            'bank_id' => 2,
            'district_id' => 73,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1889,
            'name' => 'Kadamhata br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1890,
            'name' => 'Kamalgonj br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1891,
            'name' => 'Kamalpur Bazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1892,
            'name' => 'Bhairabgonj Bazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1893,
            'name' => 'Moulvibazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1894,
            'name' => 'Munshibazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1895,
            'name' => 'Kularura br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1896,
            'name' => 'Shahbazpur br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1897,
            'name' => 'Chandgram br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1898,
            'name' => 'Juri br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1899,
            'name' => 'Tarapasha Bazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1900,
            'name' => 'Phulertol Bazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1901,
            'name' => 'Barolekha br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1902,
            'name' => 'Foreign Exchange br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1903,
            'name' => 'Court Road br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1904,
            'name' => 'Rajnagar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1905,
            'name' => 'Shamsher Nagar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1906,
            'name' => 'Chandnighat br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1907,
            'name' => 'Sreemongal br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1908,
            'name' => 'Sadar Upazila br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1909,
            'name' => 'Sarkar Bazar br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1910,
            'name' => 'Satgaon br. Moulvibazar',
            'bank_id' => 2,
            'district_id' => 72,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1911,
            'name' => 'Azmirigonj br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1912,
            'name' => 'Inatgonj br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1913,
            'name' => 'Kakailchew br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1914,
            'name' => 'Chunarughat br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1915,
            'name' => 'Chowdhury Bazar br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1916,
            'name' => 'Nabigonj br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1917,
            'name' => 'Aushkandi br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1918,
            'name' => 'Baniachong br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1919,
            'name' => 'Bahubal br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1920,
            'name' => 'Madhabpur br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1921,
            'name' => 'Lakhai br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1922,
            'name' => 'Shaistagonj br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1923,
            'name' => 'Habiganj br. Habiganj',
            'bank_id' => 2,
            'district_id' => 71,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1924,
            'name' => 'Koyra br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1925,
            'name' => 'Kazdia br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1926,
            'name' => 'Custom House br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1927,
            'name' => 'KDA New Market br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1928,
            'name' => 'Cable Shilpa br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1929,
            'name' => 'Khslishpur br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1930,
            'name' => 'Khulna Shipyard br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1931,
            'name' => 'Chalna Bazar br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1932,
            'name' => 'Terokhada br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1933,
            'name' => 'Dumuria br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1934,
            'name' => 'Digholia br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1935,
            'name' => 'Daulatpur Corp br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1936,
            'name' => 'Daulatpur College Road br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1937,
            'name' => 'Phultala br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1938,
            'name' => 'Paikgacha br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1939,
            'name' => 'Fulbarigate br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1940,
            'name' => 'Boyra br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1941,
            'name' => 'Batiaghata br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1942,
            'name' => 'Baniakhali bazar br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1943,
            'name' => 'South Central Road br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1944,
            'name' => 'Shahpur br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1945,
            'name' => 'Sir Iqbal Road br.',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1946,
            'name' => 'Kachuabr',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1947,
            'name' => 'Court Building br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1948,
            'name' => 'Gilatala br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1949,
            'name' => 'Mollahat br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1950,
            'name' => 'Chitolmari',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1951,
            'name' => 'Fakirhat br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1952,
            'name' => 'Bagerhatbr',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1953,
            'name' => 'Mongla br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1954,
            'name' => 'Mongla Port br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1955,
            'name' => 'Gourambha Bazar br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1956,
            'name' => 'Morelgonj br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1957,
            'name' => 'Bazar Br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1958,
            'name' => 'Rampal br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1959,
            'name' => 'Rayenda Bazar br.',
            'bank_id' => 2,
            'district_id' => 4,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1960,
            'name' => 'Assasuni br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1961,
            'name' => 'Kalaroa Br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1962,
            'name' => 'Kamannagar br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1963,
            'name' => 'Satkhira br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1964,
            'name' => 'Kumira Bazar Br',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1965,
            'name' => 'Kulia Bazar br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1966,
            'name' => 'Khalishkhali br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1967,
            'name' => 'Goyra Bazar br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1968,
            'name' => 'Jhaudanga Br',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1969,
            'name' => 'Tala br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1970,
            'name' => 'Debhata br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1971,
            'name' => 'Parulia br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1972,
            'name' => 'Bhomra br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1973,
            'name' => 'Budhata br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1974,
            'name' => 'Magura Bazar br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1975,
            'name' => 'Shyamnagar br.',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1976,
            'name' => 'Kaligonj',
            'bank_id' => 2,
            'district_id' => 48,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1977,
            'name' => 'Kalia br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1978,
            'name' => 'Gobra br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1979,
            'name' => 'Chachuri Bazar br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1980,
            'name' => 'Narail br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1981,
            'name' => 'Peruli Bazar br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1982,
            'name' => 'Tularampur br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1983,
            'name' => 'Mahajan Bazar br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1984,
            'name' => 'ZillaParishad br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1985,
            'name' => 'Rupgonj br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1986,
            'name' => 'Lakshmipasha br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1987,
            'name' => 'Lohagora Bazar br.',
            'bank_id' => 2,
            'district_id' => 47,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1988,
            'name' => 'Alpha Mill Gate br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1989,
            'name' => 'R.N.Road br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1990,
            'name' => 'Ulshi br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1991,
            'name' => 'JessoreCollectorateBhaban br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1992,
            'name' => 'Keshobpur br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1993,
            'name' => 'Garib Shah Sarak br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1994,
            'name' => 'Charavita Bazar br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1995,
            'name' => 'Chinatola Bazar br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1996,
            'name' => 'Churamonkhati br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1997,
            'name' => 'Chowgacha br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1998,
            'name' => 'Jhikargacha Br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 1999,
            'name' => 'Trimohini br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2000,
            'name' => 'Dhalgram br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2001,
            'name' => 'NarikelBaria br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2002,
            'name' => 'Noapara Br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2003,
            'name' => 'Par Bazar br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2004,
            'name' => 'Purapara br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2005,
            'name' => 'Basundia br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2006,
            'name' => 'Bag Anchra Br',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2007,
            'name' => 'Bagherparabr',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2008,
            'name' => 'Barinagar br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2009,
            'name' => 'BISE br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2010,
            'name' => 'Benapole Br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2011,
            'name' => 'Vatpara br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2012,
            'name' => 'Monirampurbr',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2013,
            'name' => 'Jessore Bazar br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2014,
            'name' => 'JessoreCantt. Br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2015,
            'name' => 'Rajgonj br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2016,
            'name' => 'Rupdia br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2017,
            'name' => 'Railgate br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2018,
            'name' => 'Sharsa br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2019,
            'name' => 'Sagardi Bazar Br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2020,
            'name' => 'Salua Bazar br.',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2021,
            'name' => 'Khajura Bazar',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2022,
            'name' => 'Arappurbr',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2023,
            'name' => 'Kaligonj (Jhenaidah)',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2024,
            'name' => 'Kola Bazar',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2025,
            'name' => 'Kotchandpur Br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2026,
            'name' => 'Garagong br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2027,
            'name' => 'Jhenaidah Br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2028,
            'name' => 'Barodopadi Bazar br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2029,
            'name' => 'Baro Bazar br',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2030,
            'name' => 'Modhupur br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2031,
            'name' => 'Mohespur br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2032,
            'name' => 'Mobarakgonj Sugar Mill Br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2033,
            'name' => 'RabinarikelBaria',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2034,
            'name' => 'Sheikh Para Bazar',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2035,
            'name' => 'Sailkupa Br',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2036,
            'name' => 'Harinakunda br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2037,
            'name' => 'Hatgopalpur br.',
            'bank_id' => 2,
            'district_id' => 42,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2038,
            'name' => 'Magura br.',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2039,
            'name' => 'Puratan Bazar br.',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2040,
            'name' => 'Notun Bazar br.',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2041,
            'name' => 'Sreepurbr',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2042,
            'name' => 'Mohammadpur br.',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2043,
            'name' => 'Shalikha br.',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2044,
            'name' => 'Bunagati Bazar br.',
            'bank_id' => 2,
            'district_id' => 45,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2238,
            'name' => 'Dhaka Local Office',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2239,
            'name' => 'Dilkusha Corporate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2240,
            'name' => 'Shilpo Vobon Corporate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2241,
            'name' => 'Sadarghat Corporate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2242,
            'name' => 'Kalurghat Shi/A Shakha, Chattogram',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2243,
            'name' => 'Sadarghat Corporate Br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2244,
            'name' => 'Agrabad Br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2245,
            'name' => 'CUSTOM HOUSE Chittagong',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2246,
            'name' => 'KHATUNGANJ Branch',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2247,
            'name' => 'Asadgong br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2248,
            'name' => 'Bahaddarhat br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2249,
            'name' => 'Banur Bazar',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2250,
            'name' => 'Bhatiary',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2251,
            'name' => 'BIDC Steel Plant',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2252,
            'name' => 'CDA R/A',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2253,
            'name' => 'Chakbazar br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2254,
            'name' => 'Chaktai br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2255,
            'name' => 'Chittagong Cantt. br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2256,
            'name' => 'Chittagong Medical College br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2257,
            'name' => 'Court Hill br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2258,
            'name' => 'Fatikchari br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2259,
            'name' => 'Hathazari br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2260,
            'name' => 'Kagatiahat br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2261,
            'name' => 'Kalibari',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2262,
            'name' => 'Kalumunshir hat br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2263,
            'name' => 'Kalurghat Ind. Estt. br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2264,
            'name' => 'Korbanigonj br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2265,
            'name' => 'Laldighi Corp. br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2266,
            'name' => 'Mariam Nagar',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2267,
            'name' => 'Marine Academy',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2268,
            'name' => 'Mithagoli',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2269,
            'name' => 'Mohd. Takirhat br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2270,
            'name' => 'N.A.Chowdhury Road br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2271,
            'name' => 'Nazirhat br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2272,
            'name' => 'New Market',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2273,
            'name' => 'Nizampur',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2274,
            'name' => 'Pahartoli Main Road',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2275,
            'name' => 'Panchlish br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2276,
            'name' => 'Port',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2277,
            'name' => 'Rawzan br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2278,
            'name' => 'Sarkerhat br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2279,
            'name' => 'Sirajuddowla Sarak',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2280,
            'name' => 'Terribazar br.',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2281,
            'name' => 'Wage Earners',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2282,
            'name' => 'Korbanigonj',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2283,
            'name' => 'Ramna Corporate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2284,
            'name' => 'Jessore Corporate Branch',
            'bank_id' => 2,
            'district_id' => 9,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2285,
            'name' => 'B.B Avenue Corporate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2286,
            'name' => 'Mirpur Section-12 Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2287,
            'name' => 'Khulna Corporate Branch',
            'bank_id' => 2,
            'district_id' => 43,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2288,
            'name' => 'Dhaka Cantonment Corporate Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2289,
            'name' => 'Narayanganj Corporation',
            'bank_id' => 2,
            'district_id' => 2,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2290,
            'name' => 'Comilla Corporate Branch',
            'bank_id' => 2,
            'district_id' => 26,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2291,
            'name' => 'shibchar',
            'bank_id' => 2,
            'district_id' => 32,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2292,
            'name' => 'Meherpur',
            'bank_id' => 2,
            'district_id' => 46,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2293,
            'name' => 'Barisal Corporate Branch',
            'bank_id' => 2,
            'district_id' => 12,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2294,
            'name' => 'Dinajpur Corporate Branch',
            'bank_id' => 2,
            'district_id' => 63,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2295,
            'name' => 'Dhanmondi Corp Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2296,
            'name' => 'ADITHMARI (LALMONIRHAT)',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2297,
            'name' => 'BARABARIHAT (LALMONIRHAT)',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2298,
            'name' => 'HATIBANDHA (LALMONIRHAT)',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2299,
            'name' => 'KAKINA BAZAR',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2300,
            'name' => 'KALIGANJ (LALMONIRHAT)',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2301,
            'name' => 'LALMONIRHAT',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2302,
            'name' => 'MOHISH KHOCHA (LALMONIRHAT)',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2303,
            'name' => 'PATGRAM (LALMONIRHAT)',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2304,
            'name' => 'RAJIBPUR',
            'bank_id' => 2,
            'district_id' => 65,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2305,
            'name' => 'Burimari, Lalmonirhat',
            'bank_id' => 2,
            'district_id' => 66,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2306,
            'name' => 'Rangpur Corp.Br',
            'bank_id' => 2,
            'district_id' => 69,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2307,
            'name' => 'Angaria Bazar br.',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2309,
            'name' => 'Bhedargonj br.',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2311,
            'name' => 'Damuddya br.',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2313,
            'name' => 'Goshairhat br.',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2315,
            'name' => 'Jajira br.',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2317,
            'name' => 'Naria br',
            'bank_id' => 2,
            'district_id' => 38,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2319,
            'name' => 'Court Building Br.',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2321,
            'name' => 'Kushtia br.',
            'bank_id' => 2,
            'district_id' => 44,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2323,
            'name' => 'Dargah Gate',
            'bank_id' => 2,
            'district_id' => 7,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2325,
            'name' => 'B.Wapda Corp br.',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2327,
            'name' => 'Foreign exchange corporate branch, dhaka',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2329,
            'name' => 'Rajshahi Corporate Branch',
            'bank_id' => 2,
            'district_id' => 61,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2331,
            'name' => 'Pallabi Branch',
            'bank_id' => 2,
            'district_id' => 1,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2333,
            'name' => 'Panchagarh Sador',
            'bank_id' => 2,
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2335,
            'name' => 'Tetulia',
            'bank_id' => 2,
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2337,
            'name' => 'Debiganj',
            'bank_id' => 2,
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2339,
            'name' => 'Banglabandha ',
            'bank_id' => 2,
            'district_id' => 68,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2341,
            'name' => 'North Potenga Branch',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2343,
            'name' => 'Manikganj',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2345,
            'name' => 'Balirtek Bazar',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2347,
            'name' => 'Chandahar',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2349,
            'name' => 'Dargram',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2351,
            'name' => 'Daulatpur',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2353,
            'name' => 'Ghior',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2355,
            'name' => 'Harirampur',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2357,
            'name' => 'Saturia',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2359,
            'name' => 'Shivalaya',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2361,
            'name' => 'Singair',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2363,
            'name' => 'Upazilla Complex',
            'bank_id' => 2,
            'district_id' => 33,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('bank_branches')->insert([
            'id' => 2367,
            'name' => 'Jamalkhan Road',
            'bank_id' => 2,
            'district_id' => 6,
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
