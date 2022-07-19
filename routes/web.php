<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

//frontend
Route::get('/', [App\Http\Controllers\Frontend\homepageController::class, 'index'])->name('/');
Route::post('/email', [App\Http\Controllers\Frontend\emailController::class, 'sendEmail'])->name('send.email');
Route::get('/baca-berita/{slug}', [App\Http\Controllers\Frontend\beritaController::class, 'detail'])->name('baca-berita');

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('abpadmin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('abpadmin/profil', [App\Http\Controllers\Admin\ProfilController::class, 'index'])->name('admin-profil');

    Route::get('abpadmin/berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('admin-berita-abpadmin');
    Route::get('abpadmin/berita/tambah', [App\Http\Controllers\Admin\BeritaController::class, 'add'])->name('admin-tambah-berita-abpadmin');
    Route::post('abpadmin/berita', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('admin-berita-abpadmin-tambah');
    Route::get('abpadmin/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('admin-berita-abpadmin-edit');
    Route::put('abpadmin/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('admin-update-berita-abpadmin');
    Route::delete('abpadmin/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'delete'])->name('admin-berita-abpadmin-delete');
});