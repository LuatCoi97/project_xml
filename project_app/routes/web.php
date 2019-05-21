<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-all-information', '\App\Http\Controllers\HomeController@getAll');

Route::get('get-information', '\App\Http\Controllers\HomeController@getInformation');

Route::get('home',function(){
	return view('index');
});
Route::get('travel','HomeController@getHome');
Route::get('travel/trongnuoc','HomeController@duLichTrongNuoc');
Route::get('travel/ngoainuoc','HomeController@duLichNuocNgoai');


