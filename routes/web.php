<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassAkun;
use App\Http\Controllers\ClassProduk;

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


Route::get('/', [ClassProduk::class, 'Home'])->middleware('guest');
Route::get('/fqi', [ClassProduk::class, 'Fqi'])->middleware('guest');
Route::get('/pesanan-pelanggan', [ClassProduk::class, 'PesananPelanggan'])->middleware('guest');
Route::get('/grafik', [ClassProduk::class, 'Grafik'])->middleware('guest');
Route::get('/print_pesanan_pelanggan/{id_user}', [ClassProduk::class, 'print_pesanan_pelanggan'])->middleware('guest');
Route::get('/print_pesanan/{id_pesanan}', [ClassProduk::class, 'print_pesanan'])->middleware('guest');

Route::get('/login', [ClassAkun::class, 'Login'])->middleware('guest');
Route::post('/login/sleksi_log', [ClassAkun::class, 'SleksiLogin'])->middleware('guest');
Route::get('/dashboard', [ClassAkun::class, 'dashboard'])->middleware('auth');
Route::get('/akun', [ClassAkun::class, 'Pendaftaran'])->middleware('auth');
Route::post('/akun/pendaftaran', [ClassAkun::class, 'daftar'])->middleware('auth');
Route::get('/data_akun', [ClassAkun::class, 'data_akun'])->middleware('auth');
Route::get('/akun/tampil/{id}', [ClassAkun::class, 'ViewPendaftaran'])->middleware('auth');
Route::put('/akun/pendaftaran/{id}', [ClassAkun::class, 'EditPendaftaran'])->middleware('auth');
Route::delete('/akun/hapus/{id}', [ClassAkun::class, 'delete_akun'])->middleware('auth');
Route::get('/akun/biodata', [ClassAkun::class, 'biodata'])->middleware('auth');
Route::get('/akun/vpass', [ClassAkun::class, 'vpass'])->middleware('auth');
Route::post('/akun/vpass', [ClassAkun::class, 'vpasss'])->middleware('auth');
Route::get('upass', [ClassAkun::class, 'upass'])->middleware('auth');
Route::post('/akun/upass/{id}', [ClassAkun::class, 'upasss'])->middleware('auth');
Route::post('/akun/logout', [ClassAkun::class, 'logout'])->middleware('auth');

Route::get('/kategori', [ClassProduk::class, 'kategori'])->middleware('auth');
Route::get('/kategori/buat', [ClassProduk::class, 'BuatKategori'])->middleware('auth');
Route::post('/kategori/simpan', [ClassProduk::class, 'SimpanKategori'])->middleware('auth');
Route::get('/kategori/tampil/{id}', [ClassProduk::class, 'TampilKategori'])->middleware('auth');
Route::put('/kategori/edit/{id}', [ClassProduk::class, 'EditKategori'])->middleware('auth');
Route::delete('/kategori/hapus/{id}', [ClassProduk::class, 'HapusKategori'])->middleware('auth');

Route::get('/produk', [ClassProduk::class, 'Produk'])->middleware('auth');
Route::get('/produk/add', [ClassProduk::class, 'AddProduk'])->middleware('auth');
Route::post('/produk/simpan', [ClassProduk::class, 'SimpanProduk'])->middleware('auth');
Route::get('/produk/tampil/{id}', [ClassProduk::class, 'TampilProduk'])->middleware('auth');
Route::put('/produk/edit/{id}', [ClassProduk::class, 'EditProduk'])->middleware('auth');
Route::delete('/produk/hapus/{id}', [ClassProduk::class, 'HapusProduk'])->middleware('auth');
