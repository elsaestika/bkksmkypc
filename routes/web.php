<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestimoniController;

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

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'prosesloginadmin']);
Route::get('dashboard', [DashboardController::class,'index']);
Route::get('/logoutadmin', [AuthController::class, 'logoutadmin']);

//Alumni
    Route::get('alumni', [AlumniController::class, 'show']);
    Route::get('alumni/add', [AlumniController::class, 'add']);
    Route::post('alumni/create', [AlumniController::class, 'create']);
    Route::get('alumni/edit/{id}', [AlumniController::class, 'edit']);
    Route::post('alumni/update/{id}', [AlumniController::class, 'update']);
    Route::get('alumni/hapus/{id}', [AlumniController::class, 'delete']);
    Route::get('alumni/detail/{id}', [AlumniController::class, 'detail']);

    Route::get('lamar/loker/add/{id}', [UserController::class, 'add_lamaran']);
    Route::post('lamar/loker/create/{id}', [UserController::class, 'create_lamaran']);
    Route::get('loker', [UserController::class, 'loker']);
    Route::get('loker/detail/{id}', [UserController::class, 'detail']);
    // Route::post('create/lamaran/{id}', [UserController::class, 'create_lamaran']);
    Route::get('index/perusahaan', [UserController::class, 'index_perusahaan']);
    Route::get('add/perusahaan', [UserController::class, 'add_perusahaan']);
    Route::post('create/perusahaan', [UserController::class, 'create_perusahaan']);
    Route::get('add/loker', [UserController::class, 'add_loker']);
    Route::post('create/loker', [UserController::class, 'create_loker']);
//Perusahaan
    Route::get('perusahaan', [PerusahaanController::class, 'show']);
    Route::get('perusahaan/add', [PerusahaanController::class, 'add']);
    Route::post('perusahaan/create', [PerusahaanController::class, 'create']);
    Route::get('perusahaan/edit/{id}', [PerusahaanController::class, 'edit']);
    Route::post('perusahaan/update/{id}', [PerusahaanController::class, 'update']);
    Route::get('perusahaan/delete/{id}', [PerusahaanController::class, 'delete']);

    //lowongan
    Route::get('lowongan', [LowonganController::class, 'show']);
    Route::get('lowongan/add', [LowonganController::class, 'add']);
    Route::post('lowongan/create', [LowonganController::class, 'create']);
    Route::get('lowongan/edit/{id}', [LowonganController::class, 'edit']);
    Route::post('lowongan/update/{id}', [LowonganController::class, 'update']);
    Route::get('lowongan/delete/{id}', [LowonganController::class, 'delete']);
    Route::get('lowongan/detail/{id}', [LowonganController::class, 'detail']);

    //Lamaran
    Route::get('lamaran', [LamaranController::class, 'show']);
    Route::get('lamaran/add', [LamaranController::class, 'add']);
    Route::post('lamaran/create', [LamaranController::class, 'create']);


    Route::get('landingpage', [UserController::class, 'index']);
    Route::get('/loginalumni', [AuthController::class, 'loginalumni']);
    Route::post('/loginalumni', [AuthController::class, 'prosesloginalumni']);
    Route::get('/logoutalumni', [AuthController::class, 'logoutalumni']);

    Route::get('riwayat/perusahaan', [UserController::class,'riwayat_perusahaan']);
    Route::get('riwayat/lowongan', [UserController::class,'riwayat_lowongan']);

    //Admin
    Route::get('admin', [AdminController::class, 'show']);
    Route::get('admin/add', [AdminController::class, 'add']);
    Route::post('admin/create', [AdminController::class, 'create']);
    Route::get('profil', [UserController::class, 'profil']);
    Route::post('profil/update/{id}', [UserController::class, 'update_profil']);

    //testimoni
    Route::get('testimoni', [TestimoniController::class, 'show']);
    Route::get('testimoni/alumni', [TestimoniController::class, 'testimoni_alumni']);
    Route::get('testimoni/add', [TestimoniController::class, 'add']);
    Route::post('testimoni/create', [TestimoniController::class, 'create']);
    Route::get('testimoni/delete/{id}', [TestimoniController::class, 'delete']);


