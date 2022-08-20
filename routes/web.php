<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('kategoricontroller', 'App\Http\Controllers\Admin\KategoriController')->middleware(['auth']);
Route::resource('tugascontroller', 'App\Http\Controllers\Admin\TugasController')->middleware(['auth']);

Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth']);
Route::get('/tugas', [TugasController::class, 'index'])->middleware(['auth']);

// Route::middlewere(['auth'])->group( function(){
//     Route::resource('kategoricontroller','App\Http\Controllers\Admin\KategoriController');
//     Route::get('/kategori', [Admin\KategoriController::class, 'index']);
// });

// })->middleware(['auth'])->name('admin');

// Route::get('/admin/kategori', function () {
//     return view('admin.kategori');
// })->middleware(['auth'])->name('admin');

// Route::get('/admin/tugas', function () {
//     return view('admin.tugas');
// })->middleware(['auth'])->name('admin');

// // get route from resource
// Route::get('/admin/kategori', [KategoriController::class, 'index', 'show']);
// Route::get('/admin/tugas', [TugasController::class, 'index']);

// Route::resource('/admin/tugas', 'App\Http\Controllers\TugasController');
