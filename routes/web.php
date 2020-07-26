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

Route::get('/', 'CustomerController@index');

Route::get('/customer/{customer}', 'CustomerController@show');


Route::get('/postcard', function () {
    dd(\Illuminate\Support\Str::partNumber("niah34534"));
    dd(\Illuminate\Support\Str::prefixString("niah34534", 'ni好啊'));

    \App\Http\Card::hello("curry", "666");
});

Route::get('post', 'PostController@index');

Route::get('send', 'SendTestController@send');
