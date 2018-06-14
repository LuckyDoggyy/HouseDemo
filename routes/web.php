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

Route::view('login', 'origin');

Route::view('register', 'origin');

Route::post('loginOrRegister', 'BrokerController@loginOrRegister');

Route::get('logout', 'BrokerController@logout');

//Route::get('house','HouseController@houseList');

Route::resource('houseInfo', 'HouseController');

Route::get('createPage','HouseController@createPage');

Route::view('create', 'test', ['res' => 'skip successful']);