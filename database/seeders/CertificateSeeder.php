<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP20181911487.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 948939,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '20181911487',
			'issue_date' => '2019-06-23',
			'remarks' => 'Automated IP Been Corrected ',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-06-27 11:50:03',
			'updated_by' => 9,
			'updated_at' => '2019-06-27 11:50:50'
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0001.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1892891,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0001',
			'issue_date' => '2019-10-22',
			'remarks' => 'Automated IP Been Corrected',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-10-22 16:24:29',
			'updated_by' => 9,
			'updated_at' => '2019-10-22 16:26:03'
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0004.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 2140981,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0004',
			'issue_date' => '2019-10-30',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-10-30 18:43:14',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0007.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1434067,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0007',
			'issue_date' => '2019-11-05',
			'remarks' => 'Consignor address change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-05 11:38:17',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0008.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1384564,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0008',
			'issue_date' => '2019-11-05',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-05 11:39:46',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0009.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1387329,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0009',
			'issue_date' => '2019-11-05',
			'remarks' => 'Quantity change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-05 11:40:47',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0013.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1348951,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0013',
			'issue_date' => '2019-11-12',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-13 17:20:42',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0014.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1481376,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0014',
			'issue_date' => '2019-11-12',
			'remarks' => 'Country of origin and an export/re-export changed',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-13 17:21:15',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0002.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1444057,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0002',
			'issue_date' => '2019-09-26',
			'remarks' => 'Country of origin and an export/re-export changed',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-13 17:23:01',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0003.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1427028,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0003',
			'issue_date' => '2019-10-30',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-17 13:37:14',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0005.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1413507,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0005',
			'issue_date' => '2019-11-04',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-17 13:38:11',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0006.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1450951,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0006',
			'issue_date' => '2019-11-04',
			'remarks' => 'Consignor address change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-17 13:38:58',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0010.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 2089876,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0010',
			'issue_date' => '2019-11-11',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-17 13:39:55',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0011.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1532033,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0011',
			'issue_date' => '2019-11-11',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-17 13:40:42',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0012.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1372552,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0012',
			'issue_date' => '2019-11-11',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-11-17 13:41:23',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0017.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 336729,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0017',
			'issue_date' => '2019-12-02',
			'remarks' => 'Botanical name & condition change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-09 16:47:28',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0018.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 339169,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0018',
			'issue_date' => '2019-12-08',
			'remarks' => 'Port of entry change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-09 16:48:32',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0019.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 328896,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0019',
			'issue_date' => '2019-12-11',
			'remarks' => 'Country of export/re-export changed',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-12 15:35:19',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0020.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 330365,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0020',
			'issue_date' => '2019-12-12',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-12 15:35:40',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0022.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1950355,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0022',
			'issue_date' => '2019-12-15',
			'remarks' => 'Quantity change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-15 17:04:52',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP0021.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1372082,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '0021',
			'issue_date' => '2019-12-12',
			'remarks' => 'Additional conditions change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-15 17:07:16',
			'updated_by' => null,
			'updated_at' => null
		]);

		$attachmentId = DB::table('attachments')->insertGetId([
			'name' => 'IP11512.pdf',
			'content_type' => 'application/pdf',
			'extension' => 'pdf',
			'size' => 1034989,
			'path' => 'files/uploads/certificates',
			'created_by' => 9,
			'created_at' => now()
		]);
		DB::table('certificates')->insert([
			'app_type_id' => 3,
			'certificate_no' => '11512',
			'issue_date' => '2019-12-17',
			'remarks' => 'Additional condition change',
			'attachment_id' => $attachmentId,
			'created_by' => 9,
			'created_at' => '2019-12-29 09:53:48',
			'updated_by' => null,
			'updated_at' => null
		]);


    }
}
