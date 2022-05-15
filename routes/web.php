<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtikelsController;
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

Auth::routes();

//USER
Route::get('/', [ArtikelController::class, 'index']);
Route::get('/home', [ArtikelController::class, 'index']);
Route::get('/edukasi', [ArtikelController::class, 'edukasi']);
Route::get('/kesehatan', [ArtikelController::class, 'kesehatan']);
Route::get('/otomotif', [ArtikelController::class, 'otomotif']);
Route::get('/sport', [ArtikelController::class, 'sport']);
Route::get('/teknologi', [ArtikelController::class, 'teknologi']);
Route::get('/artikel/read/{id}', [ArtikelController::class, 'read']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit']);
Route::put('/profile/update', [ProfileController::class, 'update']);

//ADMIN

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/register', [AdminController::class, 'addAdmin']);
Route::post('/admin/register/store', [AdminController::class, 'create']);

//CRUD ARTIKEL
Route::get('/admin/artikel', [ArtikelsController::class, 'index']);
Route::get('/admin/artikel/insert', [ArtikelsController::class, 'create']);
Route::post('/admin/artikel/add', [ArtikelsController::class, 'store']);
Route::delete('/admin/artikel/delete/{id}', [ArtikelsController::class, 'destroy']);
Route::get('/admin/artikel/edit/{id}', [ArtikelsController::class, 'edit']);
Route::put('/admin/artikel/update', [ArtikelsController::class, 'update']);

