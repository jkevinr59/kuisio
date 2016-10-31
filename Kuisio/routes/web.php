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
Route::get('/admin/login', 'Admin@login');
Route::get('/admin/data','Admin@Soal');
Route::get('/admin/logout','Admin@logout');
Route::get('/admin/update','Admin@Update_soal');
Route::get('/admin/delete','Admin@delete_soal');
Route::get('/admin/datatable','Admin@table');
