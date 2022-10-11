<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LatihanController;

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
    return view('welcome');
});

Route::get('blogi', function(){
    return view('blog');
});


Route::get('mhs', [MhsController::class, 'index']);
Route::get('mahasiswa', [MahasiswaController::class,'index']);
//Route::get('biodata', [MahasiswaController::class,'biodata']);
Route::get('mhs/{nama}',[MhsController::class, 'getNama']);

Route::get('biodata', [MhsController::class, 'biodata']);
Route::post('biodata/proses',[MhsController::class, 'proses']);

Route::get('blog', [BlogController::class, 'index']);
Route::get('tentang', [BlogController::class, 'tentang']);
Route::get('kontak', [BlogController::class, 'kontak']);
Route::get('matematika',[LatihanController::class, 'index']);
Route::get('pangkat',[LatihanController::class, 'pangkat']);
