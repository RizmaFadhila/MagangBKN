<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengetahuanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PeraturanAdminController;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\MateriAdminController;
use App\Models\Kategori;
use App\Models\materimodel;
use App\Models\Peraturan;
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
    $kategori = Kategori::all();
    $peraturan = Peraturan::all();
    $materi = materimodel::latest('idmateri')->limit(1)->get();
    return view('homeUser', compact(['kategori', 'peraturan', 'materi']));
});

Route::get('peraturanUser', [PeraturanController::class, 'index'])->name('peraturanUser');
Route::resource('pengetahuan', PengetahuanController::class);
Route::get('showPeraturan', [PeraturanController::class, 'show']);
Route::get('/download/{dokumen}', [PeraturanController::class, 'download']);
Route::get('/view/{is}', [PeraturanController::class, 'view']);
Route::get('searchPeraturan', [PeraturanController::class, 'searchPeraturan']);
Route::get('/tampil/{is}', [PengetahuanController::class, 'tampil']);
Route::get('searchVideo', [PengetahuanController::class, 'searchVideo']);

//admin
Route::get('/login', [AuthController::class, 'index']);
Route::get('/registrasi', [AuthController::class, 'registrasi']);
Route::post('register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [AuthController::class, 'loginUser'])->name('login-user');
Route::get('/homeAdmin', function () {
    return view('halamanutama');
});
Route::controller(kategoricontroller::class)->group(function () {
    Route::get('kategori/index', 'index')->name('kategori');
    Route::get('kategori', 'index')->name('kategori');
});
Route::resource('kategori', kategoricontroller::class);
Route::resource('peraturanAdmin', PeraturanAdminController::class);
Route::controller(PeraturanAdminController::class)->group(function () {
    Route::get('peraturanAdmin', 'index')->name('peraturanAdmin');
});
Route::get('/download/{dokumen}', [PeraturanAdminController::class, 'download']);
Route::resource('materi', MateriAdminController::class);
Route::get('/update/{id}', [MateriAdminController::class, 'update']);
Route::get('/materi/destroy/{id}', 'App\Http\Controllers\MateriAdminController@destroy');