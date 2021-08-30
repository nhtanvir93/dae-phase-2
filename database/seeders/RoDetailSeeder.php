<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58511,
            'ip_application_id' => 58497,
            'created_by' => 8627,
            'created_at' => '2020-07-27 20:23:12'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58511,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " jghgg ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " uyuy ",
            'contact_person_card_licence_no' => '3443533333',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-27',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-27 20:23:12'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58505,
            'ip_application_id' => 58501,
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:46:55'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58505,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ddddddddd ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:46:55'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-07-23',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-23 18:07:10'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58495,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ddddddddd ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-23 18:07:10'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '7878888',
            'approval_date' => '2020-07-23',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-23 17:39:03'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58493,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " ssa ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " fgffg ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-23 17:39:03'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '1234',
            'approval_date' => '2020-07-04',
            'attachment_id' => null,
            'created_by' => 22,
            'created_at' => '2020-07-22 23:53:03'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58491,
            'consignee_name' => " Akij Food Ltd ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " Cnf firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " Contact person details ",
            'contact_person_card_licence_no' => '1020304000',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 22,
            'created_at' => '2020-07-22 23:53:03'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-07-22',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-22 11:29:55'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58479,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " tgggg ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-22 11:29:55'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-07-21',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-21 12:45:30'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58477,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " ssa ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ddddddddd ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-21 12:45:30'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58475,
            'ip_application_id' => 58469,
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:20:19'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58475,
            'ip_application_id' => 58467,
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:20:19'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58475,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " fddfd ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " tgggg ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => '2020-06-30',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:20:19'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58473,
            'ip_application_id' => 58471,
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:25:53'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58473,
            'ip_application_id' => 58447,
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:25:53'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58473,
            'consignee_name' => " Sarsote  ",
            'consignee_address' => " ee ",
            'cnf_firm_name' => " Com ",
            'cnf_representative_name' => " Sarsote  ",
            'contact_person_phone' => " 8801624801360 ",
            'contact_person_email' => " sabiqun.naher@synesisit.com.bd ",
            'contact_person_details' => " Fjkstu ",
            'contact_person_card_licence_no' => '67899',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-19',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:25:53'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58465,
            'ip_application_id' => 58463,
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:21:44'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58465,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " a ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " a ",
            'contact_person_card_licence_no' => 'a',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:21:44'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58461,
            'ip_application_id' => 58353,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:11:04'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58461,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " fgffg ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:11:04'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58459,
            'ip_application_id' => 58447,
            'created_by' => 8639,
            'created_at' => '2020-07-19 21:47:12'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58459,
            'consignee_name' => " Sarsote  ",
            'consignee_address' => " ee ",
            'cnf_firm_name' => " Com ",
            'cnf_representative_name' => " Test ",
            'contact_person_phone' => " 8801624801360 ",
            'contact_person_email' => " sabiqun.naher@synesisit.com.bd ",
            'contact_person_details' => " Sabiqun ",
            'contact_person_card_licence_no' => '473829',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-19',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8639,
            'created_at' => '2020-07-19 21:47:12'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-07-19',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:51:34'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58457,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " hjhbj ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ggfg ",
            'contact_person_card_licence_no' => '22232',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 12,
            'service_charge' => 6,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-19',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:51:34'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58455,
            'ip_application_id' => 58339,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:13:31'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58455,
            'ip_application_id' => 58343,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:13:31'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58455,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " vbbv ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " bvv ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 7,
            'service_charge' => 4,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-19',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:13:31'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => 'Ghk',
            'approval_date' => '2020-07-15',
            'attachment_id' => null,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:27:26'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58453,
            'consignee_name' => " Akij Food Ltd ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " A ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " A ",
            'contact_person_card_licence_no' => '12345',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:27:26'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123456',
            'approval_date' => '2020-07-17',
            'attachment_id' => null,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:19:24'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58451,
            'consignee_name' => " Akij Food Ltd ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " Name of the CNF firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " Details of the Contact Person ",
            'contact_person_card_licence_no' => 'Card Number / License Number',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:19:24'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58449,
            'ip_application_id' => 58339,
            'created_by' => 8627,
            'created_at' => '2020-07-16 23:18:35'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58449,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => "  fdf ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " fddddd ",
            'contact_person_card_licence_no' => 'fdfd',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 3,
            'service_charge' => 2,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 23:18:35'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-07-18',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:55:19'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58445,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => "  hb ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 88,
            'service_charge' => 44,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-08',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:55:19'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-07-02',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:54:26'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58443,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => "  hb ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 88,
            'service_charge' => 44,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:54:26'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58441,
            'ip_application_id' => 58325,
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:42:26'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58441,
            'ip_application_id' => 58323,
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:42:26'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58441,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " ssa ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " fgffg ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 55,
            'service_charge' => 28,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-16',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:42:26'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58439,
            'ip_application_id' => 58325,
            'created_by' => 8627,
            'created_at' => '2020-07-16 00:21:10'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58439,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " ghghg ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ddddddddd ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 22,
            'service_charge' => 11,
            'treatment_details' => " null ",
            'inspection_date' => '2020-07-04',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 00:21:10'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58437,
            'ip_application_id' => 58353,
            'created_by' => 8627,
            'created_at' => '2020-07-15 18:11:40'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58437,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " aa ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " a ",
            'contact_person_card_licence_no' => 'a',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 10,
            'service_charge' => 5,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-15 18:11:40'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '2222',
            'approval_date' => '2020-06-03',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:51:11'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58361,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " gfgbf ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " fdfdfd ",
            'contact_person_card_licence_no' => 'text',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 4,
            'service_charge' => 2,
            'treatment_details' => " null ",
            'inspection_date' => '2020-06-16',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:51:11'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '2222',
            'approval_date' => '2020-06-16',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:39:27'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58359,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " cdcd ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " dfcfdcfd ",
            'contact_person_card_licence_no' => '223232',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 5,
            'service_charge' => 3,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:39:27'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58357,
            'ip_application_id' => 58353,
            'created_by' => 8627,
            'created_at' => '2020-06-15 11:29:46'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58357,
            'ip_application_id' => 58355,
            'created_by' => 8627,
            'created_at' => '2020-06-15 11:29:46'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58357,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ddddddddd ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 5,
            'service_charge' => 3,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-15 11:29:46'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58351,
            'ip_application_id' => 58313,
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:20:45'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58351,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " vvcvcv ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 3,
            'service_charge' => 2,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:20:45'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58347,
            'ip_application_id' => 58339,
            'created_by' => 8627,
            'created_at' => '2020-06-14 08:27:21'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58347,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " gg ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ff ",
            'contact_person_card_licence_no' => 'ff',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => '2020-06-14',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-14 08:27:21'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58345,
            'ip_application_id' => 58343,
            'created_by' => 8627,
            'created_at' => '2020-06-11 18:48:58'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58345,
            'ip_application_id' => 58339,
            'created_by' => 8627,
            'created_at' => '2020-06-11 18:48:58'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58345,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " gggf ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " hhhh ",
            'contact_person_card_licence_no' => '55545',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-11 18:48:58'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58335,
            'ip_application_id' => 58325,
            'created_by' => 8627,
            'created_at' => '2020-06-11 12:00:17'
        ]);
        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58335,
            'ip_application_id' => 58323,
            'created_by' => 8627,
            'created_at' => '2020-06-11 12:00:17'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58335,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ddddddddd ",
            'contact_person_card_licence_no' => '8888888888',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 2,
            'service_charge' => 1,
            'treatment_details' => " null ",
            'inspection_date' => '2020-06-11',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-11 12:00:17'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '4444',
            'approval_date' => '2020-06-11',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-10 14:55:48'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58333,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " hihiuiuiuiu ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " ghgfhfg ",
            'contact_person_card_licence_no' => '656565',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-06-10 14:55:48'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-06-30',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:32:57'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58331,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " gffffffffff ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " bgbgf ",
            'contact_person_card_licence_no' => '33333333',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 45,
            'service_charge' => 23,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:32:57'
        ]);

        $memoId = DB::table('memos')->insertGetId([
            'memo_no' => '123',
            'approval_date' => '2020-06-10',
            'attachment_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:23:55'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58329,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " fbgdfgdf ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " hfhfhfg ",
            'contact_person_card_licence_no' => '3443533333',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => '2020-06-09',
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => $memoId,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:23:55'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58319,
            'ip_application_id' => 58313,
            'created_by' => 8627,
            'created_at' => '2020-06-07 11:12:11'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58319,
            'consignee_name' => " Ideal Food and Beverage Limited ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " abc ",
            'cnf_representative_name' => " Ideal Food and Beverage Limited ",
            'contact_person_phone' => " 8801739788004 ",
            'contact_person_email' => " rezaulcse13@gmail.com ",
            'contact_person_details' => " fsdd ",
            'contact_person_card_licence_no' => '5555555',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 7,
            'service_charge' => 4,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-07 11:12:11'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58276,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-03-03 15:49:31'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58276,
            'consignee_name' => " Akij Food Ltd ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " 444 ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " 8888 ",
            'contact_person_card_licence_no' => '122',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 10,
            'service_charge' => 5,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-03-03 15:49:31'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58275,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-03-03 13:23:27'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58275,
            'consignee_name' => " Akij Food Ltd ",
            'consignee_address' => " Dhaka ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " CEO of the company ",
            'contact_person_card_licence_no' => '33342424',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 56464,
            'service_charge' => 28232,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-03-03 13:23:27'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58272,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:41:27'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58272,
            'consignee_name' => " Stern Industries Limited ",
            'consignee_address' => " 8/A Factory Road, Shampur,Kodomtoli I/A, Dhaka. ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " adada ",
            'contact_person_card_licence_no' => 'asdada',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 888,
            'service_charge' => 444,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:41:27'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 58271,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:40:46'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 58271,
            'consignee_name' => " Stern Industries Limited ",
            'consignee_address' => " 8/A Factory Road, Shampur,Kodomtoli I/A, Dhaka. ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " adada ",
            'contact_person_card_licence_no' => 'asdada',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 888,
            'service_charge' => 444,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:40:46'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45842,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-02-16 09:55:02'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45842,
            'consignee_name' => " Stern Industries Limited ",
            'consignee_address' => " 8/A Factory Road, Shampur,Kodomtoli I/A, Dhaka. ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " aaa ",
            'contact_person_card_licence_no' => 'aa',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 100,
            'service_charge' => 50,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-02-16 09:55:02'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45840,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-02-10 12:17:12'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45840,
            'consignee_name' => " Stern Industries Limited ",
            'consignee_address' => " 8/A Factory Road, Shampur,Kodomtoli I/A, Dhaka. ",
            'cnf_firm_name' => " aa ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " asdadad ",
            'contact_person_card_licence_no' => 'aa',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 100,
            'service_charge' => 50,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-02-10 12:17:12'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45839,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-02-10 12:03:55'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45839,
            'consignee_name' => " Stern Industries Limited ",
            'consignee_address' => " 8/A Factory Road, Shampur,Kodomtoli I/A, Dhaka. ",
            'cnf_firm_name' => " aa ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " asdadad ",
            'contact_person_card_licence_no' => 'aa',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 100,
            'service_charge' => 50,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-02-10 12:03:55'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45838,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-02-10 11:22:54'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45838,
            'consignee_name' => " Stern Industries Limited ",
            'consignee_address' => " 8/A Factory Road, Shampur,Kodomtoli I/A, Dhaka. ",
            'cnf_firm_name' => " aa ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " mm ",
            'contact_person_card_licence_no' => '13213134',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 100,
            'service_charge' => 50,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-02-10 11:22:54'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45827,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-02-05 12:39:40'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45827,
            'consignee_name' => " M/S SIFA ENTERPRISE ",
            'consignee_address' => " 3/1 ISHWAR CHANDRA GOSH STREET DHAKA ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " 6898979 ",
            'contact_person_card_licence_no' => '67868',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => 100,
            'service_charge' => 50,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-02-05 12:39:40'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45826,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-02-05 12:28:46'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45826,
            'consignee_name' => " M/S SIFA ENTERPRISE ",
            'consignee_address' => " 3/1 ISHWAR CHANDRA GOSH STREET DHAKA ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " 6898979 ",
            'contact_person_card_licence_no' => '67868',
            'has_treatment' => 0,
            'has_fumigation' => 0,
            'chemical_charge' => null,
            'service_charge' => null,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-02-05 12:28:46'
        ]);

        DB::table('ro_ip_application')->insert([
            'ro_application_id' => 45810,
            'ip_application_id' => 44835,
            'created_by' => 22,
            'created_at' => '2020-01-02 15:28:45'
        ]);
        DB::table('ro_details')->insert([
            'application_id' => 45810,
            'consignee_name' => " M/S SIFA ENTERPRISE ",
            'consignee_address' => " 3/1 ISHWAR CHANDRA GOSH STREET DHAKA ",
            'cnf_firm_name' => " cnf_firm ",
            'cnf_representative_name' => " Akij Food Ltd 123456 ",
            'contact_person_phone' => " 8801924076856 ",
            'contact_person_email' => " shahadatbau@yahoo.com ",
            'contact_person_details' => " manager ",
            'contact_person_card_licence_no' => '8',
            'has_treatment' => 0,
            'has_fumigation' => 1,
            'chemical_charge' => 60,
            'service_charge' => 30,
            'treatment_details' => " null ",
            'inspection_date' => null,
            'treatment_date' => null,
            'inspection_details' => "  ",
            'chemical_concentration' => "  ",
            'exposer_temperature_duration' => "  ",
            'memo_id' => null,
            'created_by' => 22,
            'created_at' => '2020-01-02 15:28:45'
        ]);
    }
}
