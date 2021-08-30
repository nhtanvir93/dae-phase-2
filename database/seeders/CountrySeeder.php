<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'id' => 1,
            'name' => 'Afghanistan',
            'two_char_code' => 'AF',
            'three_char_code' => 'AFG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 2,
            'name' => 'Aland Islands',
            'two_char_code' => 'AX',
            'three_char_code' => 'ALA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 3,
            'name' => 'Albania',
            'two_char_code' => 'AL',
            'three_char_code' => 'ALB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 4,
            'name' => 'Algeria',
            'two_char_code' => 'DZ',
            'three_char_code' => 'DZA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 5,
            'name' => 'American Samoa',
            'two_char_code' => 'AS',
            'three_char_code' => 'ASM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 6,
            'name' => 'Andorra',
            'two_char_code' => 'AD',
            'three_char_code' => 'AND',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 7,
            'name' => 'Angola',
            'two_char_code' => 'AO',
            'three_char_code' => 'AGO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 8,
            'name' => 'Anguilla',
            'two_char_code' => 'AI',
            'three_char_code' => 'AIA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 9,
            'name' => 'Antarctica',
            'two_char_code' => 'AQ',
            'three_char_code' => 'ATA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 10,
            'name' => 'Antigua and Barbuda',
            'two_char_code' => 'AG',
            'three_char_code' => 'ATG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 11,
            'name' => 'Argentina',
            'two_char_code' => 'AR',
            'three_char_code' => 'ARG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 12,
            'name' => 'Armenia',
            'two_char_code' => 'AM',
            'three_char_code' => 'ARM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 13,
            'name' => 'Aruba',
            'two_char_code' => 'AW',
            'three_char_code' => 'ABW',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 14,
            'name' => 'Australia',
            'two_char_code' => 'AU',
            'three_char_code' => 'AUS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 15,
            'name' => 'Austria',
            'two_char_code' => 'AT',
            'three_char_code' => 'AUT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 16,
            'name' => 'Azerbaijan',
            'two_char_code' => 'AZ',
            'three_char_code' => 'AZE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 17,
            'name' => 'Bahamas',
            'two_char_code' => 'BS',
            'three_char_code' => 'BHS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 18,
            'name' => 'Bahrain',
            'two_char_code' => 'BH',
            'three_char_code' => 'BHR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 19,
            'name' => 'Bangladesh',
            'two_char_code' => 'BD',
            'three_char_code' => 'BGD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 20,
            'name' => 'Barbados',
            'two_char_code' => 'BB',
            'three_char_code' => 'BRB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 21,
            'name' => 'Belarus',
            'two_char_code' => 'BY',
            'three_char_code' => 'BLR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 22,
            'name' => 'Belgium',
            'two_char_code' => 'BE',
            'three_char_code' => 'BEL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 23,
            'name' => 'Belize',
            'two_char_code' => 'BZ',
            'three_char_code' => 'BLZ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 24,
            'name' => 'Benin',
            'two_char_code' => 'BJ',
            'three_char_code' => 'BEN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 25,
            'name' => 'Bermuda',
            'two_char_code' => 'BM',
            'three_char_code' => 'BMU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 26,
            'name' => 'Bhutan',
            'two_char_code' => 'BT',
            'three_char_code' => 'BTN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 27,
            'name' => 'Bolivia',
            'two_char_code' => 'BO',
            'three_char_code' => 'BOL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 28,
            'name' => 'Bonaire, Sint Eustatius and Saba',
            'two_char_code' => 'BQ',
            'three_char_code' => 'BES',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 29,
            'name' => 'Bosnia and Herzegovina',
            'two_char_code' => 'BA',
            'three_char_code' => 'BIH',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 30,
            'name' => 'Botswana',
            'two_char_code' => 'BW',
            'three_char_code' => 'BWA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 31,
            'name' => 'Bouvet Island',
            'two_char_code' => 'BV',
            'three_char_code' => 'BVT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 32,
            'name' => 'Brazil',
            'two_char_code' => 'BR',
            'three_char_code' => 'BRA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 33,
            'name' => 'British Indian Ocean Territory',
            'two_char_code' => 'IO',
            'three_char_code' => 'IOT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 34,
            'name' => 'Brunei',
            'two_char_code' => 'BN',
            'three_char_code' => 'BRN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 35,
            'name' => 'Bulgaria',
            'two_char_code' => 'BG',
            'three_char_code' => 'BGR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 36,
            'name' => 'Burkina Faso',
            'two_char_code' => 'BF',
            'three_char_code' => 'BFA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 37,
            'name' => 'Burundi',
            'two_char_code' => 'BI',
            'three_char_code' => 'BDI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 38,
            'name' => 'Cambodia',
            'two_char_code' => 'KH',
            'three_char_code' => 'KHM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 39,
            'name' => 'Cameroon',
            'two_char_code' => 'CM',
            'three_char_code' => 'CMR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 40,
            'name' => 'Canada',
            'two_char_code' => 'CA',
            'three_char_code' => 'CAN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 41,
            'name' => 'Cape Verde',
            'two_char_code' => 'CV',
            'three_char_code' => 'CPV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 42,
            'name' => 'Cayman Islands',
            'two_char_code' => 'KY',
            'three_char_code' => 'CYM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 43,
            'name' => 'Central African Republic',
            'two_char_code' => 'CF',
            'three_char_code' => 'CAF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 44,
            'name' => 'Chad',
            'two_char_code' => 'TD',
            'three_char_code' => 'TCD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 45,
            'name' => 'Chile',
            'two_char_code' => 'CL',
            'three_char_code' => 'CHL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 46,
            'name' => 'China',
            'two_char_code' => 'CN',
            'three_char_code' => 'CHN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 47,
            'name' => 'Christmas Island',
            'two_char_code' => 'CX',
            'three_char_code' => 'CXR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 48,
            'name' => 'Cocos (Keeling) Islands',
            'two_char_code' => 'CC',
            'three_char_code' => 'CCK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 49,
            'name' => 'Colombia',
            'two_char_code' => 'CO',
            'three_char_code' => 'COL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 50,
            'name' => 'Comoros',
            'two_char_code' => 'KM',
            'three_char_code' => 'COM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 51,
            'name' => 'Congo',
            'two_char_code' => 'CG',
            'three_char_code' => 'COG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 52,
            'name' => 'Cook Islands',
            'two_char_code' => 'CK',
            'three_char_code' => 'COK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 53,
            'name' => 'Costa Rica',
            'two_char_code' => 'CR',
            'three_char_code' => 'CRI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 54,
            'name' => 'Ivory Coast',
            'two_char_code' => 'CI',
            'three_char_code' => 'CIV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 55,
            'name' => 'Croatia',
            'two_char_code' => 'HR',
            'three_char_code' => 'HRV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 56,
            'name' => 'Cuba',
            'two_char_code' => 'CU',
            'three_char_code' => 'CUB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 57,
            'name' => 'Curacao',
            'two_char_code' => 'CW',
            'three_char_code' => 'CUW',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 58,
            'name' => 'Cyprus',
            'two_char_code' => 'CY',
            'three_char_code' => 'CYP',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 59,
            'name' => 'Czech Republic',
            'two_char_code' => 'CZ',
            'three_char_code' => 'CZE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 60,
            'name' => 'Democratic Republic of the Congo',
            'two_char_code' => 'CD',
            'three_char_code' => 'COD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 61,
            'name' => 'Denmark',
            'two_char_code' => 'DK',
            'three_char_code' => 'DNK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 62,
            'name' => 'Djibouti',
            'two_char_code' => 'DJ',
            'three_char_code' => 'DJI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 63,
            'name' => 'Dominica',
            'two_char_code' => 'DM',
            'three_char_code' => 'DMA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 64,
            'name' => 'Dominican Republic',
            'two_char_code' => 'DO',
            'three_char_code' => 'DOM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 65,
            'name' => 'Ecuador',
            'two_char_code' => 'EC',
            'three_char_code' => 'ECU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 66,
            'name' => 'Egypt',
            'two_char_code' => 'EG',
            'three_char_code' => 'EGY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 67,
            'name' => 'El Salvador',
            'two_char_code' => 'SV',
            'three_char_code' => 'SLV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 68,
            'name' => 'Equatorial Guinea',
            'two_char_code' => 'GQ',
            'three_char_code' => 'GNQ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 69,
            'name' => 'Eritrea',
            'two_char_code' => 'ER',
            'three_char_code' => 'ERI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 70,
            'name' => 'Estonia',
            'two_char_code' => 'EE',
            'three_char_code' => 'EST',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 71,
            'name' => 'Ethiopia',
            'two_char_code' => 'ET',
            'three_char_code' => 'ETH',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 72,
            'name' => 'Falkland Islands (Malvinas)',
            'two_char_code' => 'FK',
            'three_char_code' => 'FLK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 73,
            'name' => 'Faroe Islands',
            'two_char_code' => 'FO',
            'three_char_code' => 'FRO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 74,
            'name' => 'Fiji',
            'two_char_code' => 'FJ',
            'three_char_code' => 'FJI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 75,
            'name' => 'Finland',
            'two_char_code' => 'FI',
            'three_char_code' => 'FIN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 76,
            'name' => 'France',
            'two_char_code' => 'FR',
            'three_char_code' => 'FRA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 77,
            'name' => 'French Guiana',
            'two_char_code' => 'GF',
            'three_char_code' => 'GUF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 78,
            'name' => 'French Polynesia',
            'two_char_code' => 'PF',
            'three_char_code' => 'PYF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 79,
            'name' => 'French Southern Territories',
            'two_char_code' => 'TF',
            'three_char_code' => 'ATF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 80,
            'name' => 'Gabon',
            'two_char_code' => 'GA',
            'three_char_code' => 'GAB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 81,
            'name' => 'Gambia',
            'two_char_code' => 'GM',
            'three_char_code' => 'GMB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 82,
            'name' => 'Georgia',
            'two_char_code' => 'GE',
            'three_char_code' => 'GEO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 83,
            'name' => 'Germany',
            'two_char_code' => 'DE',
            'three_char_code' => 'DEU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 84,
            'name' => 'Ghana',
            'two_char_code' => 'GH',
            'three_char_code' => 'GHA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 85,
            'name' => 'Gibraltar',
            'two_char_code' => 'GI',
            'three_char_code' => 'GIB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 86,
            'name' => 'Greece',
            'two_char_code' => 'GR',
            'three_char_code' => 'GRC',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 87,
            'name' => 'Greenland',
            'two_char_code' => 'GL',
            'three_char_code' => 'GRL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 88,
            'name' => 'Grenada',
            'two_char_code' => 'GD',
            'three_char_code' => 'GRD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 89,
            'name' => 'Guadaloupe',
            'two_char_code' => 'GP',
            'three_char_code' => 'GLP',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 90,
            'name' => 'Guam',
            'two_char_code' => 'GU',
            'three_char_code' => 'GUM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 91,
            'name' => 'Guatemala',
            'two_char_code' => 'GT',
            'three_char_code' => 'GTM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 92,
            'name' => 'Guernsey',
            'two_char_code' => 'GG',
            'three_char_code' => 'GGY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 93,
            'name' => 'Guinea',
            'two_char_code' => 'GN',
            'three_char_code' => 'GIN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 94,
            'name' => 'Guinea-Bissau',
            'two_char_code' => 'GW',
            'three_char_code' => 'GNB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 95,
            'name' => 'Guyana',
            'two_char_code' => 'GY',
            'three_char_code' => 'GUY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 96,
            'name' => 'Haiti',
            'two_char_code' => 'HT',
            'three_char_code' => 'HTI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 97,
            'name' => 'Heard Island and McDonald Islands',
            'two_char_code' => 'HM',
            'three_char_code' => 'HMD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 98,
            'name' => 'Honduras',
            'two_char_code' => 'HN',
            'three_char_code' => 'HND',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 99,
            'name' => 'Hong Kong',
            'two_char_code' => 'HK',
            'three_char_code' => 'HKG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 100,
            'name' => 'Hungary',
            'two_char_code' => 'HU',
            'three_char_code' => 'HUN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 101,
            'name' => 'Iceland',
            'two_char_code' => 'IS',
            'three_char_code' => 'ISL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 102,
            'name' => 'India',
            'two_char_code' => 'IN',
            'three_char_code' => 'IND',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 103,
            'name' => 'Indonesia',
            'two_char_code' => 'ID',
            'three_char_code' => 'IDN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 104,
            'name' => 'Iran',
            'two_char_code' => 'IR',
            'three_char_code' => 'IRN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 105,
            'name' => 'Iraq',
            'two_char_code' => 'IQ',
            'three_char_code' => 'IRQ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 106,
            'name' => 'Ireland',
            'two_char_code' => 'IE',
            'three_char_code' => 'IRL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 107,
            'name' => 'Isle of Man',
            'two_char_code' => 'IM',
            'three_char_code' => 'IMN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 108,
            'name' => 'Israel',
            'two_char_code' => 'IL',
            'three_char_code' => 'ISR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 109,
            'name' => 'Italy',
            'two_char_code' => 'IT',
            'three_char_code' => 'ITA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 110,
            'name' => 'Jamaica',
            'two_char_code' => 'JM',
            'three_char_code' => 'JAM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 111,
            'name' => 'Japan',
            'two_char_code' => 'JP',
            'three_char_code' => 'JPN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 112,
            'name' => 'Jersey',
            'two_char_code' => 'JE',
            'three_char_code' => 'JEY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 113,
            'name' => 'Jordan',
            'two_char_code' => 'JO',
            'three_char_code' => 'JOR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 114,
            'name' => 'Kazakhstan',
            'two_char_code' => 'KZ',
            'three_char_code' => 'KAZ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 115,
            'name' => 'Kenya',
            'two_char_code' => 'KE',
            'three_char_code' => 'KEN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 116,
            'name' => 'Kiribati',
            'two_char_code' => 'KI',
            'three_char_code' => 'KIR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 117,
            'name' => 'Kosovo',
            'two_char_code' => 'XK',
            'three_char_code' => '---',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 118,
            'name' => 'Kuwait',
            'two_char_code' => 'KW',
            'three_char_code' => 'KWT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 119,
            'name' => 'Kyrgyzstan',
            'two_char_code' => 'KG',
            'three_char_code' => 'KGZ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 120,
            'name' => 'Laos',
            'two_char_code' => 'LA',
            'three_char_code' => 'LAO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 121,
            'name' => 'Latvia',
            'two_char_code' => 'LV',
            'three_char_code' => 'LVA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 122,
            'name' => 'Lebanon',
            'two_char_code' => 'LB',
            'three_char_code' => 'LBN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 123,
            'name' => 'Lesotho',
            'two_char_code' => 'LS',
            'three_char_code' => 'LSO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 124,
            'name' => 'Liberia',
            'two_char_code' => 'LR',
            'three_char_code' => 'LBR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 125,
            'name' => 'Libya',
            'two_char_code' => 'LY',
            'three_char_code' => 'LBY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 126,
            'name' => 'Liechtenstein',
            'two_char_code' => 'LI',
            'three_char_code' => 'LIE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 127,
            'name' => 'Lithuania',
            'two_char_code' => 'LT',
            'three_char_code' => 'LTU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 128,
            'name' => 'Luxembourg',
            'two_char_code' => 'LU',
            'three_char_code' => 'LUX',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 129,
            'name' => 'Macao',
            'two_char_code' => 'MO',
            'three_char_code' => 'MAC',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 130,
            'name' => 'Macedonia',
            'two_char_code' => 'MK',
            'three_char_code' => 'MKD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 131,
            'name' => 'Madagascar',
            'two_char_code' => 'MG',
            'three_char_code' => 'MDG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 132,
            'name' => 'Malawi',
            'two_char_code' => 'MW',
            'three_char_code' => 'MWI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 133,
            'name' => 'Malaysia',
            'two_char_code' => 'MY',
            'three_char_code' => 'MYS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 134,
            'name' => 'Maldives',
            'two_char_code' => 'MV',
            'three_char_code' => 'MDV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 135,
            'name' => 'Mali',
            'two_char_code' => 'ML',
            'three_char_code' => 'MLI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 136,
            'name' => 'Malta',
            'two_char_code' => 'MT',
            'three_char_code' => 'MLT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 137,
            'name' => 'Marshall Islands',
            'two_char_code' => 'MH',
            'three_char_code' => 'MHL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 138,
            'name' => 'Martinique',
            'two_char_code' => 'MQ',
            'three_char_code' => 'MTQ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 139,
            'name' => 'Mauritania',
            'two_char_code' => 'MR',
            'three_char_code' => 'MRT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 140,
            'name' => 'Mauritius',
            'two_char_code' => 'MU',
            'three_char_code' => 'MUS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 141,
            'name' => 'Mayotte',
            'two_char_code' => 'YT',
            'three_char_code' => 'MYT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 142,
            'name' => 'Mexico',
            'two_char_code' => 'MX',
            'three_char_code' => 'MEX',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 143,
            'name' => 'Micronesia',
            'two_char_code' => 'FM',
            'three_char_code' => 'FSM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 144,
            'name' => 'Moldava',
            'two_char_code' => 'MD',
            'three_char_code' => 'MDA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 145,
            'name' => 'Monaco',
            'two_char_code' => 'MC',
            'three_char_code' => 'MCO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 146,
            'name' => 'Mongolia',
            'two_char_code' => 'MN',
            'three_char_code' => 'MNG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 147,
            'name' => 'Montenegro',
            'two_char_code' => 'ME',
            'three_char_code' => 'MNE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 148,
            'name' => 'Montserrat',
            'two_char_code' => 'MS',
            'three_char_code' => 'MSR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 149,
            'name' => 'Morocco',
            'two_char_code' => 'MA',
            'three_char_code' => 'MAR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 150,
            'name' => 'Mozambique',
            'two_char_code' => 'MZ',
            'three_char_code' => 'MOZ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 151,
            'name' => 'Myanmar (Burma)',
            'two_char_code' => 'MM',
            'three_char_code' => 'MMR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 152,
            'name' => 'Namibia',
            'two_char_code' => 'NA',
            'three_char_code' => 'NAM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 153,
            'name' => 'Nauru',
            'two_char_code' => 'NR',
            'three_char_code' => 'NRU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 154,
            'name' => 'Nepal',
            'two_char_code' => 'NP',
            'three_char_code' => 'NPL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 155,
            'name' => 'Netherlands',
            'two_char_code' => 'NL',
            'three_char_code' => 'NLD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 156,
            'name' => 'New Caledonia',
            'two_char_code' => 'NC',
            'three_char_code' => 'NCL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 157,
            'name' => 'New Zealand',
            'two_char_code' => 'NZ',
            'three_char_code' => 'NZL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 158,
            'name' => 'Nicaragua',
            'two_char_code' => 'NI',
            'three_char_code' => 'NIC',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 159,
            'name' => 'Niger',
            'two_char_code' => 'NE',
            'three_char_code' => 'NER',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 160,
            'name' => 'Nigeria',
            'two_char_code' => 'NG',
            'three_char_code' => 'NGA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 161,
            'name' => 'Niue',
            'two_char_code' => 'NU',
            'three_char_code' => 'NIU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 162,
            'name' => 'Norfolk Island',
            'two_char_code' => 'NF',
            'three_char_code' => 'NFK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 163,
            'name' => 'North Korea',
            'two_char_code' => 'KP',
            'three_char_code' => 'PRK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 164,
            'name' => 'Northern Mariana Islands',
            'two_char_code' => 'MP',
            'three_char_code' => 'MNP',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 165,
            'name' => 'Norway',
            'two_char_code' => 'NO',
            'three_char_code' => 'NOR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 166,
            'name' => 'Oman',
            'two_char_code' => 'OM',
            'three_char_code' => 'OMN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 167,
            'name' => 'Pakistan',
            'two_char_code' => 'PK',
            'three_char_code' => 'PAK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 168,
            'name' => 'Palau',
            'two_char_code' => 'PW',
            'three_char_code' => 'PLW',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 169,
            'name' => 'Palestine',
            'two_char_code' => 'PS',
            'three_char_code' => 'PSE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 170,
            'name' => 'Panama',
            'two_char_code' => 'PA',
            'three_char_code' => 'PAN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 171,
            'name' => 'Papua New Guinea',
            'two_char_code' => 'PG',
            'three_char_code' => 'PNG',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 172,
            'name' => 'Paraguay',
            'two_char_code' => 'PY',
            'three_char_code' => 'PRY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 173,
            'name' => 'Peru',
            'two_char_code' => 'PE',
            'three_char_code' => 'PER',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 174,
            'name' => 'Phillipines',
            'two_char_code' => 'PH',
            'three_char_code' => 'PHL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 175,
            'name' => 'Pitcairn',
            'two_char_code' => 'PN',
            'three_char_code' => 'PCN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 176,
            'name' => 'Poland',
            'two_char_code' => 'PL',
            'three_char_code' => 'POL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 177,
            'name' => 'Portugal',
            'two_char_code' => 'PT',
            'three_char_code' => 'PRT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 178,
            'name' => 'Puerto Rico',
            'two_char_code' => 'PR',
            'three_char_code' => 'PRI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 179,
            'name' => 'Qatar',
            'two_char_code' => 'QA',
            'three_char_code' => 'QAT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 180,
            'name' => 'Reunion',
            'two_char_code' => 'RE',
            'three_char_code' => 'REU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 181,
            'name' => 'Romania',
            'two_char_code' => 'RO',
            'three_char_code' => 'ROU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 182,
            'name' => 'Russia',
            'two_char_code' => 'RU',
            'three_char_code' => 'RUS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 183,
            'name' => 'Rwanda',
            'two_char_code' => 'RW',
            'three_char_code' => 'RWA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 184,
            'name' => 'Saint Barthelemy',
            'two_char_code' => 'BL',
            'three_char_code' => 'BLM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 185,
            'name' => 'Saint Helena',
            'two_char_code' => 'SH',
            'three_char_code' => 'SHN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 186,
            'name' => 'Saint Kitts and Nevis',
            'two_char_code' => 'KN',
            'three_char_code' => 'KNA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 187,
            'name' => 'Saint Lucia',
            'two_char_code' => 'LC',
            'three_char_code' => 'LCA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 188,
            'name' => 'Saint Martin',
            'two_char_code' => 'MF',
            'three_char_code' => 'MAF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 189,
            'name' => 'Saint Pierre and Miquelon',
            'two_char_code' => 'PM',
            'three_char_code' => 'SPM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 190,
            'name' => 'Saint Vincent and the Grenadines',
            'two_char_code' => 'VC',
            'three_char_code' => 'VCT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 191,
            'name' => 'Samoa',
            'two_char_code' => 'WS',
            'three_char_code' => 'WSM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 192,
            'name' => 'San Marino',
            'two_char_code' => 'SM',
            'three_char_code' => 'SMR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 193,
            'name' => 'Sao Tome and Principe',
            'two_char_code' => 'ST',
            'three_char_code' => 'STP',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 194,
            'name' => 'Saudi Arabia',
            'two_char_code' => 'SA',
            'three_char_code' => 'SAU',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 195,
            'name' => 'Senegal',
            'two_char_code' => 'SN',
            'three_char_code' => 'SEN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 196,
            'name' => 'Serbia',
            'two_char_code' => 'RS',
            'three_char_code' => 'SRB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 197,
            'name' => 'Seychelles',
            'two_char_code' => 'SC',
            'three_char_code' => 'SYC',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 198,
            'name' => 'Sierra Leone',
            'two_char_code' => 'SL',
            'three_char_code' => 'SLE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 199,
            'name' => 'Singapore',
            'two_char_code' => 'SG',
            'three_char_code' => 'SGP',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 200,
            'name' => 'Sint Maarten',
            'two_char_code' => 'SX',
            'three_char_code' => 'SXM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 201,
            'name' => 'Slovakia',
            'two_char_code' => 'SK',
            'three_char_code' => 'SVK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 202,
            'name' => 'Slovenia',
            'two_char_code' => 'SI',
            'three_char_code' => 'SVN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 203,
            'name' => 'Solomon Islands',
            'two_char_code' => 'SB',
            'three_char_code' => 'SLB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 204,
            'name' => 'Somalia',
            'two_char_code' => 'SO',
            'three_char_code' => 'SOM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 205,
            'name' => 'South Africa',
            'two_char_code' => 'ZA',
            'three_char_code' => 'ZAF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 206,
            'name' => 'South Georgia and the South Sandwich Islands',
            'two_char_code' => 'GS',
            'three_char_code' => 'SGS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 207,
            'name' => 'South Korea',
            'two_char_code' => 'KR',
            'three_char_code' => 'KOR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 208,
            'name' => 'South Sudan',
            'two_char_code' => 'SS',
            'three_char_code' => 'SSD',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 209,
            'name' => 'Spain',
            'two_char_code' => 'ES',
            'three_char_code' => 'ESP',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 210,
            'name' => 'Sri Lanka',
            'two_char_code' => 'LK',
            'three_char_code' => 'LKA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 211,
            'name' => 'Sudan',
            'two_char_code' => 'SD',
            'three_char_code' => 'SDN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 212,
            'name' => 'Suriname',
            'two_char_code' => 'SR',
            'three_char_code' => 'SUR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 213,
            'name' => 'Svalbard and Jan Mayen',
            'two_char_code' => 'SJ',
            'three_char_code' => 'SJM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 214,
            'name' => 'Swaziland',
            'two_char_code' => 'SZ',
            'three_char_code' => 'SWZ',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 215,
            'name' => 'Sweden',
            'two_char_code' => 'SE',
            'three_char_code' => 'SWE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 216,
            'name' => 'Switzerland',
            'two_char_code' => 'CH',
            'three_char_code' => 'CHE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 217,
            'name' => 'Syria',
            'two_char_code' => 'SY',
            'three_char_code' => 'SYR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 218,
            'name' => 'Taiwan',
            'two_char_code' => 'TW',
            'three_char_code' => 'TWN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 219,
            'name' => 'Tajikistan',
            'two_char_code' => 'TJ',
            'three_char_code' => 'TJK',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 220,
            'name' => 'Tanzania',
            'two_char_code' => 'TZ',
            'three_char_code' => 'TZA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 221,
            'name' => 'Thailand',
            'two_char_code' => 'TH',
            'three_char_code' => 'THA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 222,
            'name' => 'Timor-Leste (East Timor)',
            'two_char_code' => 'TL',
            'three_char_code' => 'TLS',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 223,
            'name' => 'Togo',
            'two_char_code' => 'TG',
            'three_char_code' => 'TGO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 224,
            'name' => 'Tokelau',
            'two_char_code' => 'TK',
            'three_char_code' => 'TKL',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 225,
            'name' => 'Tonga',
            'two_char_code' => 'TO',
            'three_char_code' => 'TON',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 226,
            'name' => 'Trinidad and Tobago',
            'two_char_code' => 'TT',
            'three_char_code' => 'TTO',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 227,
            'name' => 'Tunisia',
            'two_char_code' => 'TN',
            'three_char_code' => 'TUN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 228,
            'name' => 'Turkey',
            'two_char_code' => 'TR',
            'three_char_code' => 'TUR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 229,
            'name' => 'Turkmenistan',
            'two_char_code' => 'TM',
            'three_char_code' => 'TKM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 230,
            'name' => 'Turks and Caicos Islands',
            'two_char_code' => 'TC',
            'three_char_code' => 'TCA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 231,
            'name' => 'Tuvalu',
            'two_char_code' => 'TV',
            'three_char_code' => 'TUV',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 232,
            'name' => 'Uganda',
            'two_char_code' => 'UG',
            'three_char_code' => 'UGA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 233,
            'name' => 'Ukraine',
            'two_char_code' => 'UA',
            'three_char_code' => 'UKR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 234,
            'name' => 'United Arab Emirates',
            'two_char_code' => 'AE',
            'three_char_code' => 'ARE',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 235,
            'name' => 'United Kingdom',
            'two_char_code' => 'GB',
            'three_char_code' => 'GBR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 236,
            'name' => 'United States',
            'two_char_code' => 'US',
            'three_char_code' => 'USA',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 237,
            'name' => 'United States Minor Outlying Islands',
            'two_char_code' => 'UM',
            'three_char_code' => 'UMI',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 238,
            'name' => 'Uruguay',
            'two_char_code' => 'UY',
            'three_char_code' => 'URY',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 239,
            'name' => 'Uzbekistan',
            'two_char_code' => 'UZ',
            'three_char_code' => 'UZB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 240,
            'name' => 'Vanuatu',
            'two_char_code' => 'VU',
            'three_char_code' => 'VUT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 241,
            'name' => 'Vatican City',
            'two_char_code' => 'VA',
            'three_char_code' => 'VAT',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 242,
            'name' => 'Venezuela',
            'two_char_code' => 'VE',
            'three_char_code' => 'VEN',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 243,
            'name' => 'Vietnam',
            'two_char_code' => 'VN',
            'three_char_code' => 'VNM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 244,
            'name' => 'Virgin Islands, British',
            'two_char_code' => 'VG',
            'three_char_code' => 'VGB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 245,
            'name' => 'Virgin Islands, US',
            'two_char_code' => 'VI',
            'three_char_code' => 'VIR',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 246,
            'name' => 'Wallis and Futuna',
            'two_char_code' => 'WF',
            'three_char_code' => 'WLF',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 247,
            'name' => 'Western Sahara',
            'two_char_code' => 'EH',
            'three_char_code' => 'ESH',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 248,
            'name' => 'Yemen',
            'two_char_code' => 'YE',
            'three_char_code' => 'YEM',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 249,
            'name' => 'Zambia',
            'two_char_code' => 'ZM',
            'three_char_code' => 'ZMB',
            'created_by' => 1,
            'created_at' => now()
        ]);

        DB::table('countries')->insert([
            'id' => 250,
            'name' => 'Zimbabwe',
            'two_char_code' => 'ZW',
            'three_char_code' => 'ZWE',
            'created_by' => 1,
            'created_at' => now()
        ]);
    }
}
