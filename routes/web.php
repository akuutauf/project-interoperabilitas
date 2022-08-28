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

    //event
    Route::get('/index/event', [ManajemenEvent::class, 'index'])->name('admin.event');
    Route::get('/create/event', [ManajemenEvent::class, 'create'])->name('admin.create.event');
    Route::post('/store/event', [ManajemenEvent::class, 'store'])->name('admin.store.event');
    Route::get('/edit/{id}/event', [ManajemenEvent::class, 'edit'])->name('admin.edit.event');
    Route::post('/update/{id}/event', [ManajemenEvent::class, 'update'])->name('admin.update.event');
    Route::get('/destroy/{id}/event', [ManajemenEvent::class, 'destroy'])->name('admin.delete.event');

    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.index.kategori');
    Route::get('/create/kategori', [KategoriController::class, 'create'])->name('admin.create.kategori');
    Route::post('/store/kategori', [KategoriController::class, 'store'])->name('admin.store.kategori');
    Route::get('/destroy/{id}/kategori', [KategoriController::class, 'destroy'])->name('admin.destroy.kategori');
    Route::get('/edit/{id}/kategori', [KategoriController::class, 'edit'])->name('admin.edit.kategori');
    Route::post('/update/{id}/kategori', [KategoriController::class, 'update'])->name('admin.update.kategori');

    // Tugas
    Route::get('/tugas', [TugasController::class, 'index'])->name('admin.index.tugas');
    Route::get('/create/tugas', [TugasController::class, 'create'])->name('admin.create.tugas');
    Route::post('/store/tugas', [TugasController::class, 'store'])->name('admin.store.tugas');
    Route::get('/destroy/{id}/tugas', [TugasController::class, 'destroy'])->name('admin.destroy.tugas');

    Route::get('/edit/{id}/dosen', [ManajemenDosen::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}/dosen', [ManajemenDosen::class, 'update'])->name('admin.update');
});

require __DIR__ . '/auth.php';
