<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\KategoriController;

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
    return view('beranda-page');
});

// middleware for admin page
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth']);

    //Dosen
    Route::get('/index/dosen', [ManajemenDosen::class, 'index'])->name('admin.dosen');
    Route::get('/create/dosen', [ManajemenDosen::class, 'create'])->name('admin.create');
    Route::post('/store/dosen', [ManajemenDosen::class, 'store'])->name('admin.store');
    Route::get('/edit/{id}/dosen', [ManajemenDosen::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}/dosen', [ManajemenDosen::class, 'update'])->name('admin.update');
    Route::get('/destroy/{id}/dosen', [ManajemenDosen::class, 'destroy'])->name('admin.delete');

    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.index.kategori');
    Route::get('/create/kategori', [KategoriController::class, 'create'])->name('admin.create.kategori');
    Route::post('/store/kategori', [KategoriController::class, 'store'])->name('admin.store.kategori');
    Route::get('/destroy/{id}/kategori', [KategoriController::class, 'destroy'])->name('admin.destroy.kategori');

    // Tugas
    Route::get('/tugas', [TugasController::class, 'index'])->name('admin.index.tugas');
    Route::get('/create/tugas', [TugasController::class, 'create'])->name('admin.create.tugas');
    Route::post('/store/tugas', [TugasController::class, 'store'])->name('admin.store.tugas');
    Route::get('/destroy/{id}/tugas', [TugasController::class, 'destroy'])->name('admin.destroy.tugas');
});

require __DIR__ . '/auth.php';
