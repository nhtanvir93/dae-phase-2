<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '122_bbn_16-06-20201592285862.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 186756,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58359,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => 'bbn',
            'amount' => 122,
            'issue_date' => '2020-06-16',
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:37:42'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58359,
            'type' => 'APPLICATION',
            'amount' => 122,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:37:42',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '84757_3425345235_02-03-20201583220179.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 21499,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58275,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '3425345235',
            'amount' => 84757,
            'issue_date' => '2020-03-02',
            'created_by' => 22,
            'created_at' => '2020-03-03 13:22:58'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58275,
            'type' => 'APPLICATION',
            'amount' => 84757,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-03 13:22:58',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2000_erwrwrwerwe_03-03-20201583309832.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 255579,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58277,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => 'erwrwrwerwe',
            'amount' => 2000,
            'issue_date' => '2020-03-03',
            'created_by' => 22,
            'created_at' => '2020-03-04 14:17:11'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58277,
            'type' => 'APPLICATION',
            'amount' => 2000,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-04 14:17:11',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '285_123131_03-03-20201583652103.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 222999,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58280,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '123131',
            'amount' => 285,
            'issue_date' => '2020-03-03',
            'created_by' => 22,
            'created_at' => '2020-03-08 13:21:43'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58280,
            'type' => 'APPLICATION',
            'amount' => 285,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-08 13:21:43',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '520_241414_11-03-20201584352034.PNG',
            'content_type' => 'image/png',
            'extension' => '.PNG',
            'size' => 55876,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58284,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '241414',
            'amount' => 520,
            'issue_date' => '2020-03-11',
            'created_by' => 22,
            'created_at' => '2020-03-16 15:47:14'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58284,
            'type' => 'APPLICATION',
            'amount' => 520,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-16 15:47:14',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '75_23131313213_14-03-20201584272710.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 1369432,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58286,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '23131313213',
            'amount' => 75,
            'issue_date' => '2020-03-14',
            'created_by' => 22,
            'created_at' => '2020-03-15 17:45:09'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58286,
            'type' => 'APPLICATION',
            'amount' => 75,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-15 17:45:09',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2750_1312313_11-03-20201584330822.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 879806,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58283,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '1312313',
            'amount' => 2750,
            'issue_date' => '2020-03-11',
            'created_by' => 22,
            'created_at' => '2020-03-16 09:53:41'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58283,
            'type' => 'APPLICATION',
            'amount' => 2750,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-16 09:53:41',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '530_21313_15-03-20201584349877.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 174007,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58281,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '21313',
            'amount' => 530,
            'issue_date' => '2020-03-15',
            'created_by' => 22,
            'created_at' => '2020-03-16 15:11:16'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58281,
            'type' => 'APPLICATION',
            'amount' => 530,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-16 15:11:16',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '26_324234_11-03-20201584349931.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 255579,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58281,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '324234',
            'amount' => 26,
            'issue_date' => '2020-03-11',
            'created_by' => 22,
            'created_at' => '2020-03-16 15:12:11'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58281,
            'type' => 'APPLICATION',
            'amount' => 26,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-16 15:12:11',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '45_34_11-03-20201584360875.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 255579,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58274,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '34',
            'amount' => 45,
            'issue_date' => '2020-03-11',
            'created_by' => 22,
            'created_at' => '2020-03-16 18:14:35'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58274,
            'type' => 'APPLICATION',
            'amount' => 45,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-16 18:14:35',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '5_234234234_11-03-20201584364240.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 879806,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58274,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '234234234',
            'amount' => 5,
            'issue_date' => '2020-03-11',
            'created_by' => 22,
            'created_at' => '2020-03-16 19:10:39'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58274,
            'type' => 'APPLICATION',
            'amount' => 5,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-16 19:10:39',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '76_13413124_17-03-20201584525607.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 255579,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58276,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '13413124',
            'amount' => 76,
            'issue_date' => '2020-03-17',
            'created_by' => 22,
            'created_at' => '2020-03-18 16:00:06'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58276,
            'type' => 'APPLICATION',
            'amount' => 76,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-03-18 16:00:06',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '4161_2_18-04-20201587279843.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 9304,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58289,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '2',
            'amount' => 4161,
            'issue_date' => '2020-04-18',
            'created_by' => 22,
            'created_at' => '2020-04-19 13:04:02'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58289,
            'type' => 'APPLICATION',
            'amount' => 4161,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-04-19 13:04:02',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '540_666_12-05-20201589264790.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 12538,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58291,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '666',
            'amount' => 540,
            'issue_date' => '2020-05-12',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:26:29'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58291,
            'type' => 'APPLICATION',
            'amount' => 540,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:26:29',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '4_22_12-05-20201589264856.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 10747,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58291,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '22',
            'amount' => 4,
            'issue_date' => '2020-05-12',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:27:35'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58291,
            'type' => 'APPLICATION',
            'amount' => 4,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:27:35',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '40_123456_12-05-20201589774544.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 102487,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58293,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '123456',
            'amount' => 40,
            'issue_date' => '2020-05-12',
            'created_by' => 22,
            'created_at' => '2020-05-18 10:02:23'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58293,
            'type' => 'APPLICATION',
            'amount' => 40,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-05-18 10:02:23',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '15_1243454_17-05-20201589776220.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 56047,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58293,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '1243454',
            'amount' => 15,
            'issue_date' => '2020-05-17',
            'created_by' => 22,
            'created_at' => '2020-05-18 10:30:19'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58293,
            'type' => 'APPLICATION',
            'amount' => 15,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-05-18 10:30:19',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '295_321231_21-05-20201590037044.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 1903530,
            'path' => 'files/uploads/invoice',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58305,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '321231',
            'amount' => 295,
            'issue_date' => '2020-05-21',
            'created_by' => 8635,
            'created_at' => '2020-05-21 10:57:23'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58305,
            'type' => 'APPLICATION',
            'amount' => 295,
            'invoice_id' => $invoiceId,
            'created_by' => 8635,
            'created_at' => '2020-05-21 10:57:23',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '994_dd_27-05-20201590557558.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 76568,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58309,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => 'dd',
            'amount' => 994,
            'issue_date' => '2020-05-27',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:32:37'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58309,
            'type' => 'APPLICATION',
            'amount' => 994,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:32:37',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_ffffffffffffff_27-05-20201590557718.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 76568,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58309,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => 'ffffffffffffff',
            'amount' => 2,
            'issue_date' => '2020-05-27',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:35:18'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58309,
            'type' => 'APPLICATION',
            'amount' => 2,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:35:18',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_333_16-06-20201592285936.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 181593,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58359,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '333',
            'amount' => 1,
            'issue_date' => '2020-06-16',
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:38:55'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58359,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:38:55',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_123_02-07-20201593691395.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 78794,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58391,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '123',
            'amount' => 1,
            'issue_date' => '2020-07-02',
            'created_by' => 8627,
            'created_at' => '2020-07-02 18:03:15'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58391,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-02 18:03:15',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_124_02-07-20201593691498.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 213197,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58391,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '124',
            'amount' => 2,
            'issue_date' => '2020-07-02',
            'created_by' => 8627,
            'created_at' => '2020-07-02 18:04:57'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58391,
            'type' => 'APPLICATION',
            'amount' => 2,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-02 18:04:57',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_434_05-07-20201593947484.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 42568,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58395,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '434',
            'amount' => 3,
            'issue_date' => '2020-07-05',
            'created_by' => 8627,
            'created_at' => '2020-07-05 17:11:23'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58395,
            'type' => 'APPLICATION',
            'amount' => 3,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-05 17:11:23',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '300_11115_07-07-20201594096653.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 42568,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58399,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '11115',
            'amount' => 300,
            'issue_date' => '2020-07-07',
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:37:33'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58399,
            'type' => 'APPLICATION',
            'amount' => 300,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:37:33',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '254_11115_07-07-20201594096886.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 42568,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58399,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '11115',
            'amount' => 254,
            'issue_date' => '2020-07-07',
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:41:26'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58399,
            'type' => 'APPLICATION',
            'amount' => 254,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:41:26',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_111_06-07-20201594112293.jpeg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpeg',
            'size' => 132513,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58387,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '111',
            'amount' => 1,
            'issue_date' => '2020-07-06',
            'created_by' => 22,
            'created_at' => '2020-07-07 14:58:13'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58387,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-07-07 14:58:13',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '300_111_07-07-20201594120828.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 75117,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58403,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '111',
            'amount' => 300,
            'issue_date' => '2020-07-07',
            'created_by' => 8627,
            'created_at' => '2020-07-07 17:20:28'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58403,
            'type' => 'APPLICATION',
            'amount' => 300,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-07 17:20:28',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '200_111_07-07-20201594120897.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 75117,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58403,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '111',
            'amount' => 200,
            'issue_date' => '2020-07-07',
            'created_by' => 8627,
            'created_at' => '2020-07-07 17:21:37'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58403,
            'type' => 'APPLICATION',
            'amount' => 200,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-07 17:21:37',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '220_1234567_07-07-20201594190362.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 1319185,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58389,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '1234567',
            'amount' => 220,
            'issue_date' => '2020-07-07',
            'created_by' => 22,
            'created_at' => '2020-07-08 12:39:22'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58389,
            'type' => 'APPLICATION',
            'amount' => 220,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-07-08 12:39:22',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_500_09-07-20201594273018.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 496429,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58417,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '500',
            'amount' => 500,
            'issue_date' => '2020-07-09',
            'created_by' => 8627,
            'created_at' => '2020-07-09 11:36:58'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58417,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-09 11:36:58',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '219_12222_08-07-20201594275531.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 1015083,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58387,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '12222',
            'amount' => 219,
            'issue_date' => '2020-07-08',
            'created_by' => 22,
            'created_at' => '2020-07-09 12:18:50'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58387,
            'type' => 'APPLICATION',
            'amount' => 219,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-07-09 12:18:50',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_12345_09-07-20201594302352.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 49493,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58419,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '12345',
            'amount' => 500,
            'issue_date' => '2020-07-09',
            'created_by' => 22,
            'created_at' => '2020-07-09 19:45:51'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58419,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-07-09 19:45:51',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '527_11_12-07-20201594556492.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 587559,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58423,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '11',
            'amount' => 527,
            'issue_date' => '2020-07-12',
            'created_by' => 8627,
            'created_at' => '2020-07-12 18:21:32'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58423,
            'type' => 'APPLICATION',
            'amount' => 527,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-12 18:21:32',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_333_13-07-20201594642934.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 42825,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58427,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '333',
            'amount' => 3,
            'issue_date' => '2020-07-13',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:22:14'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58427,
            'type' => 'APPLICATION',
            'amount' => 3,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:22:14',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '277777823_22_13-07-20201594644408.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 496429,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58429,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '22',
            'amount' => 277777823,
            'issue_date' => '2020-07-13',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:46:47'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58429,
            'type' => 'APPLICATION',
            'amount' => 277777823,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:46:47',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_33_13-07-20201594651407.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 42825,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58431,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '33',
            'amount' => 3,
            'issue_date' => '2020-07-13',
            'created_by' => 8627,
            'created_at' => '2020-07-13 20:43:27'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58431,
            'type' => 'APPLICATION',
            'amount' => 3,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-13 20:43:27',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '272_21111111111111111111111_13-07-20201594652138.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 634282,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58433,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '21111111111111111111111',
            'amount' => 272,
            'issue_date' => '2020-07-13',
            'created_by' => 8627,
            'created_at' => '2020-07-13 20:55:38'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58433,
            'type' => 'APPLICATION',
            'amount' => 272,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-13 20:55:38',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_111111111111111_13-07-20201594652197.png',
            'content_type' => 'image/png',
            'extension' => '.png',
            'size' => 587559,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58433,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '111111111111111',
            'amount' => 1,
            'issue_date' => '2020-07-13',
            'created_by' => 8627,
            'created_at' => '2020-07-13 20:56:37'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58433,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-13 20:56:37',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_679_15-07-20201594809981.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 398156,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58435,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '679',
            'amount' => 500,
            'issue_date' => '2020-07-15',
            'created_by' => 8639,
            'created_at' => '2020-07-15 16:46:21'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58435,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-15 16:46:21',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '36_4545_16-07-20201594837344.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 107127,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58439,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '4545',
            'amount' => 36,
            'issue_date' => '2020-07-16',
            'created_by' => 8627,
            'created_at' => '2020-07-16 00:22:24'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58439,
            'type' => 'APPLICATION',
            'amount' => 36,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-16 00:22:24',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '84_4545_16-07-20201594842225.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 42825,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58441,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '4545',
            'amount' => 84,
            'issue_date' => '2020-07-16',
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:43:45'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58441,
            'type' => 'APPLICATION',
            'amount' => 84,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:43:45',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '20_55_16-07-20201594909959.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 169680,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58447,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '55',
            'amount' => 20,
            'issue_date' => '2020-07-16',
            'created_by' => 8639,
            'created_at' => '2020-07-16 20:32:39'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58447,
            'type' => 'APPLICATION',
            'amount' => 20,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-16 20:32:39',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '133_123_16-07-20201594917214.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 42825,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58445,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '123',
            'amount' => 133,
            'issue_date' => '2020-07-16',
            'created_by' => 8627,
            'created_at' => '2020-07-16 22:33:34'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58445,
            'type' => 'APPLICATION',
            'amount' => 133,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-16 22:33:34',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '70_33_16-07-20201594919979.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 107127,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58449,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '33',
            'amount' => 70,
            'issue_date' => '2020-07-16',
            'created_by' => 8627,
            'created_at' => '2020-07-16 23:19:39'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58449,
            'type' => 'APPLICATION',
            'amount' => 70,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-16 23:19:39',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '76_33_19-07-20201595139387.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58455,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '33',
            'amount' => 76,
            'issue_date' => '2020-07-19',
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:16:27'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58455,
            'type' => 'APPLICATION',
            'amount' => 76,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:16:27',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_111_19-07-20201595139419.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58455,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '111',
            'amount' => 1,
            'issue_date' => '2020-07-19',
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:16:58'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58455,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:16:58',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2147483647_4343_19-07-20201595141529.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 362534,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58457,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '4343',
            'amount' => 2147483647,
            'issue_date' => '2020-07-19',
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:52:08'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58457,
            'type' => 'APPLICATION',
            'amount' => 2147483647,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:52:08',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '18_363829_19-07-20201595173793.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 310047,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58459,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '363829',
            'amount' => 18,
            'issue_date' => '2020-07-19',
            'created_by' => 8639,
            'created_at' => '2020-07-19 21:49:53'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58459,
            'type' => 'APPLICATION',
            'amount' => 18,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-19 21:49:53',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '45_5454_20-07-20201595225516.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58461,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '5454',
            'amount' => 45,
            'issue_date' => '2020-07-20',
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:11:55'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58461,
            'type' => 'APPLICATION',
            'amount' => 45,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:11:55',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '10_5457_20-07-20201595225604.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58461,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '5457',
            'amount' => 10,
            'issue_date' => '2020-07-20',
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:13:23'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58461,
            'type' => 'APPLICATION',
            'amount' => 10,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:13:23',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_677878_20-07-20201595227303.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 496429,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58463,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '677878',
            'amount' => 3,
            'issue_date' => '2020-07-20',
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:41:42'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58463,
            'type' => 'APPLICATION',
            'amount' => 3,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:41:42',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_11111_19-07-20201595236970.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 117619,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58465,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '11111',
            'amount' => 1,
            'issue_date' => '2020-07-19',
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:22:49'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58465,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:22:49',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '283333379_45545_20-07-20201595238945.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 496429,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58467,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '45545',
            'amount' => 283333379,
            'issue_date' => '2020-07-20',
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:55:45'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58467,
            'type' => 'APPLICATION',
            'amount' => 283333379,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:55:45',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '222222268_4343_20-07-20201595239716.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 82776,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58469,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '4343',
            'amount' => 222222268,
            'issue_date' => '2020-07-20',
            'created_by' => 8627,
            'created_at' => '2020-07-20 16:08:35'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58469,
            'type' => 'APPLICATION',
            'amount' => 222222268,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-20 16:08:35',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '4_456_20-07-20201595258426.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 207509,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58471,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '456',
            'amount' => 4,
            'issue_date' => '2020-07-20',
            'created_by' => 8639,
            'created_at' => '2020-07-20 21:20:25'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58471,
            'type' => 'APPLICATION',
            'amount' => 4,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-20 21:20:25',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '6_6799_20-07-20201595262406.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 316044,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58473,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '6799',
            'amount' => 6,
            'issue_date' => '2020-07-20',
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:26:45'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58473,
            'type' => 'APPLICATION',
            'amount' => 6,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:26:45',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '6_5789_20-07-20201595262450.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 316044,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58473,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '5789',
            'amount' => 6,
            'issue_date' => '2020-07-20',
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:27:29'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58473,
            'type' => 'APPLICATION',
            'amount' => 6,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:27:29',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '10_333_21-07-20201595272864.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58475,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '333',
            'amount' => 10,
            'issue_date' => '2020-07-21',
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:21:03'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58475,
            'type' => 'APPLICATION',
            'amount' => 10,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:21:03',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '4_44_21-07-20201595313987.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58477,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '44',
            'amount' => 4,
            'issue_date' => '2020-07-21',
            'created_by' => 8627,
            'created_at' => '2020-07-21 12:46:26'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58477,
            'type' => 'APPLICATION',
            'amount' => 4,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-21 12:46:26',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '6_66_22-07-20201595397862.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 107127,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58479,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '66',
            'amount' => 6,
            'issue_date' => '2020-07-22',
            'created_by' => 8627,
            'created_at' => '2020-07-22 12:04:22'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58479,
            'type' => 'APPLICATION',
            'amount' => 6,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-22 12:04:22',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_42_22-07-20201595409173.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 207509,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58481,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '42',
            'amount' => 1,
            'issue_date' => '2020-07-22',
            'created_by' => 8639,
            'created_at' => '2020-07-22 15:12:53'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58481,
            'type' => 'APPLICATION',
            'amount' => 1,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-22 15:12:53',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '590_234566_21-07-20201595415458.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 226832,
            'path' => 'files/uploads/invoice',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58483,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '234566',
            'amount' => 590,
            'issue_date' => '2020-07-21',
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:57:37'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58483,
            'type' => 'APPLICATION',
            'amount' => 590,
            'invoice_id' => $invoiceId,
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:57:37',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_1234_21-07-20201595417468.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 117619,
            'path' => 'files/uploads/invoice',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58485,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '1234',
            'amount' => 500,
            'issue_date' => '2020-07-21',
            'created_by' => 8673,
            'created_at' => '2020-07-22 17:31:07'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58485,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 8673,
            'created_at' => '2020-07-22 17:31:07',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_687687_22-07-20201595429027.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 207509,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58487,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '687687',
            'amount' => 500,
            'issue_date' => '2020-07-22',
            'created_by' => 8639,
            'created_at' => '2020-07-22 20:43:47'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58487,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-22 20:43:47',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_546546_22-07-20201595429750.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 207509,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58489,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '546546',
            'amount' => 500,
            'issue_date' => '2020-07-22',
            'created_by' => 8639,
            'created_at' => '2020-07-22 20:55:49'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58489,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-22 20:55:49',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '80_1243_22-07-20201595440464.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 65645,
            'path' => 'files/uploads/invoice',
            'created_by' => 22,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58491,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '1243',
            'amount' => 80,
            'issue_date' => '2020-07-22',
            'created_by' => 22,
            'created_at' => '2020-07-22 23:54:23'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58491,
            'type' => 'APPLICATION',
            'amount' => 80,
            'invoice_id' => $invoiceId,
            'created_by' => 22,
            'created_at' => '2020-07-22 23:54:23',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '45_9898_23-07-20201595504393.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58493,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '9898',
            'amount' => 45,
            'issue_date' => '2020-07-23',
            'created_by' => 8627,
            'created_at' => '2020-07-23 17:39:52'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58493,
            'type' => 'APPLICATION',
            'amount' => 45,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-23 17:39:52',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '888888919_79789_23-07-20201595506332.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58495,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '79789',
            'amount' => 888888919,
            'issue_date' => '2020-07-23',
            'created_by' => 8627,
            'created_at' => '2020-07-23 18:12:11'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58495,
            'type' => 'APPLICATION',
            'amount' => 888888919,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-23 18:12:11',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '384_7879_26-07-20201595740474.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 478248,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58497,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '7879',
            'amount' => 384,
            'issue_date' => '2020-07-26',
            'created_by' => 8627,
            'created_at' => '2020-07-26 11:14:34'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58497,
            'type' => 'APPLICATION',
            'amount' => 384,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-26 11:14:34',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2147483647_55_26-07-20201595740735.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58499,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '55',
            'amount' => 2147483647,
            'issue_date' => '2020-07-26',
            'created_by' => 8627,
            'created_at' => '2020-07-26 11:18:54'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58499,
            'type' => 'APPLICATION',
            'amount' => 2147483647,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-26 11:18:54',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '23_76876_26-07-20201595743646.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 593833,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58501,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '76876',
            'amount' => 23,
            'issue_date' => '2020-07-26',
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:07:25'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58501,
            'type' => 'APPLICATION',
            'amount' => 23,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:07:25',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '45_555555_26-07-20201595744150.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 478248,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58503,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '555555',
            'amount' => 45,
            'issue_date' => '2020-07-26',
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:15:49'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58503,
            'type' => 'APPLICATION',
            'amount' => 45,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:15:49',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_787_26-07-20201595746084.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 362534,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58505,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '787',
            'amount' => 3,
            'issue_date' => '2020-07-26',
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:48:03'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58505,
            'type' => 'APPLICATION',
            'amount' => 3,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:48:03',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '500_689_26-07-20201595783298.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 350243,
            'path' => 'files/uploads/invoice',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58507,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '689',
            'amount' => 500,
            'issue_date' => '2020-07-26',
            'created_by' => 8639,
            'created_at' => '2020-07-26 23:08:18'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58507,
            'type' => 'APPLICATION',
            'amount' => 500,
            'invoice_id' => $invoiceId,
            'created_by' => 8639,
            'created_at' => '2020-07-26 23:08:18',
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1386_54554_27-07-20201595859841.jpg',
            'content_type' => 'image/jpeg',
            'extension' => '.jpg',
            'size' => 362534,
            'path' => 'files/uploads/invoice',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        $invoiceId = DB::table('app_invoices')->insertGetId([
            'application_id' => 58511,
            'attachment_id' => $attachmentId,
            'bank_branch_id' => null,
            'chalan_no' => '54554',
            'amount' => 1386,
            'issue_date' => '2020-07-27',
            'created_by' => 8627,
            'created_at' => '2020-07-27 20:24:00'
        ]);
        DB::table('payments')->insert([
            'application_id' => 58511,
            'type' => 'APPLICATION',
            'amount' => 1386,
            'invoice_id' => $invoiceId,
            'created_by' => 8627,
            'created_at' => '2020-07-27 20:24:00',
        ]);
    }
}
