<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('padcapp', Config::get('apiversion.v1') . '\PADCAppController@index'); //finish only reterieve
Route::get('topic', Config::get('apiversion.v1') . '\TopicController@index'); //finish only reterieve
Route::get('saveDevtweet/{id}', Config::get('apiversion.v1') . '\SaveDevTweetController@index'); //finish only reterieve
Route::get('requestedTopic', Config::get('apiversion.v1') . '\RequestedTopicController@index'); //finish only reterieve

//post
Route::post('noti/save', Config::get('apiversion.v1') . '\DeliveredNotificationController@store');
Route::get('noti', Config::get('apiversion.v1') . '\DeliveredNotificationController@index');