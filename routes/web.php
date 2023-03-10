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

//Route bawaan laravel
Route::get('/', function () {
    return view('welcome');
});

//Membuat Route
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/profil/coba', function () {
    echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
});

//Route dengan parameter
Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

//Route parameter dengan dua parameter
Route::get('/stock_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

Route::get('/stock_barang/{jenis}/{merek}', function ($a, $b) {
    return "Cek sisa stok untuk $a $b";
});

//Route dengan Optional parameter
Route::get(
    '/stock_barang/{jenis?}/{merek?}',
    function ($a = 'Smartphone', $b = 'Samsung') {
        return "Cek sisa stok untuk $a $b";
    }
);

//Route parameter dengan regular expression
Route::get('/user1/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');

Route::get('/user2/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

//Route redirect
Route::get('/hubungi-kami', function () {
    return "<h1>Hubungi Kami</h1>";
});

Route::redirect('/contact-us', 'hubungi-kami');

//Route Group
Route::prefix('admin')->group(function () {
    Route::get('/mahasiswa', function () {
        return "<h1>Daftar mahasiswa</h1>";
    });

    Route::get('/dosen', function () {
        return "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function () {
        return "<h1>Daftar Karyawan</h1>";
    });
});

// //Route Fallback
// Route::fallback(function () {
//     return "Maaf, alamat tidak ditemukan";
// });

// //Route priority
// Route::get('/buku/1', function () {
//     return "buku ke-1";
// });

// Route::get('/buku/1', function () {
//     return "buku saya ke-1";
// });

// Route::get('/buku/1', function () {
//     return "buku kita ke-1";
// });

Route::get('/buku/{a}', function ($a) {
    return "buku ke-$a";
});

Route::get('/buku/{a}', function ($a) {
    return "buku saya ke-$a";
});

Route::get('/buku/{a}', function ($a) {
    return "buku kita ke-$a";
});

//membuat view
Route::get('/home', function () {
    return view('halaman_home');
});

Route::get('/mahasiswa', function () {
    $nama = 'Vladimir Putin';
    $nilai = [80, 64, 30, 76, 95];
    return view('kampus.mahasiswa', compact('nama', 'nilai'));
});
