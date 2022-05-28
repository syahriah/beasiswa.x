<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResidentController;
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


Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [HomeController::class, 'loginpost']);

Route::get('/logout', [HomeController::class, 'logout']);


Route::get('/register', [HomeController::class, 'register']);
Route::post('/register', [HomeController::class, 'registerpost']);


Route::middleware(['auth'])->group(function () {
  Route::middleware(['user'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/resident', [HomeController::class, 'index2']);
    Route::get('/dataresident', [HomeController::class, 'index3']);
    Route::get('/rooms', [HomeController::class, 'index4']);
    Route::get('/maintenance', [HomeController::class, 'index5']);

    Route::get('/comment', [HomeController::class, 'index6']);

    Route::get('/respon/{id}', [HomeController::class, 'respon']);
    Route::get('/hapusmaintenance/{id}', [HomeController::class, 'hapusmaintenance']);
    Route::get('/hapuskomen/{id}', [HomeController::class, 'hapuskomen']);
    Route::get('/detail/{id}', [HomeController::class, 'detailresident']);
    Route::get('/editresident/{id}', [HomeController::class, 'editresident']);
    Route::get('/hapusresident/{id}', [HomeController::class, 'hapusresident']);
    Route::post('/resident/insert', [HomeController::class, 'insert']);
    Route::post('/resident/update', [HomeController::class, 'update']);
  });

  Route::get('/website', [HomeController::class, 'index7']);
  Route::post('/maintenance', [HomeController::class, 'maintenancepost']);
  Route::post('/komentar', [HomeController::class, 'komentar']);
});
