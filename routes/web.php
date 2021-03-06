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

Route::get('/fish/add', 'FishController@create')->name('fish.add');
Route::post('/fish/add', 'FishController@store')->name('fish.store');

Route::get('/fish', 'FishOverviewController@list')->name('fish.list');
Route::get('/fish/{id}', 'FishOverviewController@caughtFish')->name('fish.details');