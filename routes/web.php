<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
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
Route::get('/', [App\Http\Controllers\ArtikelController::class, 'index']);
Route::get('/home', [App\Http\Controllers\ArtikelController::class, 'index']);
Route::get('/artikel/read/{id}', [App\Http\Controllers\ArtikelController::class, 'read']);
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'update']);

//ADMIN
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::get('/admin/register', [App\Http\Controllers\Admin\AdminController::class, 'addAdmin']);
Route::post('/admin/register/store', [App\Http\Controllers\Admin\AdminController::class, 'create']);
//CRUD ARTIKEL
Route::get('/admin/artikel', [App\Http\Controllers\Admin\ArtikelsController::class, 'index']);
Route::get('/admin/artikel/insert', [App\Http\Controllers\Admin\ArtikelsController::class, 'create']);
Route::post('/admin/artikel/add', [App\Http\Controllers\Admin\ArtikelsController::class, 'store']);
Route::delete('/admin/artikel/delete/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'destroy']);
Route::get('/admin/artikel/edit/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'edit']);
Route::put('/admin/artikel/update', [App\Http\Controllers\Admin\ArtikelsController::class, 'update']);

