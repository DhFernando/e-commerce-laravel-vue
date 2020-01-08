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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'AdvertisementsController@index');
Route::get('/advertisements/create', 'AdvertisementsController@create');
Route::post('/advertisements/store', 'AdvertisementsController@store');
Route::get('/advertisement/{advertisement}', 'AdvertisementsController@show');
Route::get('/advertisement/{advertisement}/approve', 'AdvertisementsController@approve');
Route::get('/advertisement/{advertisement}/edit','AdvertisementsController@edit');
Route::patch('/advertisements/{advertisement}','AdvertisementsController@update');


Route::get('/user/', 'UserController@index');
Route::get('/user/getUserDetails', 'UserController@getUserDetails');
Route::get('/user/getAllUsers', 'UserController@getAllUsers');
Route::get('/user/{user}', 'UserController@show');
Route::get('/user/{user}/s_user', 'UserController@s_user');
Route::get('/user/{user}/edit','UserController@edit');
Route::patch('/user/{user}','UserController@update');
