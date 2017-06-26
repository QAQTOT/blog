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

Route::get('/', 'TestController@test');

Route::get('/test','TestController@test');

Route::get('/blog','Blog\IndexController@index');

Route::get('/blog/detail/{id}','Blog\IndexController@detail')->where('id','[0-9]*[1-9][0-9]*$');
