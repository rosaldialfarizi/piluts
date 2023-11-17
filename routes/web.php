<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/produk', function(){
    $kode_produk = ['BRG001' ,'BRG002',];
    $nama_produk = ['Pena', 'Buku'];
    $jenis_produk = ['Alat tulis','Alat tulis'];
    $harga = ['20000','15000'];
    $jumlah = count($kode_produk);
    return view('produk', compact('kode_produk', 'nama_produk','jenis_produk','harga','jumlah'));
});

route::get('/form', function () {
    $namap = ['Pilih Produk', 'Alat Tulis', 'elektronik', 'Sembako'];
    $jumlah = count($namap);

    return view('/form', compact('namap', 'jumlah'));
});
