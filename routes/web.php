<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KategoriController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [App\Http\Controllers\SettingController::class, 'index']);
Route::get('/kategori/{id}', [App\Http\Controllers\SettingController::class, 'kategori']);
Route::get('/detail/{id}', [App\Http\Controllers\SettingController::class, 'detail']);

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//backend
Route::resource('/admin/kategori', KategoriController::class)->middleware('auth');
