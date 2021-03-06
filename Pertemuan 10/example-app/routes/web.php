<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;
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


// Penulisan laravel 8
// Route::get('/beranda', [MyController::class, 'index']);

// Kita langsung ke viewnya
// Route::view('/beranda', 'beranda');

// Route mengakses halaman index
Route::get('/', [MyController::class, 'index']);

// Route mengakses halaman about
Route::get('/tentang', [MyController::class, 'about']);

// Route mengakses halaman mahasiswa
// Route::get('/mahasiswa', [MyController::class, 'mahasiswa']);

Route::get('/mahasiswa', [StudentController::class, 'index']);
Route::get('/mahasiswa/create', [StudentController::class, 'create']);
Route::post('/mahasiswa/create', [StudentController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [StudentController::class, 'edit']);
Route::put('/mahasiswa/{id}/edit', [StudentController::class, 'update']);
Route::delete('/mahasiswa/hapus/{id}', [StudentController::class, 'destroy']);
