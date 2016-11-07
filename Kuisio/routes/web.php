<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/index','Admin@index');
Route::get('/admin/dashboard','Admin@dashboard');
Auth::routes();
Route::post('/admin/login','Admin@attempt_login');
Route::post('/admin/simpan','Admin@simpan');
Route::get('/admin/login', 'Admin@login');
Route::get('/admin/data','Admin@Soal');
Route::get('/admin/logout','Admin@logout');
Route::post('/admin/update','Admin@Update_soal');
Route::post('/admin/delete','Admin@delete_soal');
Route::get('/admin/datatable','Admin@table');
Route::get('/admin/tambahsoal','Admin@create');
Route::get('/user/quiz','UserController@kuesioner');
Route::post('/user/hasil','UserController@score');
Route::get('/user/hasil','UserController@score');
Route::get('/user/home','UserController@index');