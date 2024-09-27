<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/level', [LevelController::class, 'index']);
route::get('/kategori', [KategoriController::class, 'index']);


// user
route::get('/user', [UserController::class, 'index']);
route::get('/user/tambah', [UserController::class, 'tambah']);
route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');

route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
route::post('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
    
route::get('/user/hapus/{id}', [UserController::class, 'hapus']);