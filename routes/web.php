<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerpusController;
use App\Http\Controllers\PinjamController;
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

Route::get('/', function () {
    return redirect('perpus');
});
Route::get('/login', [PerpusController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('auth')->group(function () {
    Route::get('/perpus', [PerpusController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::prefix('buku')->group(function () {
        Route::get('/', [BookController::class, 'index']);
        Route::get('/add', [BookController::class, 'add_new']);
        Route::post('/save', [BookController::class, 'save']);
        Route::get('/edit/{id}', [BookController::class, 'edit']);
        Route::get('/delete/{id}', [BookController::class, 'delete']);
    });

    Route::prefix('anggota')->group(function () {
        Route::get('/', [AnggotaController::class, 'index']);
        Route::get('/add', [AnggotaController::class, 'add_new']);
        Route::post('/save', [AnggotaController::class, 'save']);
        Route::get('/edit/{id}', [AnggotaController::class, 'edit']);
        Route::get('/delete/{id}', [AnggotaController::class, 'delete']);
    });

    Route::prefix('pinjam')->group(function () {
        Route::get('/', [PinjamController::class, 'index']);
        Route::get('/add', [PinjamController::class, 'add_new']);
        Route::post('/save', [PinjamController::class, 'save']);
        Route::get('/edit/{id}', [PinjamController::class, 'edit']);
        Route::get('/delete/{id}', [PinjamController::class, 'delete']);
    });
});



Route::get('/info', function () {
    return view('info', ['progdi' => "TI"]);
});

Route::get('/info/{kd}', [InfoController::class, 'infoMhs']);
