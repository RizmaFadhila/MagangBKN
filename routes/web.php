<?php

use App\Http\Controllers\PengetahuanController;
use App\Http\Controllers\PeraturanController;
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
    return view('homeUser');
});

Route::resource('peraturan', PeraturanController::class);
Route::resource('pengetahuan', PengetahuanController::class);
