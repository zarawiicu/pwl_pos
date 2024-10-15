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
})->name('index');

// Form
Route::get('/form', function () {
    return view('general-form');
});
Route::get('/form/user', function () {
    return view('user.user-form');
});
Route::get('/form/level', function () {
    return view('level.level-form');
});

route::get('/level/index', [LevelController::class, 'index'])->name('level.index');
route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
route::post('/level', [LevelController::class, 'store'])->name('level.store');
//Kategori
Route::get('/kategori/index', [KategoriController::class, 'index'])->name('kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');


// user
Route::resource('user', UserController::class);
// Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/tambah', [UserController::class, 'tambah'])->name('tambah');
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('tambah_simpan');
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('ubah');
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('ubah_simpan');
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('hapus');
