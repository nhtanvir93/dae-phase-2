<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58313_92775466463446.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 18,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58313,
            'title' => 'jj',
            'attachment_id' => $attachmentId,
            'user_id' => 18,
            'created_by' => 18,
            'created_at' => '2020-06-01 11:59:01'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58313_92775552475121.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 14,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58313,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 14,
            'created_by' => 14,
            'created_at' => '2020-06-01 12:23:36'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58313_92775584838836.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 10,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58313,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 10,
            'created_by' => 10,
            'created_at' => '2020-06-01 12:32:51'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58315_92779725523780.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 14,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58315,
            'title' => 'add',
            'attachment_id' => $attachmentId,
            'user_id' => 14,
            'created_by' => 14,
            'created_at' => '2020-06-01 17:06:51'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58315_92779741851980.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 13,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58315,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 13,
            'created_by' => 13,
            'created_at' => '2020-06-01 17:11:32'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58315_92779756314100.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 13,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58315,
            'title' => ' ',
            'attachment_id' => $attachmentId,
            'user_id' => 13,
            'created_by' => 13,
            'created_at' => '2020-06-01 17:15:40'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58319_92815153768982.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 6677,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58319,
            'title' => 'pre',
            'attachment_id' => $attachmentId,
            'user_id' => 6677,
            'created_by' => 6677,
            'created_at' => '2020-06-07 11:32:57'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841182105769.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 74,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'scru',
            'attachment_id' => $attachmentId,
            'user_id' => 74,
            'created_by' => 74,
            'created_at' => '2020-06-09 11:42:40'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841202287603.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 189,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'pre2',
            'attachment_id' => $attachmentId,
            'user_id' => 189,
            'created_by' => 189,
            'created_at' => '2020-06-09 11:48:26'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841213720087.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 189,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'pre',
            'attachment_id' => $attachmentId,
            'user_id' => 189,
            'created_by' => 189,
            'created_at' => '2020-06-09 11:51:43'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841223344372.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 127,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 127,
            'created_by' => 127,
            'created_at' => '2020-06-09 11:54:28'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841233201973.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 25,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'dd',
            'attachment_id' => $attachmentId,
            'user_id' => 25,
            'created_by' => 25,
            'created_at' => '2020-06-09 11:57:17'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841243992838.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 26,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'ins',
            'attachment_id' => $attachmentId,
            'user_id' => 26,
            'created_by' => 26,
            'created_at' => '2020-06-09 12:00:22'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841262308144.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'jj',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-06-09 12:05:36'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841263533053.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'jj',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-06-09 12:05:57'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58329_92841279690186.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58329,
            'title' => 'lab',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-06-09 12:10:33'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58335_92861006854155.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 73,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58335,
            'title' => 'dd',
            'attachment_id' => $attachmentId,
            'user_id' => 73,
            'created_by' => 73,
            'created_at' => '2020-06-11 12:38:13'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58335_92861029313130.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58335,
            'title' => 'lab',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-06-11 12:44:38'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58347_92894847537924.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 244,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58347,
            'title' => 'k',
            'attachment_id' => $attachmentId,
            'user_id' => 244,
            'created_by' => 244,
            'created_at' => '2020-06-14 10:48:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58347_92894860665999.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 245,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58347,
            'title' => 'dd',
            'attachment_id' => $attachmentId,
            'user_id' => 245,
            'created_by' => 245,
            'created_at' => '2020-06-14 10:51:56'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58347_92895379604217.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 244,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58347,
            'title' => 'cc',
            'attachment_id' => $attachmentId,
            'user_id' => 244,
            'created_by' => 244,
            'created_at' => '2020-06-14 13:20:10'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58347_92895387014286.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 244,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58347,
            'title' => 'xx',
            'attachment_id' => $attachmentId,
            'user_id' => 244,
            'created_by' => 244,
            'created_at' => '2020-06-14 13:22:18'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58351_92906215491972.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58351,
            'title' => 'pre',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-15 10:36:12'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58351_92906217767661.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58351,
            'title' => 'pre',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-15 10:36:51'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58351_92906231071689.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58351,
            'title' => 'for',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-15 10:40:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58351_92906250969380.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58351,
            'title' => 'gg',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-15 10:46:20'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58357_92920956603904.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58357,
            'title' => 'pre-scrutny',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-16 11:17:52'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58357_92920979538205.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58357,
            'title' => 'ok1',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-16 11:24:25'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_58375_93011145094750.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 290,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58375,
            'title' => 'pre',
            'attachment_id' => $attachmentId,
            'user_id' => 290,
            'created_by' => 290,
            'created_at' => '2020-06-28 16:04:34'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_58383_93029251013244.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 292,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58383,
            'title' => 's',
            'attachment_id' => $attachmentId,
            'user_id' => 292,
            'created_by' => 292,
            'created_at' => '2020-06-29 17:34:28'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58393_93074149180212.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 49,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58393,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 49,
            'created_by' => 49,
            'created_at' => '2020-07-05 11:21:24'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58395_93082281980175.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 49,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58395,
            'title' => 'yy',
            'attachment_id' => $attachmentId,
            'user_id' => 49,
            'created_by' => 49,
            'created_at' => '2020-07-06 10:52:44'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_58405_93104752121255.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 73,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58405,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 73,
            'created_by' => 73,
            'created_at' => '2020-07-07 17:56:11'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_58417_93132672537569.pdf',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'pdf',
            'path' => 'files/uploads/reports',
            'created_by' => 6936,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58417,
            'title' => 'rr',
            'attachment_id' => $attachmentId,
            'user_id' => 6936,
            'created_by' => 6936,
            'created_at' => '2020-07-09 11:44:16'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '1_58417_93133965597864.pdf',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'pdf',
            'path' => 'files/uploads/reports',
            'created_by' => 24,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58417,
            'title' => 'er',
            'attachment_id' => $attachmentId,
            'user_id' => 24,
            'created_by' => 24,
            'created_at' => '2020-07-09 17:53:11'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '3_58431_93177125502888.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 17,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58431,
            'title' => '2',
            'attachment_id' => $attachmentId,
            'user_id' => 17,
            'created_by' => 17,
            'created_at' => '2020-07-13 20:57:27'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58439_93200771425986.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 74,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58439,
            'title' => 'scru',
            'attachment_id' => $attachmentId,
            'user_id' => 74,
            'created_by' => 74,
            'created_at' => '2020-07-16 00:42:54'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58439_93200823612013.pdf',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'pdf',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58439,
            'title' => 'fff',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-07-16 00:57:46'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58441_93204316015327.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58441,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-07-16 02:24:06'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58445_93215021025255.png',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'png',
            'path' => 'files/uploads/reports',
            'created_by' => 75,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58445,
            'title' => 'h',
            'attachment_id' => $attachmentId,
            'user_id' => 75,
            'created_by' => 75,
            'created_at' => '2020-07-16 22:57:39'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58455_93243928983885.jpg',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'jpg',
            'path' => 'files/uploads/reports',
            'created_by' => 8645,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58455,
            'title' => 'ok',
            'attachment_id' => $attachmentId,
            'user_id' => 8645,
            'created_by' => 8645,
            'created_at' => '2020-07-19 12:32:27'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58457_93248436417703.jpg',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'jpg',
            'path' => 'files/uploads/reports',
            'created_by' => 39,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58457,
            'title' => 'yy',
            'attachment_id' => $attachmentId,
            'user_id' => 39,
            'created_by' => 39,
            'created_at' => '2020-07-19 18:47:59'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58457_93248444250941.jpg',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'jpg',
            'path' => 'files/uploads/reports',
            'created_by' => 39,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58457,
            'title' => 'ss',
            'attachment_id' => $attachmentId,
            'user_id' => 39,
            'created_by' => 39,
            'created_at' => '2020-07-19 18:50:13'
        ]);

        $attachmentId = DB::table('attachments')->insertGetId([
            'name' => '2_58475_93285807274975.jpg',
            'content_type' => 'text/html; charset=UTF-8',
            'extension' => 'jpg',
            'path' => 'files/uploads/reports',
            'created_by' => 296,
            'created_at' => now()
        ]);
        DB::table('app_reports')->insert([
            'application_id' => 58475,
            'title' => 'qq',
            'attachment_id' => $attachmentId,
            'user_id' => 296,
            'created_by' => 296,
            'created_at' => '2020-07-21 11:55:41'
        ]);
    }
}
