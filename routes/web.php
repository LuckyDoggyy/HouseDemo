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

Route::view('login', 'login');

Route::view('register', 'register');

Route::post('loginOrRegister', 'BrokerController@loginOrRegister');

Route::get('logout', 'BrokerController@logout');

Route::get('houseList','HouseController@houseList');

Route::resource('houseInfo', 'HouseController');