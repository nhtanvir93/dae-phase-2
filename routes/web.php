<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'TestController@home');

Route::get('api/user/data', 'TestController@getUserData');

Route::get('api/application/data', 'TestController@getApplicationData');

Route::get('api/unit/data', 'TestController@getUnitData');

Route::get('test-send-mail', 'TestController@sendMail');

Route::get('get-controllers', 'TestController@getControllers');

Route::get('get-methods/{controller}', 'TestController@getMethods');

Route::get('get-all-methods', 'TestController@getAllMethods');

Route::get('get-missing-methods', 'TestController@getMissingMethods');

//Route::get('broadcast-notification', function() {
//    $notificationRepository = resolve('App\Repositories\Interfaces\NotificationRepositoryInterface');
//
//    $notification = $notificationRepository->getDetails(1);
//
//    event(new App\Events\NewNotification($notification));
//});

Route::get('get-route-details', 'TestController@getRouteDetails');

Route::post('send-ipn', 'TestController@sendIPN');
Route::get('view-ipn-log', 'TestController@viewIPNLog');
Route::get('clear-ipn-log', 'TestController@clearIPNLog');

Route::get('test-sms-queue/{user_id}/{queue?}', 'TestController@testSendingSms');

Route::match(['get', 'post'],'query-extraction', 'TestController@queryExtraction');