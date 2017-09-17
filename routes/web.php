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
//route trang chu
Route::get('/','UserController@index');
Route::get('/loai-san-pham/{ma_loai}','San_PhamController@Hien_thi_san_pham_theo_ma_loai');
