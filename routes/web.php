<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KategoriController;

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

// Route::middlewere(['auth'])->group( function(){
//     Route::resource('kategoricontroller','App\Http\Controllers\Admin\KategoriController');
//     Route::get('/kategori', [Admin\KategoriController::class, 'index']);
// });
Route::resource('kategoricontroller','App\Http\Controllers\Admin\KategoriController')->middleware(['auth']);
Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth']);
