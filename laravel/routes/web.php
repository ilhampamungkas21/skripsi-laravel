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

//Route::get('/', function () {
//    return view('welcome');
//});

//BelumloginController
Route::get('/', 'BelumloginController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin
Route::get('/admin.html', 'AdminController@index');
//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('logoutpembeli', '\App\Http\Controllers\Auth\LoginController@logoutpembeli');
//loginpembeli

//admin/barang
Route::get('/admin/daftarmember.html', 'AdminController@daftarmember');
Route::get('/admin/barang/daftarbarang.html', 'BarangController@index');
Route::get('/admin/barang/semuadaftarbarang.html', 'BarangController@semuabarang');
Route::get('/admin/daftarmember/deletemember/{id}', 'AdminController@destroy');
Route::get('/admin/barang/buatbarang.html', 'AdminController@buatbarang');
Route::post('/storebarang','BarangController@storebarang');

Route::get('/admin/barang/editbarang/{id}','BarangController@editbarang');
Route::post('/admin/barang/editbarang/{id}','BarangController@updatebarang');

Route::get('/admin/barang/deletebarang/{id}', 'BarangController@destroy');
Route::get('/admin/semuadaftarpesanan.html', 'PesananController@semuadaftarpesanan');
Route::get('/admin/daftarpesanan.html', 'PesananController@daftarpesanan_back');


Route::get('/admin/daftarpesanan/editpesanan/{id}', 'PesananController@editpesanan');
Route::post('/admin/daftarpesanan/editpesanan/{id}', 'PesananController@updatestatus');


//Bagian Pembeli
//loginpembeli
Route::get('/daftarproduk.html','BelumloginController@daftarproduk');
Route::get('/registerpembeli.html', 'BelumloginController@registerpembeli');
Route::post('/registerpembeli','BelumloginController@store');
Route::post('loginpembeli', 'LoginCustomController@loginpembeli');
Route::get('deskripsibarang/{id}', 'BelumloginController@deskripsi_barang');
Route::get('deskripsibarang/checkoutbarang/{id}', 'PembeliController@checkout_barang');
Route::get('/deskripsibarang/checkoutbarang/pembayaranbarang/{id}', 'PembeliController@pembayaran_barang');
Route::post('/deskripsibarang/checkoutbarang/pembayaranbarang/{id}', 'PembeliController@storepembelian');
Route::get('/pembayaranbarang.html','PesananController@pembayaran_final');
#Route::get('/informasipembayaran.html','PesananController@informasipembayaran');
Route::get('/daftarpesanan.html','PesananController@daftarpesanan');
Route::get('/kirimemailadmin.html','PesananController@kirimemailadmin');
Route::post('/kirimemailadmin','PesananController@kirimadmin');
Route::get('/tentang.html','BelumloginController@tentang');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
