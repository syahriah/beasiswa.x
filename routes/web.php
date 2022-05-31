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

Route::get('/website', [HomeController::class, 'index7']);

Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [HomeController::class, 'loginpost']);
Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/update-status', [HomeController::class, 'updateStatus']);
Route::get('/pendaftar', [HomeController::class, 'index2']);
Route::get('/rank', [HomeController::class, 'index4']);
Route::get('/lolos', [HomeController::class, 'index5']);

Route::post('/pendaftaran', [HomeController::class, 'pendaftaran']);

Route::get('/detail/{pendaftar}', [HomeController::class, 'detailpendaftar']);
Route::get('/hapuspendaftar/{pendaftar}', [HomeController::class, 'hapuspendaftar']);

Route::get('/rankpendaftar', [HomeController::class, 'rankPendaftar']);
Route::get('/ranksaw', [HomeController::class, 'rankSaw']);





// Route::get('/comment', [HomeController::class, 'index6']);

// Route::post('/pendaftar/insert', [HomeController::class, 'insert']);
// Route::post('/pendaftar/update', [HomeController::class, 'update']);



Route::middleware(['auth'])->group(function () {
});
