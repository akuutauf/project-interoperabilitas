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
    return view('layouts.beranda-page');
});

// middleware for admin page
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth']);
    Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth']);
    Route::get('/tugas', [TugasController::class, 'index'])->middleware(['auth']);
    Route::get('/insert-kategori', [KategoriController::class, 'create'])->middleware(['auth']);
    Route::get('/insert-tugas', [TugasController::class, 'create'])->middleware(['auth']);
});

require __DIR__ . '/auth.php';
