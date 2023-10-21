<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

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
    return view('login');
});
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/form', [PenggunaController::class, 'form']);
Route::post('/pengguna/save', [PenggunaController::class, 'save']);
Route::get('/pengguna/form/{id}', [PenggunaController::class, 'form']);
Route::get('/pengguna/hapus/{id}', [PenggunaController::class, 'hapus']);