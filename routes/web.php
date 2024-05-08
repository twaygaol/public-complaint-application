<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/', function () {
    // Ambil data artikel di sini
    $artikels = App\Models\Artikel::all(); // Contoh pengambilan data artikel dari model Artikel  
    return view('home', compact('artikels'));
});

// Route untuk menampilkan halaman detail artikel
Route::get('/artikel/{id}', 'ArtikelController@detail')->name('artikel.detail');


// Admin/Petugas/pimpinan
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('pengaduans', 'PengaduanController');
        Route::resource('masyarakat', 'MasyarakatController');

        Route::resource('tanggapan', 'TanggapanController');

        Route::resource('artikel', 'ArtikelController');
        Route::get('/pages/admin/artikel', 'ArtikelController@index')->name('pages.admin.artikel.index');
        Route::put('/artikel/{id}', 'ArtikelController@update')->name('artikel.update');

        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::resource('petugas', 'PetugasController');

        Route::get('laporan', 'AdminController@laporan');
        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
});


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
				Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
                Route::resource('pengaduan', 'MasyarakatController');
                Route::get('pengaduan', 'MasyarakatController@lihat');
});





require __DIR__.'/auth.php';
