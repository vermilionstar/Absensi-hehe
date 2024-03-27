<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AbsenMasukController;
use App\Http\Controllers\AbsenKeluarController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Validator;

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
    return view('layouts.home');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('role:admin|superadmin|karyawan');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user', [UserController::class, 'index'])->middleware('role:admin|superadmin');
    Route::get('/user/tambah', [UserController::class, 'create'])->middleware('role:admin|superadmin');
    Route::post('/user/simpan', [UserController::class, 'store'])->middleware('role:admin|superadmin');
    Route::get('/user/{id}/edit', [UserController::class, 'show'])->middleware('role:admin|superadmin');
    Route::post('/user/{id}/update', [UserController::class, 'update'])->middleware('role:admin|superadmin');
    Route::get('/user/{id}/hapus', [UserController::class, 'destroy'])->middleware('role:admin|superadmin');

    Route::get('/karyawan', [KaryawanController::class, 'index']);
    Route::get('/karyawan/tambah', [KaryawanController::class, 'create']);
    Route::post('/karyawan/simpan', [KaryawanController::class, 'store']);
    Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'show']);
    Route::post('/karyawan/{id}/update', [KaryawanController::class, 'update']);
    Route::get('/karyawan/{id}/hapus', [KaryawanController::class, 'destroy']);


    Route::get('/cuti', [CutiController::class, 'index'])->middleware('role:karyawan|admin');
    Route::get('/cuti/tambah', [CutiController::class, 'create'])->middleware('role:karyawan|admin');
    Route::post('/cuti/simpan', [CutiController::class, 'store'])->middleware('role:karyawan|admin');
    Route::get('/cuti/{id}/edit', [CutiController::class, 'show'])->middleware('role:karyawan|admin');
    Route::post('/cuti/{id}/update', [CutiController::class, 'update'])->middleware('role:karyawan|admin');
    Route::get('/cuti/{id}/hapus', [CutiController::class, 'destroy'])->middleware('role:karyawan|admin');

    Route::get('/absenmasuk', [AbsenMasukController::class, 'index'])->middleware('role:karyawan|admin');
    Route::get('/absenmasuk/tambah', [AbsenMasukController::class, 'create'])->middleware('role:karyawan|admin');
    Route::post('/absenmasuk/simpan', [AbsenMasukController::class, 'store'])->middleware('role:karyawan|admin');
    Route::post('/absen-masuk', [AbsenMasukController::class, 'store'])->name('absen.masuk')->middleware('role:karyawan|admin');
    Route::get('/absenmasuk/{id}/edit', [AbsenMasukController::class, 'show'])->middleware('role:karyawan|admin');
    Route::post('/absenmasuk/{id}/update', [AbsenMasukController::class, 'update'])->middleware('role:karyawan|admin');
    Route::get('/absenmasuk/{id}/hapus', [AbsenMasukController::class, 'destroy'])->middleware('role:karyawan|admin');
    Route::get('/absenmasuk/cetak', [AbsenMasukController::class, 'cetak'])->middleware('role:admin');

    Route::get('/absenkeluar', [AbsenKeluarController::class, 'index'])->middleware('role:karyawan|admin');
    Route::get('/absenkeluar/tambah', [AbsenKeluarController::class, 'create'])->middleware('role:karyawan|admin');
    Route::post('/absenkeluar/simpan', [AbsenKeluarController::class, 'store'])->middleware('role:karyawan|admin');
    Route::post('/absen-keluar', [AbsenKeluarController::class, 'store'])->name('absen.keluar')->middleware('role:karyawan|admin');
    Route::get('/absenkeluar/{id}/edit', [AbsenKeluarController::class, 'show'])->middleware('role:karyawan|admin');
    Route::post('/absenkeluar/{id}/update', [AbsenKeluarController::class, 'update'])->middleware('role:karyawan|admin');
    Route::get('/absenkeluar/{id}/hapus', [AbsenKeluarController::class, 'destroy'])->middleware('role:karyawan|admin');
    Route::get('/absenkeluar/cetak', [AbsenKeluarController::class, 'cetak'])->middleware('role:admin');
});


// Route::get('admin', function () {
//     return view('layouts.dashboard');
// })->middleware(['auth','verified','role:admin']);

require __DIR__ . '/auth.php';
