<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'id' => 5,
            'name' => '',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 06:51:00',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => '2021-05-29 13:43:36'
        ]);

        DB::table('menus')->insert([
            'id' => 6,
            'name' => 'User',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 13:44:52',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 7,
            'name' => 'Create DAE User',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 6,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 13:45:09',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => '2021-05-29 13:46:09'
        ]);

        DB::table('menus')->insert([
            'id' => 8,
            'name' => 'User List',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 6,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 13:45:33',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => '2021-05-29 13:46:04'
        ]);

        DB::table('menus')->insert([
            'id' => 9,
            'name' => 'Create DAE User',
            'short_name' => NULL,
            'uri' => 'create-dae-user',
            'position' => NULL,
            'parent_id' => 6,
            'controller' => 'UserController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 13:47:14',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 10,
            'name' => 'User List',
            'short_name' => NULL,
            'uri' => 'user-list',
            'position' => NULL,
            'parent_id' => 6,
            'controller' => 'UserController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 13:48:36',
            'updated_by' => 1,
            'updated_at' => '2021-05-29 13:49:32',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 11,
            'name' => 'Proxy User Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 6,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:39:35',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 12,
            'name' => 'Proxy User List',
            'short_name' => NULL,
            'uri' => 'proxy-user-list',
            'position' => NULL,
            'parent_id' => 11,
            'controller' => 'UserController',
            'method' => 'getUsersToUnsetProxy',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:41:38',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 13,
            'name' => 'Set Proxy User',
            'short_name' => NULL,
            'uri' => 'set-proxy-user',
            'position' => NULL,
            'parent_id' => 11,
            'controller' => 'ProxyUserLogController',
            'method' => 'setUser',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:46:01',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 14,
            'name' => 'Application',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:46:31',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 15,
            'name' => 'Application List',
            'short_name' => NULL,
            'uri' => 'application-list',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'ApplicationController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:47:56',
            'updated_by' => 1,
            'updated_at' => '2021-06-08 03:37:42',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 16,
            'name' => 'Transfer Application',
            'short_name' => NULL,
            'uri' => 'application-transfer',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'ApplicationController',
            'method' => 'transfer',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:52:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 17,
            'name' => 'C&F Assignment List',
            'short_name' => NULL,
            'uri' => 'cnf-assignment-list',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'CnfIpAssignmentController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:53:25',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 18,
            'name' => 'Products',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:53:50',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 19,
            'name' => 'Product',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 18,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:54:40',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 20,
            'name' => 'Product Type',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 18,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:55:02',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 21,
            'name' => 'Product Type List',
            'short_name' => NULL,
            'uri' => 'product-types',
            'position' => NULL,
            'parent_id' => 20,
            'controller' => 'ProductTypeController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:57:43',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 22,
            'name' => 'Add Product Type',
            'short_name' => NULL,
            'uri' => 'add-product-type',
            'position' => NULL,
            'parent_id' => 20,
            'controller' => 'ProductTypeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 15:58:42',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 23,
            'name' => 'Add Product',
            'short_name' => NULL,
            'uri' => 'add-product',
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 16:09:21',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 24,
            'name' => 'Product List',
            'short_name' => NULL,
            'uri' => 'products',
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-29 16:11:06',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 25,
            'name' => 'Application Process Flow Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:49:11',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 26,
            'name' => 'Process Stage Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 25,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:49:32',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 27,
            'name' => 'Process Task Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 25,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:49:57',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 28,
            'name' => 'Process Task Sorting',
            'short_name' => NULL,
            'uri' => 'process-task-sorting',
            'position' => NULL,
            'parent_id' => 25,
            'controller' => 'ProcessTaskController',
            'method' => 'sortProcessTasks',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:51:37',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 29,
            'name' => 'Process Task Field Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 25,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:52:22',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 30,
            'name' => 'Process Task Field Sorting',
            'short_name' => NULL,
            'uri' => 'process-task-field-sorting',
            'position' => NULL,
            'parent_id' => 25,
            'controller' => 'TaskFieldController',
            'method' => 'sortTaskFields',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:53:13',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 31,
            'name' => 'Organization Process Flow',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 25,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:56:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 32,
            'name' => 'Process Stage List',
            'short_name' => NULL,
            'uri' => 'process-stage-list',
            'position' => NULL,
            'parent_id' => 26,
            'controller' => 'StageController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:58:18',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 33,
            'name' => 'Add Process Stage',
            'short_name' => NULL,
            'uri' => 'add-process-stage',
            'position' => NULL,
            'parent_id' => 26,
            'controller' => 'StageController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 01:59:06',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 34,
            'name' => 'Process Task List',
            'short_name' => NULL,
            'uri' => 'process-task-list',
            'position' => NULL,
            'parent_id' => 27,
            'controller' => 'ProcessTaskController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:00:27',
            'updated_by' => 1,
            'updated_at' => '2021-05-30 02:03:29',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 35,
            'name' => 'Add Process Task',
            'short_name' => NULL,
            'uri' => 'add-process-task',
            'position' => NULL,
            'parent_id' => 27,
            'controller' => 'ProcessTaskController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:01:26',
            'updated_by' => 1,
            'updated_at' => '2021-05-30 02:03:03',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 36,
            'name' => 'Process Task Field List',
            'short_name' => NULL,
            'uri' => 'process-task-field-list',
            'position' => NULL,
            'parent_id' => 29,
            'controller' => 'TaskFieldController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:05:03',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 37,
            'name' => 'Add Process Task Field',
            'short_name' => NULL,
            'uri' => 'add-process-task-field',
            'position' => NULL,
            'parent_id' => 29,
            'controller' => 'TaskFieldController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:05:47',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 38,
            'name' => 'Organization Process Flow List',
            'short_name' => NULL,
            'uri' => 'org-process-flow-list',
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:07:35',
            'updated_by' => 1,
            'updated_at' => '2021-05-30 02:08:14',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 39,
            'name' => 'Add Organization Process Flow',
            'short_name' => NULL,
            'uri' => 'add-org-process-flow',
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:09:05',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 40,
            'name' => 'Report',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:12:58',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 41,
            'name' => 'Collection Summary',
            'short_name' => NULL,
            'uri' => 'collection-summary',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getCollectionSummary',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:13:35',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 43,
            'name' => 'Application Product Report',
            'short_name' => NULL,
            'uri' => 'application-products',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getProductWiseApplications',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:16:39',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 44,
            'name' => 'User Log',
            'short_name' => NULL,
            'uri' => 'user-log',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getUserLogs',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:17:35',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 45,
            'name' => 'Certificate',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:17:54',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 46,
            'name' => 'Manual Certificate',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 45,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:18:20',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 47,
            'name' => 'Manual Certificate List',
            'short_name' => NULL,
            'uri' => 'manual-certificate-list',
            'position' => NULL,
            'parent_id' => 46,
            'controller' => 'CertificateController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:27:37',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 48,
            'name' => 'Add Manual Certificate',
            'short_name' => NULL,
            'uri' => 'add-manual-certificate',
            'position' => NULL,
            'parent_id' => 46,
            'controller' => 'CertificateController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:28:33',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 49,
            'name' => 'Communication',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:29:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 50,
            'name' => 'Notification',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 49,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:29:53',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => '2021-05-30 02:40:29'
        ]);

        DB::table('menus')->insert([
            'id' => 51,
            'name' => 'Notice Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 49,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:30:15',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 52,
            'name' => 'Chatting Interface',
            'short_name' => NULL,
            'uri' => 'chat',
            'position' => NULL,
            'parent_id' => 49,
            'controller' => 'ChatController',
            'method' => 'broadcastMessage',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:31:11',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 53,
            'name' => 'Notification List',
            'short_name' => NULL,
            'uri' => 'notification-list',
            'position' => NULL,
            'parent_id' => 50,
            'controller' => 'NotificationController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:37:19',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => '2021-05-30 02:39:56'
        ]);

        DB::table('menus')->insert([
            'id' => 54,
            'name' => 'Notice List',
            'short_name' => NULL,
            'uri' => 'notice-list',
            'position' => NULL,
            'parent_id' => 51,
            'controller' => 'NoticeController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:41:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 55,
            'name' => 'Add Notice',
            'short_name' => NULL,
            'uri' => 'add-notice',
            'position' => NULL,
            'parent_id' => 51,
            'controller' => 'NoticeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:42:01',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 56,
            'name' => 'Sets',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:44:32',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 57,
            'name' => 'Branch Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:44:50',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 58,
            'name' => 'Branch List',
            'short_name' => NULL,
            'uri' => 'branch-list',
            'position' => NULL,
            'parent_id' => 57,
            'controller' => 'BankBranchController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:45:22',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 59,
            'name' => 'Add Branch',
            'short_name' => NULL,
            'uri' => 'add-branch',
            'position' => NULL,
            'parent_id' => 57,
            'controller' => 'BankBranchController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:45:57',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 60,
            'name' => 'Fee Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:47:00',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 61,
            'name' => 'Product Fee List',
            'short_name' => NULL,
            'uri' => 'product-fees',
            'position' => NULL,
            'parent_id' => 60,
            'controller' => 'FeeSetupController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:47:45',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 62,
            'name' => 'Add Product Fee',
            'short_name' => NULL,
            'uri' => 'add-fee',
            'position' => NULL,
            'parent_id' => 60,
            'controller' => 'FeeSetupController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:48:42',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 63,
            'name' => 'Organization Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:50:21',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 64,
            'name' => 'Organization List',
            'short_name' => NULL,
            'uri' => 'organization-list',
            'position' => NULL,
            'parent_id' => 63,
            'controller' => 'OrganizationController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:50:58',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 65,
            'name' => 'Add Organization',
            'short_name' => NULL,
            'uri' => 'add-organization',
            'position' => NULL,
            'parent_id' => 63,
            'controller' => 'OrganizationController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 02:51:34',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 66,
            'name' => 'Designation Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:18:47',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 67,
            'name' => 'Designation List',
            'short_name' => NULL,
            'uri' => 'designation-list',
            'position' => NULL,
            'parent_id' => 66,
            'controller' => 'DesignationController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:19:59',
            'updated_by' => 1,
            'updated_at' => '2021-05-30 04:22:39',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 68,
            'name' => 'Add Designation',
            'short_name' => NULL,
            'uri' => 'add-designation',
            'position' => NULL,
            'parent_id' => 66,
            'controller' => 'DesignationController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:20:42',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 69,
            'name' => 'Designation Level Sorting',
            'short_name' => NULL,
            'uri' => 'designation-level-sorting',
            'position' => NULL,
            'parent_id' => 66,
            'controller' => 'DesignationController',
            'method' => 'sortDesignations',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:21:39',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 70,
            'name' => 'App Type',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:24:06',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 71,
            'name' => 'App Type List',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 70,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:24:23',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => '2021-05-30 04:25:31'
        ]);

        DB::table('menus')->insert([
            'id' => 72,
            'name' => 'App Type List',
            'short_name' => NULL,
            'uri' => 'app-type-list',
            'position' => NULL,
            'parent_id' => 70,
            'controller' => 'AppTypeController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:27:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 73,
            'name' => 'Add App Type',
            'short_name' => NULL,
            'uri' => 'add-app-type',
            'position' => NULL,
            'parent_id' => 70,
            'controller' => 'AppTypeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:28:22',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 74,
            'name' => 'Unit Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:30:01',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 75,
            'name' => 'Unit List',
            'short_name' => NULL,
            'uri' => 'unit-list',
            'position' => NULL,
            'parent_id' => 74,
            'controller' => 'UnitController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:30:51',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 76,
            'name' => 'Add Unit',
            'short_name' => NULL,
            'uri' => 'add-unit',
            'position' => NULL,
            'parent_id' => 74,
            'controller' => 'UnitController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:31:40',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 77,
            'name' => 'Role Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:32:06',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 78,
            'name' => 'Role List',
            'short_name' => NULL,
            'uri' => 'role-list',
            'position' => NULL,
            'parent_id' => 77,
            'controller' => 'RoleController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:32:40',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 79,
            'name' => 'Add Role',
            'short_name' => NULL,
            'uri' => 'add-role',
            'position' => NULL,
            'parent_id' => 77,
            'controller' => 'RoleController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:33:11',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 80,
            'name' => 'Port Type',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:34:41',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 81,
            'name' => 'Port Category',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:34:56',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 82,
            'name' => 'Port Type List',
            'short_name' => NULL,
            'uri' => 'port-type-list',
            'position' => NULL,
            'parent_id' => 80,
            'controller' => 'PortTypeController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-30 04:35:36',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 83,
            'name' => 'Add Port Type',
            'short_name' => NULL,
            'uri' => 'add-port-type',
            'position' => NULL,
            'parent_id' => 80,
            'controller' => 'PortTypeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 04:25:40',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 84,
            'name' => 'Port Category List',
            'short_name' => NULL,
            'uri' => 'port-category-list',
            'position' => NULL,
            'parent_id' => 81,
            'controller' => 'PortCategoryController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 04:26:38',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 85,
            'name' => 'Add Port Category',
            'short_name' => NULL,
            'uri' => 'add-port-category',
            'position' => NULL,
            'parent_id' => 81,
            'controller' => 'PortCategoryController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 04:27:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 86,
            'name' => 'Means of Transport',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 04:28:37',
            'updated_by' => 1,
            'updated_at' => '2021-05-31 23:36:11',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 87,
            'name' => 'Means of Transport List',
            'short_name' => NULL,
            'uri' => 'means-of-transport-list',
            'position' => NULL,
            'parent_id' => 86,
            'controller' => 'MeansofTransportController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 04:29:15',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 88,
            'name' => 'Add Means of Transport',
            'short_name' => NULL,
            'uri' => 'add-means-of-transport',
            'position' => NULL,
            'parent_id' => 86,
            'controller' => 'MeansofTransportController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 04:29:53',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 89,
            'name' => 'Bank Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:36:58',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 90,
            'name' => 'Bank List',
            'short_name' => NULL,
            'uri' => 'bank-list',
            'position' => NULL,
            'parent_id' => 89,
            'controller' => 'BankController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:37:44',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 91,
            'name' => 'Add Bank',
            'short_name' => NULL,
            'uri' => 'add-bank',
            'position' => NULL,
            'parent_id' => 89,
            'controller' => 'BankController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:38:15',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 92,
            'name' => 'Attachment Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:38:56',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 93,
            'name' => 'Attachment List',
            'short_name' => NULL,
            'uri' => 'attachment-list',
            'position' => NULL,
            'parent_id' => 92,
            'controller' => 'ConfigAttachmentController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:39:59',
            'updated_by' => 1,
            'updated_at' => '2021-05-31 23:51:12',
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 94,
            'name' => 'Add Attachment',
            'short_name' => NULL,
            'uri' => 'add-attachment',
            'position' => NULL,
            'parent_id' => 92,
            'controller' => 'ConfigAttachmentController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:40:57',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 95,
            'name' => 'Attachment Attribute',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 92,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:41:32',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 96,
            'name' => 'Attachment Attribute List',
            'short_name' => NULL,
            'uri' => 'attachment-attribute-list',
            'position' => NULL,
            'parent_id' => 95,
            'controller' => 'ConfigAttachmentAttributeController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:42:47',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 97,
            'name' => 'Add Attachment Attribute',
            'short_name' => NULL,
            'uri' => 'add-attachment-attribute',
            'position' => NULL,
            'parent_id' => 95,
            'controller' => 'ConfigAttachmentAttributeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:43:33',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 98,
            'name' => 'Position Sorting',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 92,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:44:31',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 99,
            'name' => 'App Type Wise Attachment Sorting',
            'short_name' => NULL,
            'uri' => 'app-type-attachment-sorting',
            'position' => NULL,
            'parent_id' => 98,
            'controller' => 'ConfigAppTypeAttachmentController',
            'method' => 'sortAppWiseAttachment',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:49:07',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 100,
            'name' => 'Attachment Attribute Sorting',
            'short_name' => NULL,
            'uri' => 'attachment-attribute-sorting',
            'position' => NULL,
            'parent_id' => 98,
            'controller' => 'ConfigAttachmentAttributeController',
            'method' => 'sortAttachmentAttributes',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:50:02',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 101,
            'name' => 'Variety Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:52:28',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 102,
            'name' => 'Variety List',
            'short_name' => NULL,
            'uri' => 'variety-list',
            'position' => NULL,
            'parent_id' => 101,
            'controller' => 'VarietyController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:53:02',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 103,
            'name' => 'Add Variety',
            'short_name' => NULL,
            'uri' => 'add-variety',
            'position' => NULL,
            'parent_id' => 101,
            'controller' => 'VarietyController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-05-31 23:53:36',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 104,
            'name' => 'Purpose Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:12:14',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 105,
            'name' => 'Purpose List',
            'short_name' => NULL,
            'uri' => 'purpose-list',
            'position' => NULL,
            'parent_id' => 104,
            'controller' => 'PurposeController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:12:44',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 106,
            'name' => 'Add Purpose',
            'short_name' => NULL,
            'uri' => 'add-purpose',
            'position' => NULL,
            'parent_id' => 104,
            'controller' => 'PurposeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:13:11',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 107,
            'name' => 'Add Category Wise Purposes',
            'short_name' => NULL,
            'uri' => 'add-purpose-category',
            'position' => NULL,
            'parent_id' => 104,
            'controller' => 'SeedPurposeController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:15:35',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 108,
            'name' => 'Purpose Wise Required Attachments',
            'short_name' => NULL,
            'uri' => 'required-attachment-for-purpose',
            'position' => NULL,
            'parent_id' => 104,
            'controller' => 'PurposeRequiredAttachmentController',
            'method' => 'update',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:17:22',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 109,
            'name' => 'District Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:18:04',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 110,
            'name' => 'Upazilla Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:18:19',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 111,
            'name' => 'District List',
            'short_name' => NULL,
            'uri' => 'district-list',
            'position' => NULL,
            'parent_id' => 109,
            'controller' => 'DistrictController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:18:55',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 112,
            'name' => 'Add District',
            'short_name' => NULL,
            'uri' => 'add-district',
            'position' => NULL,
            'parent_id' => 109,
            'controller' => 'DistrictController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:19:26',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 113,
            'name' => 'Upazilla List',
            'short_name' => NULL,
            'uri' => 'upazilla-list',
            'position' => NULL,
            'parent_id' => 110,
            'controller' => 'UpazillaController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:20:05',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 114,
            'name' => 'Add Upazilla',
            'short_name' => NULL,
            'uri' => 'add-upazilla',
            'position' => NULL,
            'parent_id' => 110,
            'controller' => 'UpazillaController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-01 00:20:38',
            'updated_by' => 1,
            'updated_at' => NULL,
            'deleted_by' => 1,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 115,
            'name' => 'Menus',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => NULL,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-07 06:57:36',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 116,
            'name' => 'Menu Setup',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 115,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-07 06:58:39',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 117,
            'name' => 'Add Menu',
            'short_name' => NULL,
            'uri' => 'add-menu',
            'position' => NULL,
            'parent_id' => 116,
            'controller' => 'MenuController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-07 07:00:24',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 118,
            'name' => 'Menu List',
            'short_name' => NULL,
            'uri' => 'menu-list',
            'position' => NULL,
            'parent_id' => 116,
            'controller' => 'MenuController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-07 07:01:36',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 119,
            'name' => 'Assign Menu To Role',
            'short_name' => NULL,
            'uri' => 'assignMenuRole',
            'position' => NULL,
            'parent_id' => 115,
            'controller' => 'RoleMenuController',
            'method' => 'assignToRole',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-07 07:03:14',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 120,
            'name' => 'Phytosanitary Certificate',
            'short_name' => NULL,
            'uri' => 'application/pc/new-application',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'PcDetailController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-07 07:11:50',
            'updated_by' => 1,
            'updated_at' => '2021-06-08 03:37:20',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 121,
            'name' => 'Import Permit',
            'short_name' => NULL,
            'uri' => 'application/ip/new-application',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'IpDetailController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 03:39:27',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 122,
            'name' => 'Release Order (With IP)',
            'short_name' => NULL,
            'uri' => 'application/ro-with-ip/new-application',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'RoDetailController',
            'method' => 'storeWithIps',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 03:43:13',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 123,
            'name' => 'Release Order (with Memo)',
            'short_name' => NULL,
            'uri' => 'application/ro-with-memo/new-application',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'RoDetailController',
            'method' => 'storeWithMemo',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 03:45:12',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 124,
            'name' => 'New Applications',
            'short_name' => NULL,
            'uri' => 'new-application-list',
            'position' => NULL,
            'parent_id' => 14,
            'controller' => 'ApplicationController',
            'method' => 'newApplicationsPaginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 03:50:37',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 125,
            'name' => 'Show Product Details',
            'short_name' => NULL,
            'uri' => 'product-details/:productId',
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 05:18:15',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 126,
            'name' => 'Delete Product',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 05:29:58',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 127,
            'name' => 'Activate Product',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'activate',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 05:32:43',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 128,
            'name' => 'Deactivate Product',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'deactivate',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 05:33:35',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 129,
            'name' => 'Edit App Type',
            'short_name' => NULL,
            'uri' => 'edit-app-type/:appTypeId',
            'position' => NULL,
            'parent_id' => 70,
            'controller' => 'AppTypeController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:48:23',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 130,
            'name' => 'Delete App Type',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 70,
            'controller' => 'AppTypeController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:51:10',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 131,
            'name' => 'Edit Branch',
            'short_name' => NULL,
            'uri' => 'edit-branch/:id',
            'position' => NULL,
            'parent_id' => 57,
            'controller' => 'BankBranchController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:53:01',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 132,
            'name' => 'Delete Branch',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 57,
            'controller' => 'BankBranchController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:54:11',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 133,
            'name' => 'Edit Fee',
            'short_name' => NULL,
            'uri' => 'edit-fee/:id',
            'position' => NULL,
            'parent_id' => 60,
            'controller' => 'FeeSetupController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:55:34',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 134,
            'name' => 'Fee Details',
            'short_name' => NULL,
            'uri' => 'fee-show-details/:id',
            'position' => NULL,
            'parent_id' => 60,
            'controller' => 'FeeSetupController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:56:52',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 135,
            'name' => 'Delete Fee',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 60,
            'controller' => 'FeeSetupController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:57:46',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 136,
            'name' => 'Edit Organization',
            'short_name' => NULL,
            'uri' => 'edit-organization/:orgId',
            'position' => NULL,
            'parent_id' => 63,
            'controller' => 'OrganizationController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 11:59:22',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 137,
            'name' => 'Organization Details',
            'short_name' => NULL,
            'uri' => 'organization-show-details/:id',
            'position' => NULL,
            'parent_id' => 63,
            'controller' => 'OrganizationController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:00:51',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 138,
            'name' => 'Delete Organization',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 63,
            'controller' => 'OrganizationController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:01:37',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 139,
            'name' => 'Edit Designation',
            'short_name' => NULL,
            'uri' => 'edit-designation/:designationId',
            'position' => NULL,
            'parent_id' => 66,
            'controller' => 'DesignationController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:04:41',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 140,
            'name' => 'Delete Designation',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 66,
            'controller' => 'DesignationController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:07:04',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 141,
            'name' => 'Edit Unit',
            'short_name' => NULL,
            'uri' => 'edit-unit/:unitId',
            'position' => NULL,
            'parent_id' => 74,
            'controller' => 'UnitController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:08:19',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 142,
            'name' => 'Delete Unit',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 74,
            'controller' => 'UnitController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:09:16',
            'updated_by' => 1,
            'updated_at' => '2021-06-08 12:10:32',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 143,
            'name' => 'Edit Role',
            'short_name' => NULL,
            'uri' => 'edit-role/:roleId',
            'position' => NULL,
            'parent_id' => 77,
            'controller' => 'RoleController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:13:55',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 144,
            'name' => 'Delete Role',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 77,
            'controller' => 'RoleController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:15:12',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 145,
            'name' => 'Edit Port Type',
            'short_name' => NULL,
            'uri' => 'edit-port-type/:portTypeId',
            'position' => NULL,
            'parent_id' => 80,
            'controller' => 'PortTypeController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:18:01',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 146,
            'name' => 'Delete Port Type',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 80,
            'controller' => 'PortTypeController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:20:34',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 147,
            'name' => 'Edit Port Category',
            'short_name' => NULL,
            'uri' => 'edit-port-category/:portCategoryId',
            'position' => NULL,
            'parent_id' => 81,
            'controller' => 'PortCategoryController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:21:44',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 148,
            'name' => 'Delete Port Category',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 81,
            'controller' => 'PortCategoryController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:22:31',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 149,
            'name' => 'Edit Means of Transport',
            'short_name' => NULL,
            'uri' => 'edit-means-of-transport/:meansOfTransportId',
            'position' => NULL,
            'parent_id' => 86,
            'controller' => 'MeansofTransportController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:24:04',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 150,
            'name' => 'Delete Means of Transport',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 86,
            'controller' => 'MeansofTransportController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 12:26:18',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 151,
            'name' => 'Edit Bank',
            'short_name' => NULL,
            'uri' => 'edit-bank/:bankId',
            'position' => NULL,
            'parent_id' => 89,
            'controller' => 'BankController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:04:29',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 152,
            'name' => 'Delete Bank',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 89,
            'controller' => 'BankController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:07:56',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 153,
            'name' => 'Attachment Details',
            'short_name' => NULL,
            'uri' => 'attachment-show-details/:id',
            'position' => NULL,
            'parent_id' => 92,
            'controller' => 'ConfigAttachmentController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:11:46',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 154,
            'name' => 'Edit Attachment',
            'short_name' => NULL,
            'uri' => 'edit-attachment/:id',
            'position' => NULL,
            'parent_id' => 92,
            'controller' => 'ConfigAttachmentController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:30:21',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 155,
            'name' => 'Delete Attachment',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 92,
            'controller' => 'ConfigAttachmentController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:40:02',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 156,
            'name' => 'Edit Attachment Attribute',
            'short_name' => NULL,
            'uri' => 'edit-attachment-attribute/:id',
            'position' => NULL,
            'parent_id' => 95,
            'controller' => 'ConfigAttachmentAttributeController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:41:52',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 157,
            'name' => 'Delete Attchment Attribute',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 95,
            'controller' => 'ConfigAttachmentAttributeController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:43:08',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 158,
            'name' => 'Edit Variety',
            'short_name' => NULL,
            'uri' => 'edit-variety/:varietyId',
            'position' => NULL,
            'parent_id' => 101,
            'controller' => 'VarietyController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:51:56',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 159,
            'name' => 'Delete Variety',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 101,
            'controller' => 'VarietyController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:53:25',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 160,
            'name' => 'Edit Purpose',
            'short_name' => NULL,
            'uri' => 'edit-purpose/:purposeId',
            'position' => NULL,
            'parent_id' => 104,
            'controller' => 'PurposeController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:55:21',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 161,
            'name' => 'Delete Purpose',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 104,
            'controller' => 'PurposeController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:57:03',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 162,
            'name' => 'Edit Disctrict',
            'short_name' => NULL,
            'uri' => 'edit-district/:districtId',
            'position' => NULL,
            'parent_id' => 109,
            'controller' => 'DistrictController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:58:37',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 163,
            'name' => 'Delete District',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 109,
            'controller' => 'DistrictController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 15:59:19',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 164,
            'name' => 'Edit Upazila',
            'short_name' => NULL,
            'uri' => 'edit-upazilla/:upazillaId',
            'position' => NULL,
            'parent_id' => 110,
            'controller' => 'UpazillaController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 16:01:25',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 165,
            'name' => 'Delete Upazila',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 110,
            'controller' => 'UpazillaController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 16:02:41',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 166,
            'name' => 'User Details',
            'short_name' => NULL,
            'uri' => 'user-show-details/:userId',
            'position' => NULL,
            'parent_id' => 6,
            'controller' => 'UserController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 16:05:48',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 167,
            'name' => 'Edit User',
            'short_name' => NULL,
            'uri' => 'edit-dae-user/:userId',
            'position' => NULL,
            'parent_id' => 6,
            'controller' => 'UserController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 16:07:08',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 168,
            'name' => 'Delete User',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 6,
            'controller' => 'UserController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 16:08:04',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 169,
            'name' => 'Activate User',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 6,
            'controller' => 'UserController',
            'method' => 'activate',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 16:10:38',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 170,
            'name' => 'Unset Proxy User',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 11,
            'controller' => 'ProxyUserLogController',
            'method' => 'unsetUser',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 18:34:27',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 171,
            'name' => 'Product Wise IP Report',
            'short_name' => NULL,
            'uri' => 'product-wise-ip-report',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getIpProductReleaseDetails',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 18:44:05',
            'updated_by' => 1,
            'updated_at' => '2021-06-08 18:44:22',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 172,
            'name' => 'Working Report',
            'short_name' => NULL,
            'uri' => 'working-report',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getWorkingDetails',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 18:48:47',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 173,
            'name' => 'Check Chalan',
            'short_name' => NULL,
            'uri' => 'check-chalan',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getMatchedChalanDetails',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 18:50:06',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 174,
            'name' => 'Product Type Details',
            'short_name' => NULL,
            'uri' => 'product-type-show-details/:id',
            'position' => NULL,
            'parent_id' => 20,
            'controller' => 'ProductTypeController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:03:17',
            'updated_by' => 1,
            'updated_at' => '2021-06-08 19:05:15',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 175,
            'name' => 'Edit Product Type',
            'short_name' => NULL,
            'uri' => 'edit-product-type/:prodTypeId',
            'position' => NULL,
            'parent_id' => 20,
            'controller' => 'ProductTypeController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:05:29',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 176,
            'name' => 'Delete Product Type',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 20,
            'controller' => 'ProductTypeController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:06:47',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 177,
            'name' => 'Edit Process Stage',
            'short_name' => NULL,
            'uri' => 'edit-process-stage/:stageId',
            'position' => NULL,
            'parent_id' => 26,
            'controller' => 'StageController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:30:37',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 178,
            'name' => 'Delete Process Stage',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 26,
            'controller' => 'StageController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:35:53',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 179,
            'name' => 'Edit Process Task',
            'short_name' => NULL,
            'uri' => 'edit-process-task/:taskId',
            'position' => NULL,
            'parent_id' => 27,
            'controller' => 'ProcessTaskController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:40:34',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 180,
            'name' => 'Delete Process Task',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 27,
            'controller' => 'ProcessTaskController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:41:39',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 181,
            'name' => 'Process Task Field Details',
            'short_name' => NULL,
            'uri' => 'show-process-task-field/:taskFieldId',
            'position' => NULL,
            'parent_id' => 29,
            'controller' => 'TaskFieldController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:46:47',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 182,
            'name' => 'Edit Process Task Field',
            'short_name' => NULL,
            'uri' => 'edit-process-task-field/:taskFieldId',
            'position' => NULL,
            'parent_id' => 29,
            'controller' => 'TaskFieldController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:48:21',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 183,
            'name' => 'Delete Process Task Field',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 29,
            'controller' => 'TaskFieldController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:49:23',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 184,
            'name' => 'Port Wise Process Flow',
            'short_name' => NULL,
            'uri' => 'application/port-type-wise-process-flow',
            'position' => NULL,
            'parent_id' => 25,
            'controller' => 'ProcessFlowController',
            'method' => 'createOrganizationCategoryWise',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 19:51:50',
            'updated_by' => 1,
            'updated_at' => '2021-06-09 03:47:44',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 185,
            'name' => 'Port Wise Approved Application Report',
            'short_name' => NULL,
            'uri' => 'port-wise-approved-application',
            'position' => NULL,
            'parent_id' => 40,
            'controller' => 'ReportController',
            'method' => 'getApprovedApplicationDetails',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 20:03:27',
            'updated_by' => 1,
            'updated_at' => '2021-06-09 03:47:23',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 186,
            'name' => 'Edit Organization Wise Process Flow',
            'short_name' => NULL,
            'uri' => 'edit-org-process-flow/:orgId',
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 20:06:22',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 187,
            'name' => 'Organization Wise Process Flow Details',
            'short_name' => NULL,
            'uri' => 'show-org-process-flow/:orgId',
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 20:27:42',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 188,
            'name' => 'Actvate Organization Wise Process Flow',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'activate',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 20:29:27',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 189,
            'name' => 'Deactivate Organization Process Flow',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'deactivate',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 20:31:42',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 190,
            'name' => 'Delete Organization Process Flow',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 31,
            'controller' => 'ProcessFlowController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-08 20:32:48',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 191,
            'name' => 'Edit Notice',
            'short_name' => NULL,
            'uri' => 'edit-notice/:noticeId',
            'position' => NULL,
            'parent_id' => 51,
            'controller' => 'NoticeController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:13:43',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 192,
            'name' => 'Notice Details',
            'short_name' => NULL,
            'uri' => 'show-notice/:noticeId',
            'position' => NULL,
            'parent_id' => 51,
            'controller' => 'NoticeController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:16:04',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 193,
            'name' => 'Delete Notice',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 51,
            'controller' => 'NoticeController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:17:00',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 194,
            'name' => 'Edit Manual Certificate',
            'short_name' => NULL,
            'uri' => 'edit-manual-certificate/:certificateId',
            'position' => NULL,
            'parent_id' => 46,
            'controller' => 'CertificateController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:20:13',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 195,
            'name' => 'Show Manual Certificate',
            'short_name' => NULL,
            'uri' => 'show-manual-certificate/:certificateId',
            'position' => NULL,
            'parent_id' => 46,
            'controller' => 'CertificateController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:23:29',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 196,
            'name' => 'Delete Manual Certificate',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 46,
            'controller' => 'CertificateController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:26:51',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 197,
            'name' => 'Edit Menu',
            'short_name' => NULL,
            'uri' => 'edit-menu/:menuId',
            'position' => NULL,
            'parent_id' => 116,
            'controller' => 'MenuController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:29:46',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 198,
            'name' => 'Menu Details',
            'short_name' => NULL,
            'uri' => 'menu-show-details/:id',
            'position' => NULL,
            'parent_id' => 116,
            'controller' => 'MenuController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:30:58',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 199,
            'name' => 'Delete Menu',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 116,
            'controller' => 'MenuController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:32:06',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 200,
            'name' => 'Edit Product',
            'short_name' => NULL,
            'uri' => 'edit-product/:productId',
            'position' => NULL,
            'parent_id' => 19,
            'controller' => 'ProductController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-06-10 10:35:29',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 201,
            'name' => 'Additional Condition',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 56,
            'controller' => NULL,
            'method' => NULL,
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-08-25 10:47:51',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 202,
            'name' => 'Additional Condition List',
            'short_name' => NULL,
            'uri' => 'additional-condition-list',
            'position' => NULL,
            'parent_id' => 201,
            'controller' => 'AdditionalConditionSuggestionController',
            'method' => 'paginatedIndex',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-08-25 10:49:50',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 203,
            'name' => 'Add Additional Condition',
            'short_name' => NULL,
            'uri' => 'add-additional-condition',
            'position' => NULL,
            'parent_id' => 201,
            'controller' => 'AdditionalConditionSuggestionController',
            'method' => 'store',
            'is_visible' => 1,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-08-25 10:50:55',
            'updated_by' => NULL,
            'updated_at' => NULL,
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 204,
            'name' => 'Edit Additional Condition',
            'short_name' => NULL,
            'uri' => 'edit-additional-condition/:id',
            'position' => NULL,
            'parent_id' => 201,
            'controller' => 'AdditionalConditionSuggestionController',
            'method' => 'update',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-08-25 10:55:49',
            'updated_by' => 1,
            'updated_at' => '2021-08-25 11:02:04',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 205,
            'name' => 'Additional Condition Details',
            'short_name' => NULL,
            'uri' => 'additional-condition-details/:id',
            'position' => NULL,
            'parent_id' => 201,
            'controller' => 'AdditionalConditionSuggestionController',
            'method' => 'show',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-08-25 10:56:53',
            'updated_by' => 1,
            'updated_at' => '2021-08-25 11:01:14',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);

        DB::table('menus')->insert([
            'id' => 206,
            'name' => 'Delete Additional Condition',
            'short_name' => NULL,
            'uri' => NULL,
            'position' => NULL,
            'parent_id' => 201,
            'controller' => 'AdditionalConditionSuggestionController',
            'method' => 'destroy',
            'is_visible' => 0,
            'description' => NULL,
            'created_by' => 1,
            'created_at' => '2021-08-25 10:58:03',
            'updated_by' => 1,
            'updated_at' => '2021-08-25 11:01:42',
            'deleted_by' => NULL,
            'deleted_at' => NULL
        ]);
    }
}
