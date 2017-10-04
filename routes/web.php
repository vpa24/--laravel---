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
Route::get('/','UserController@index')->name('/');
Route::get('/loai-san-pham/{ma_loai}','San_PhamController@Hien_thi_san_pham_theo_ma_loai');
Route::get('/giam-gia','San_PhamController@Giam_gia');
Route::get('/san-pham-moi','San_PhamController@Moi');
Route::get('chi_tiet/{ma_sp}','San_PhamController@ChiTietSP');
Route::get('thuong_hieu/{ma_thuong_hieu}','San_PhamController@ThuongHieu');
Route::get('them-gio-hang/{ma_sp}','CartController@Add');
