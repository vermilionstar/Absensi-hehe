<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LaporanController;


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
    return view('home.dashboard');
});

Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'create']);
Route::post('/user/simpan',[UserController::class,'store']);
Route::get('/user/{id}/edit',[UserController::class,'show']);
Route::post('/user/{id}/update',[UserController::class,'update']);
Route::get('/user/{id}/hapus',[UserController::class,'destroy']);

Route::get('/karyawan',[KaryawanController::class,'index']);
Route::get('/karyawan/tambah',[KaryawanController::class,'create']);
Route::post('/karyawan/simpan',[KaryawanController::class,'store']);
Route::get('/karyawan/{id}/edit',[KaryawanController::class,'show']);
Route::post('/karyawan/{id}/update',[KaryawanController::class,'update']);
Route::get('/karyawan/{id}/hapus',[KaryawanController::class,'destroy']);

Route::get('/absen',[AbsenController::class,'index']);
Route::get('/absen/tambah',[AbsenController::class,'create']);
Route::post('/absen/simpan',[AbsenController::class,'store']);
Route::get('/absen/{id}/edit',[AbsenController::class,'show']);
Route::post('/absen/{id}/update',[AbsenController::class,'update']);
Route::get('/absen/{id}/hapus',[AbsenController::class,'destroy']);

Route::get('/cuti',[CutiController::class,'index']);
Route::get('/cuti/tambah',[CutiController::class,'create']);
Route::post('/cuti/simpan',[CutiController::class,'store']);
Route::get('/cuti/{id}/edit',[CutiController::class,'show']);
Route::post('/cuti/{id}/update',[CutiController::class,'update']);
Route::get('/cuti/{id}/hapus',[CutiController::class,'destroy']);

Route::get('/jadwal',[JadwalController::class,'index']);
Route::get('/jadwal/tambah',[JadwalController::class,'store']);
Route::get('/jadwal/{id}/edit',[JadwalController::class,'show']);
Route::post('/jadwal/{id}/update',[JadwalController::class,'update']);
Route::get('/jadwal/{id}/hapus',[JadwalController::class,'destroy']);

Route::get('/laporan',[LaporanController::class,'index']);
Route::get('/laporan/tambah',[LaporanController::class,'store']);
Route::get('/laporan/{id}/edit',[LaporanController::class,'show']);
Route::post('/laporan/{id}/update',[LaporanController::class,'update']);
Route::get('/laporan/{id}/hapus',[LaporanController::class,'destroy']);

?>