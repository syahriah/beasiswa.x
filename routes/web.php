<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftarController;
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
    Route::get('/pendaftar', [HomeController::class, 'index2']);
    Route::get('/rank', [HomeController::class, 'index4']);
    Route::get('/lolos', [HomeController::class, 'index5']);

    Route::get('/comment', [HomeController::class, 'index6']);

    Route::get('/detail/{id}', [HomeController::class, 'detailpendaftar']);
    Route::get('/hapuspendaftar/{id}', [HomeController::class, 'hapuspendaftar']);
    Route::post('/pendaftar/insert', [HomeController::class, 'insert']);
    Route::post('/pendaftar/update', [HomeController::class, 'update']);
  });

  Route::get('/website', [HomeController::class, 'index7']);
});
