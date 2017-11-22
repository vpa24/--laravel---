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
Route::get('/','San_PhamController@San_Pham_ban_Chay')->name('/');
Route::get('/loai-san-pham/{ma_loai}','San_PhamController@Hien_thi_san_pham_theo_ma_loai');
Route::get('/giam-gia','San_PhamController@Giam_gia');
Route::get('/san-pham-moi','San_PhamController@Moi');
Route::get('chi_tiet/{ma_sp}','San_PhamController@ChiTietSP')->name('chi_tiet');
Route::get('thuong_hieu/{ma_thuong_hieu}','San_PhamController@ThuongHieu');
Route::put('them-gio-hang/{ma_sp}','CartController@Add');
Route::get('gio_hang',function(){
  return view('pages.gio_hang');
});
Route::get('xoa/{rowID}','CartController@Xoa')->name('xoa');
Route::put('cap_nhap/{rowID}','CartController@Update');
Route::get('dat_hang','KhachHangController@DatHang')->name('dat_hang');

Route::get('don_hang','KhachHangController@DonHang')->name('don_hang');
Route::post('thuc_hien_dat_hang','KhachHangController@ThucHienDatHang')->name('thuc_hien_dat_hang');
Route::post('check_login','KhachHangController@Login')->name('check_login');
Route::post('tao_tai_khoan','KhachHangController@Register')->name('tao_tai_khoan');
Route::post('update','KhachHangController@Update')->name('update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
