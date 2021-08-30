<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppAttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595859767ecf4dd.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58511,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-27 22:20:53',
            'created_by' => 8627,
            'created_at' => '2020-07-27 20:22:47'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58511,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-27 22:20:53',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58511,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-27 22:20:53',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1595865153c10343.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58511,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-27 22:20:53',
            'created_by' => 8627,
            'created_at' => '2020-07-27 21:52:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_15957836458b9053.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58509,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8639,
            'created_at' => '2020-07-26 23:14:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_1595783234a065ba.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58507,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-26 23:16:51',
            'created_by' => 8639,
            'created_at' => '2020-07-26 23:07:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1595745923612892.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58505,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-26 17:02:24',
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:45:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595745945799e0d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58505,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-26 17:02:24',
            'created_by' => 8627,
            'created_at' => '2020-07-26 12:45:44'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58505,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-26 17:02:24',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58505,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-26 17:02:24',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58503,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:17:25',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58503,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:17:25',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58503,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:17:25',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58503,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:17:25',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58503,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:17:25',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58501,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:18:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58501,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:18:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58501,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:18:06',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58501,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:18:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58501,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 50,
            'process_datetime' => '2020-07-26 12:18:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58499,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:26:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58499,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:26:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58499,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:26:39',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58499,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:26:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58499,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:26:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58497,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:29:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58497,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:29:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58497,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:29:06',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58497,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:29:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58497,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-26 11:29:06',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595505994e9720d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58495,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-23 18:06:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1595506004da67db.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58495,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-23 18:06:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58495,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58495,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_159550432101c523.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58493,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 296,
            'process_datetime' => '2020-07-23 17:49:12',
            'created_by' => 8627,
            'created_at' => '2020-07-23 17:38:41'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_159550433290c64c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58493,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 296,
            'process_datetime' => '2020-07-23 17:49:12',
            'created_by' => 8627,
            'created_at' => '2020-07-23 17:38:52'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58493,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-23 17:49:12',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58493,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-23 17:49:12',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1595440330e0fcc8.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58491,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-22 23:52:10'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_1595440363f4fd5e.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58491,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-22 23:52:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58491,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58491,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_6_1593667607144f63.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58491,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:26:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_15867101634ce07a.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58491,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_159542968159530b.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58489,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-22 20:57:18',
            'created_by' => 8639,
            'created_at' => '2020-07-22 20:54:40'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_159542890646046c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58487,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-22 20:44:57',
            'created_by' => 8639,
            'created_at' => '2020-07-22 20:41:45'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8673_12_159541741995712a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58485,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-22 17:34:28',
            'created_by' => 8673,
            'created_at' => '2020-07-22 17:30:19'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8673_1_1595415302ec1a97.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58485,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-22 17:34:28',
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:55:02'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8673_4_159541531629edc8.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58485,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-22 17:34:28',
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:55:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8673_12_15954153987543f0.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58483,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-22 20:52:37',
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:56:37'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8673_1_1595415302ec1a97.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58483,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-22 20:52:37',
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:55:02'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8673_4_159541531629edc8.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 8673,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58483,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-22 20:52:37',
            'created_by' => 8673,
            'created_at' => '2020-07-22 16:55:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_1_15954090328e7b8f.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58481,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 17,
            'process_datetime' => '2020-07-22 15:16:47',
            'created_by' => 8639,
            'created_at' => '2020-07-22 15:10:32'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58479,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15953973329d0b5b.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58479,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-22 11:55:31'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_15953975749f3d35.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58479,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-22 11:59:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_15953975950d0f95.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58479,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-22 11:59:55'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_15953139071fcc20.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58477,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-21 12:45:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_159531391624d673.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58477,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-21 12:45:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58477,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58477,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595272783bb6481.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58475,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-21 11:08:30',
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:19:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15952727923fa56c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58475,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-21 11:08:30',
            'created_by' => 8627,
            'created_at' => '2020-07-21 01:19:51'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58475,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-21 11:08:30',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58475,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-21 11:08:30',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_11_15952623022521ab.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58473,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-20 22:30:53',
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:25:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_18_159526231431bce4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58473,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-20 22:30:53',
            'created_by' => 8639,
            'created_at' => '2020-07-20 22:25:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_1_15952583330c0576.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58471,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 22:00:23',
            'created_by' => 8639,
            'created_at' => '2020-07-20 21:18:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58469,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 16:10:14',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58469,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 16:10:14',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58469,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 16:10:14',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58469,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 16:10:14',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58469,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 16:10:14',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58467,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 15:57:01',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58467,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 15:57:01',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58467,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 15:57:01',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58467,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 15:57:01',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58467,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 15:57:01',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_15952368917c9512.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58465,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:21:30'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15952368982a010c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58465,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-20 15:21:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58465,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58465,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58463,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 12:45:42',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58463,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 12:45:42',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58463,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 12:45:42',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58463,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 12:45:42',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58463,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-20 12:45:42',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595225444897ce3.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58461,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:10:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15952254541b5df6.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58461,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-20 12:10:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58461,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58461,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_11_1595173508935be4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58459,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-19 22:51:32',
            'created_by' => 8639,
            'created_at' => '2020-07-19 21:45:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_18_1595173582a585ab.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58459,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-19 22:51:32',
            'created_by' => 8639,
            'created_at' => '2020-07-19 21:46:21'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595141457f597a8.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58457,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 18:02:30',
            'created_by' => 8627,
            'created_at' => '2020-07-19 12:50:57'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58457,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 18:02:30',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58457,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 18:02:30',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1595159977da52d5.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58457,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 18:02:30',
            'created_by' => 8627,
            'created_at' => '2020-07-19 17:59:36'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_159513839044ad44.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58455,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 12:24:05',
            'created_by' => 8627,
            'created_at' => '2020-07-19 11:59:50'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1595138395a7d671.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58455,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 12:24:05',
            'created_by' => 8627,
            'created_at' => '2020-07-19 11:59:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58455,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 12:24:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58455,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-07-19 12:24:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1594974364c6933f.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58453,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:26:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_1594974391ad6a7f.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58453,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:26:30'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58453,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58453,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_6_1593667607144f63.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58453,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:26:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_15867101634ce07a.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58453,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1594973936ba1fe9.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58451,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:18:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_15949739565a86d7.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58451,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-17 14:19:15'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58451,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58451,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_6_1593667607144f63.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58451,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:26:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_15867101634ce07a.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58451,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1594919884397e55.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58449,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 23:18:03'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15949198960c6bf7.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58449,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 23:18:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58449,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58449,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_1_15949098009dc6f7.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58447,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 17,
            'process_datetime' => '2020-07-16 21:15:13',
            'created_by' => 8639,
            'created_at' => '2020-07-16 20:30:00'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1594878846b98b6f.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58445,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 22:48:44',
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:54:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58445,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 22:48:44',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58445,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 22:48:44',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1594878846b98b6f.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58443,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:54:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1594878858f25db5.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58443,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-16 11:54:17'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58443,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58443,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_15948420650a4bb6.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58441,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 01:53:35',
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:41:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15948420995110ab.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58441,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 01:53:35',
            'created_by' => 8627,
            'created_at' => '2020-07-16 01:41:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58441,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 01:53:35',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58441,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 189,
            'process_datetime' => '2020-07-16 01:53:35',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1594837253704a13.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58439,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-07-16 00:40:01',
            'created_by' => 8627,
            'created_at' => '2020-07-16 00:20:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15948372623cad32.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58439,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-07-16 00:40:01',
            'created_by' => 8627,
            'created_at' => '2020-07-16 00:21:02'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58439,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-07-16 00:40:01',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58439,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-07-16 00:40:01',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1594815045dfd6bb.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58437,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-15 18:10:45'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1594815069ac4735.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58437,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-15 18:11:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58437,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58437,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_1594809744348e71.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58435,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-15 17:01:31',
            'created_by' => 8639,
            'created_at' => '2020-07-15 16:42:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58433,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 23:14:21',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58433,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 23:14:21',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58433,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 23:14:21',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58433,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 23:14:21',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58433,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 23:14:21',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58431,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-13 21:07:20',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58431,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-13 21:07:20',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58431,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-13 21:07:20',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58431,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-13 21:07:20',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58431,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-13 21:07:20',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1594644333042450.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:45:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159464433936b5bc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:45:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_20_15946443432ef233.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 20,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:45:42'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58429,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-07-14 09:58:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_15946428020dc1a5.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:20:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1594642807cb0508.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:20:07'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_20_15946428124c4bc9.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 20,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-07-13 18:20:11'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58427,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-13 18:32:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159456406875d4e0.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58425,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 296,
            'process_datetime' => '2020-07-12 20:41:08',
            'created_by' => 8627,
            'created_at' => '2020-07-12 20:27:47'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58425,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-12 20:41:08',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58425,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 296,
            'process_datetime' => '2020-07-12 20:41:08',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58425,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 296,
            'process_datetime' => '2020-07-12 20:41:08',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159455642691c307.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58423,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-12 18:45:04',
            'created_by' => 8627,
            'created_at' => '2020-07-12 18:20:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58423,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-12 18:45:04',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1594312747132d7d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58421,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-07-09 23:23:58',
            'created_by' => 8627,
            'created_at' => '2020-07-09 22:39:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1594312763400de6.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58421,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-07-09 23:23:58',
            'created_by' => 8627,
            'created_at' => '2020-07-09 22:39:23'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58421,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-07-09 23:23:58',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58421,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-07-09 23:23:58',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58421,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-07-09 23:23:58',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_159430227321f5c7.JPG',
            'content_type' => 'image/jpeg',
            'extension' => 'JPG',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58419,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-09 19:44:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58419,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58419,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15936676574adb62.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58419,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:37'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15936676549311fe.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58419,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_1593667646064066.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58419,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58417,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-09 17:50:55',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58417,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-09 17:50:55',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58417,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-09 17:50:55',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_57_15942735464b6804.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58417,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-09 17:50:55',
            'created_by' => 8627,
            'created_at' => '2020-07-09 11:45:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159421001012d6ca.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58415,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-08 18:06:49'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58415,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58415,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58415,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1594209545a855ba.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58413,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-08 17:59:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58413,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58413,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58413,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_6_1593667607144f63.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:26:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15936676574adb62.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:37'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_1593667646064066.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_1593667636d62751.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15936676549311fe.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_25_1593667602703d86.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58411,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:26:42'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15941881360fbafb.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58409,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-08 12:37:28',
            'created_by' => 8627,
            'created_at' => '2020-07-08 12:02:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58409,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-08 12:37:28',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58409,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-08 12:37:28',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58409,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-07-08 12:37:28',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1594186552d0deab.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58407,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-08 11:42:11',
            'created_by' => 8627,
            'created_at' => '2020-07-08 11:35:52'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58407,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-08 11:42:11',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58407,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-08 11:42:11',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58407,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-08 11:42:11',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1594121845194959.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58405,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-07-08 11:29:04',
            'created_by' => 8627,
            'created_at' => '2020-07-07 17:37:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58405,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-07-08 11:29:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58405,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-07-08 11:29:04',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58405,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-07-08 11:29:04',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159412076803b4b7.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58403,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-07 17:19:27'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58403,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58403,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58403,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159410117085f22c.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58401,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-07-07 11:52:50'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58401,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58401,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58401,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1594095688076c9f.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:21:27'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1594095694bd101f.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:21:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_14_15940957026306a6.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:21:42'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_22_1594095708aa09cd.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-07-07 10:21:47'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58399,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-07 11:15:43',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58397,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-05 17:45:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58397,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-05 17:45:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58397,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-05 17:45:39',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58397,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-05 17:45:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58397,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-05 17:45:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_15939474084da5f0.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58395,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-06 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-07-05 17:10:07'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58395,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-06 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58395,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-06 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58395,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-06 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58395,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-06 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58395,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 210,
            'process_datetime' => '2020-07-06 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58393,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 50,
            'process_datetime' => '2020-07-05 11:18:13',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58393,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 50,
            'process_datetime' => '2020-07-05 11:18:13',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58393,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 50,
            'process_datetime' => '2020-07-05 11:18:13',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58393,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-05 11:18:13',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58393,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 50,
            'process_datetime' => '2020-07-05 11:18:13',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58391,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58391,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58391,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58391,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58391,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_14_15936858539394d8.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 16:30:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_22_1593685880b5fc27.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 16:31:20'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1593685921436e47.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 16:32:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15936676574adb62.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:37'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15936676549311fe.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_1593667646064066.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58389,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_14_15936858539394d8.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 16:30:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_22_1593685880b5fc27.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 16:31:20'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1593685921436e47.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 16:32:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_57_15936676430dc484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_15936676328a743d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15936676574adb62.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:37'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15936676549311fe.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_1593667646064066.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58387,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-07-02 11:27:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15936672099097f5.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58385,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-02 12:04:23',
            'created_by' => 8627,
            'created_at' => '2020-07-02 11:20:09'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58385,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-02 12:04:23',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58385,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-02 12:04:23',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1593495357bcfafa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58385,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-07-02 12:04:23',
            'created_by' => 8627,
            'created_at' => '2020-06-30 11:35:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1593428874be8484.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58383,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 290,
            'process_datetime' => '2020-06-29 17:29:52',
            'created_by' => 8627,
            'created_at' => '2020-06-29 17:07:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58383,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 290,
            'process_datetime' => '2020-06-29 17:29:52',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58383,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 290,
            'process_datetime' => '2020-06-29 17:29:52',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1593406826a16d94.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58381,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-29 11:04:05',
            'created_by' => 8627,
            'created_at' => '2020-06-29 11:00:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58381,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-29 11:04:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58381,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-29 11:04:05',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1593406061b79203.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58379,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-29 11:24:47',
            'created_by' => 8627,
            'created_at' => '2020-06-29 10:47:40'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58379,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-29 11:24:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58379,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-29 11:24:47',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_1593403039d8d81c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58377,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-06-29 14:15:42',
            'created_by' => 8639,
            'created_at' => '2020-06-29 09:57:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58375,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 290,
            'process_datetime' => '2020-06-29 11:11:37',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58375,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 290,
            'process_datetime' => '2020-06-29 11:11:37',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15930669621c734d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58375,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 290,
            'process_datetime' => '2020-06-29 11:11:37',
            'created_by' => 8627,
            'created_at' => '2020-06-25 12:36:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15928261749abb49.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58373,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-22 17:42:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58373,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58373,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1592816659312523.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-06-22 15:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_14_1592816691124373.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-06-22 15:04:50'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_22_159281673810d5b5.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-06-22 15:05:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_1586710104a7c0e4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:48:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_158671020590a8ba.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_1586710255281067.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:55'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15867101843c4f1d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58371,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1592802008c1bcdb.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58369,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-22 11:00:07'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58369,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58369,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_1592756553d383f5.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58367,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8639,
            'created_at' => '2020-06-21 22:22:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_1_159275603242db61.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58365,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8639,
            'created_at' => '2020-06-21 22:13:52'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_15927560602e6d3e.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58365,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8639,
            'created_at' => '2020-06-21 22:14:20'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_1592302588755876.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58363,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-16 16:54:07',
            'created_by' => 8639,
            'created_at' => '2020-06-16 16:16:27'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_159228660422de37.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58361,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:20:24',
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:50:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1592286638afa257.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58361,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:20:24',
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:50:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58361,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:20:24',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58361,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:20:24',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1592285731048a15.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58359,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:17:00',
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:35:31'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1592285752fefbac.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58359,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:17:00',
            'created_by' => 8627,
            'created_at' => '2020-06-16 11:35:52'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58359,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:17:00',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58359,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 12:17:00',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1592198905425bb8.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58357,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 11:24:46',
            'created_by' => 8627,
            'created_at' => '2020-06-15 11:28:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15921989529e02bd.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58357,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 11:24:46',
            'created_by' => 8627,
            'created_at' => '2020-06-15 11:29:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58357,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 11:24:46',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58357,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 292,
            'process_datetime' => '2020-06-16 11:24:46',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_159219697399d1df.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:56:13'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159219699427ccaf.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:56:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_20_1592197035889d67.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 20,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:57:15'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1592197087856dfa.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:58:07'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58355,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:04:08',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1592196850256592.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58353,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:13:36',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:54:10'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_159219687278d968.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58353,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:13:36',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:54:31'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58353,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:13:36',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58353,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:13:36',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58353,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:13:36',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58353,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-15 11:13:36',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1592194578328bbd.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58351,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-17 16:28:24',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:16:17'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_159219473135ee64.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58351,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-17 16:28:24',
            'created_by' => 8627,
            'created_at' => '2020-06-15 10:18:50'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58351,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-17 16:28:24',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58351,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-17 16:28:24',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_14_159211411216fe9a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-06-14 11:55:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_22_15921141404d6fa8.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-06-14 11:55:40'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1592114251aeceac.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-06-14 11:57:30'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_1586710104a7c0e4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:48:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_1586710255281067.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:55'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_158671020590a8ba.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15867101843c4f1d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58349,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_15921015780fa78f.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58347,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 244,
            'process_datetime' => '2020-06-14 11:34:21',
            'created_by' => 8627,
            'created_at' => '2020-06-14 08:26:17'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1592101600ef4093.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58347,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 244,
            'process_datetime' => '2020-06-14 11:34:21',
            'created_by' => 8627,
            'created_at' => '2020-06-14 08:26:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58347,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 244,
            'process_datetime' => '2020-06-14 11:34:21',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58347,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-06-14 11:34:21',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_15918796774e268e.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58345,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-06-11 18:51:07',
            'created_by' => 8627,
            'created_at' => '2020-06-11 18:47:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1591879706fd2155.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58345,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-06-11 18:51:07',
            'created_by' => 8627,
            'created_at' => '2020-06-11 18:48:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58345,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-06-11 18:51:07',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58345,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 244,
            'process_datetime' => '2020-06-11 18:51:07',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58343,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:39:22',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58343,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:39:22',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58343,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:39:22',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58343,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:39:22',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58341,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:16:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58341,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:16:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58341,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:16:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58341,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:16:47',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58339,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:15:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58339,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:15:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58339,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:15:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58339,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-11 18:15:05',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8639_12_1591860250acd892.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8639,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58337,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:09:21',
            'created_by' => 8639,
            'created_at' => '2020-06-11 13:24:09'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1591855036f56639.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58335,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-06-11 12:34:53',
            'created_by' => 8627,
            'created_at' => '2020-06-11 11:57:15'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1591855090791958.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58335,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-06-11 12:34:53',
            'created_by' => 8627,
            'created_at' => '2020-06-11 11:58:10'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58335,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-06-11 12:34:53',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58335,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-06-11 12:34:53',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_17_159185686564931c.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58335,
            'config_attachment_id' => 17,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 38,
            'process_datetime' => '2020-06-11 12:34:53',
            'created_by' => 8627,
            'created_at' => '2020-06-11 12:27:45'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1591779235773a02.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58333,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-10 14:53:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_159177925696e208.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58333,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-10 14:54:15'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58333,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58333,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_159168068466247b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58331,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:31:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_159168071458a58b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58331,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:31:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58331,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58331,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1591680149402922.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58329,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-06-09 11:52:04',
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:22:28'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_1591680197e9b680.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58329,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-06-09 11:52:04',
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:23:17'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58329,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-06-09 11:52:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58329,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 189,
            'process_datetime' => '2020-06-09 11:52:04',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15916792025d2811.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58327,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-09 11:06:42'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58327,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58327,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58325,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:11',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58325,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:11',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58325,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:11',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58325,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:11',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58323,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58323,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58323,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58323,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-08 11:17:39',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58321,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58321,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58321,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58321,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_11_1591506552a50f69.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58319,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-07 11:27:43',
            'created_by' => 8627,
            'created_at' => '2020-06-07 11:09:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_18_15915066690720a0.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58319,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-07 11:27:43',
            'created_by' => 8627,
            'created_at' => '2020-06-07 11:11:09'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58319,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-07 11:27:43',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58319,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6677,
            'process_datetime' => '2020-06-07 11:27:43',
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_15915049696450f3.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58317,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-07 10:42:49'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1591505000557c6f.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58317,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-07 10:43:20'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_6_1590998396dcdd4b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58317,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1590998375e9373b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58317,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_23_1590998438a5cb30.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58317,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 14:00:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_25_1590998354409073.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58317,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-06-01 13:59:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58315,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-01 14:17:44',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58313,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-06-01 12:12:20',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15906484481a42ed.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58311,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-06-29 13:58:33',
            'created_by' => 8627,
            'created_at' => '2020-05-28 12:47:28'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58311,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 1814,
            'process_datetime' => '2020-06-29 13:58:33',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58311,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 1814,
            'process_datetime' => '2020-06-29 13:58:33',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1590556943cdcead.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:22:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_15905569641abf89.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:22:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1590557037e7ffa3.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:23:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_159055710553c421.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:25:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_14_15905571260a9c90.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:25:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_22_1590557147442fa2.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-27 11:25:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58309,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 73,
            'process_datetime' => '2020-06-11 16:11:54',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_6_15900385851c06e9.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58307,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 12:03:42',
            'created_by' => 8635,
            'created_at' => '2020-05-21 11:23:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_4_1590038606bdcda9.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58307,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 12:03:42',
            'created_by' => 8635,
            'created_at' => '2020-05-21 11:23:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_2_1590038628de8adc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58307,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 12:03:42',
            'created_by' => 8635,
            'created_at' => '2020-05-21 11:23:48'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_20_159003864933ea27.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58307,
            'config_attachment_id' => 20,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 12:03:42',
            'created_by' => 8635,
            'created_at' => '2020-05-21 11:24:09'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_57_1589970215c88880.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58307,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 12:03:42',
            'created_by' => 8635,
            'created_at' => '2020-05-20 16:23:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_6_15900366431fd385.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58305,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 11:34:57',
            'created_by' => 8635,
            'created_at' => '2020-05-21 10:50:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_4_15900366641e88aa.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58305,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 11:34:57',
            'created_by' => 8635,
            'created_at' => '2020-05-21 10:51:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_2_159003668777f29c.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58305,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 11:34:57',
            'created_by' => 8635,
            'created_at' => '2020-05-21 10:51:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8635_57_1589970215c88880.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8635,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58305,
            'config_attachment_id' => 57,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-21 11:34:57',
            'created_by' => 8635,
            'created_at' => '2020-05-20 16:23:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_15899563285738dc.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:32:07'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1589956349dc5650.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:32:28'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_22_1589956370817373.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:32:49'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1589956392eeb1bf.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:33:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_14_15899564157c094b.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:33:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58303,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-20 16:38:57',
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1589955404314eee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:16:44'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_15899554257ff77d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:17:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_15899554472b17f6.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:17:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_14_1589955521effb64.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:18:40'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_22_15899555427f0381.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:19:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58301,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1589954427547552.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:00:27'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_22_1589954565e2ded8.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:02:44'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_15899546041f0390.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:03:23'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_158995462516b5e9.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:03:44'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_14_15899546535ae893.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 12:04:13'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58299,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_2_1589953139ed7b2f.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 11:38:58'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_4_1589953195053437.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 11:39:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_12_1589953326547587.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 11:42:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_14_15899534477c07d8.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 11:44:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_22_1589953623f2ec5d.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 22,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-20 11:47:03'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_49_1589696039a576ee.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58297,
            'config_attachment_id' => 49,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 8627,
            'created_at' => '2020-05-17 12:13:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8633_23_158995114910925a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8633,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58295,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 17,
            'process_datetime' => '2020-05-20 12:22:44',
            'created_by' => 8633,
            'created_at' => '2020-05-20 11:05:49'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8633_25_15899506431c661b.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8633,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58295,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 17,
            'process_datetime' => '2020-05-20 12:22:44',
            'created_by' => 8633,
            'created_at' => '2020-05-20 10:57:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_6_1589774382600a15.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 6,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-05-18 09:59:41'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_20_1589774403df0c8c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 20,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-05-18 10:00:02'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_158977442658fbea.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-05-18 10:00:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_158671020590a8ba.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_25_1586709961d4f616.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 25,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:46:00'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15867101843c4f1d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_1586711153409e65.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-04-12 23:05:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_1586710255281067.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58293,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 17,
            'process_datetime' => '2020-05-18 10:38:36',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:55'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_48_1589264475469694.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58291,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-12 12:31:00',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:21:14'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '8627_1_1589263886176184.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 8627,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58291,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-05-12 12:31:00',
            'created_by' => 8627,
            'created_at' => '2020-05-12 12:11:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_14_15872792252ce060.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58289,
            'config_attachment_id' => 14,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-04-20 15:58:41',
            'created_by' => 22,
            'created_at' => '2020-04-19 12:53:44'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_31_158727927457f39c.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58289,
            'config_attachment_id' => 31,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-04-20 15:58:41',
            'created_by' => 22,
            'created_at' => '2020-04-19 12:54:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_158671020590a8ba.png',
            'content_type' => 'image/png',
            'extension' => 'png',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58289,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-04-20 15:58:41',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_1586710255281067.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58289,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-04-20 15:58:41',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:50:55'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15867101843c4f1d.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58289,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 1,
            'processed_by' => 6936,
            'process_datetime' => '2020-04-20 15:58:41',
            'created_by' => 22,
            'created_at' => '2020-04-12 22:49:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_15843431343a9de6.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58287,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-16 16:58:51',
            'created_by' => 22,
            'created_at' => '2020-03-16 13:18:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58287,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-16 16:58:51',
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58287,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-16 16:58:51',
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58287,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 1,
            'is_valid' => 0,
            'processed_by' => 6936,
            'process_datetime' => '2020-06-16 16:58:51',
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58286,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58286,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58286,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58286,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58286,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1583894033af5c4b.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58284,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-11 08:33:52'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58284,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58284,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58284,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1583748559b7a848.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58283,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-09 16:09:19'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58283,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58283,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58283,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_158372790467efde.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58282,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-09 10:25:04'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58282,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58282,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58282,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58281,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58281,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58281,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58281,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58281,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58280,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58280,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58280,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58280,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58280,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58279,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58279,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58279,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58279,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58279,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58278,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58278,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58278,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58278,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58278,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58277,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58277,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58277,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58277,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58277,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1583228913b2eeb7.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58276,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-03 15:48:32'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_1583228934766d85.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58276,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-03 15:48:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58276,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_1582095879e2b498.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58276,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1583220096cf79ae.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58275,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-03 13:21:35'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_1583220117e746ec.PNG',
            'content_type' => 'image/png',
            'extension' => 'PNG',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58275,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-03 13:21:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58275,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_1582095879e2b498.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58275,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58274,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58274,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58274,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58274,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58274,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58273,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58273,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58273,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58273,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58273,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1583037564ffe10e.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58272,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:39:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_1583037593bcf2f6.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58272,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:39:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58272,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_1582095879e2b498.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58272,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_11_1583037564ffe10e.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58271,
            'config_attachment_id' => 11,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:39:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_18_1583037593bcf2f6.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58271,
            'config_attachment_id' => 18,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:39:53'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58271,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_27_1582095879e2b498.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58271,
            'config_attachment_id' => 27,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_12_1583036431a4d933.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58270,
            'config_attachment_id' => 12,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-03-01 10:20:31'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58270,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58270,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58270,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58269,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58269,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58269,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58269,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58269,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_1_158209572547e371.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58268,
            'config_attachment_id' => 1,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:05'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_4_15820958105301c4.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58268,
            'config_attachment_id' => 4,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:29'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_48_15820957463d2172.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58268,
            'config_attachment_id' => 48,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:02:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_23_15820958586baadc.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58268,
            'config_attachment_id' => 23,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:04:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '22_2_15820957887afc2a.jpg',
            'content_type' => 'image/jpeg',
            'extension' => 'jpg',
            'path' => 'files/uploads/attachments',
            'created_by' => 22,
            'created_at' => now()
        ]);
        DB::table('app_attachments')->insert([
            'application_id' => 58268,
            'config_attachment_id' => 2,
            'attachment_id' => $attachmentId,
            'is_processed' => 0,
            'is_valid' => null,
            'processed_by' => null,
            'process_datetime' => null,
            'created_by' => 22,
            'created_at' => '2020-02-19 13:03:08'
        ]);
    }
}
