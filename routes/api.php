<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\Admin\TugasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('register',[AuthController::class, 'register']);
// Route::post('login',[AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['prefix'=>'tugas'], function (){
    Route::group(['middlewere' => 'auth:api'], function (){
        // Route::prefix('tugas')->group(function (){
            Route::get('get', [TugasController::class, 'getData']);
            // Route::get('show/{id}', [TugasController::class, 'getData']);
            Route::post('store', [TugasController::class, 'store']);
            Route::post('update', [TugasController::class, 'update']);
            Route::post('delete', [TugasController::class, 'destroy']);
        });
    });
// });

