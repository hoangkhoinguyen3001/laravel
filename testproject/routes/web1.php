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
//http://localhost/phpmyadmin/
//http://localhost:8080/phpmyadmin/
Route::get('/', function () {
return view('welcome');
});
Route::get('/task', 'TaskController@index');
