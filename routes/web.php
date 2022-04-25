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
Route::get('/artikel/read/{id}', [App\Http\Controllers\ArtikelController::class, 'read'])->name('artikel_read');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.view');
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//ADMIN
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::post('/admin/register', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('register_admin');
Route::get('/admin/artikel', [App\Http\Controllers\Admin\ArtikelsController::class, 'index'])->name('admin.show.artikel');
Route::get('/admin/artikel/insert', [App\Http\Controllers\Admin\ArtikelsController::class, 'create'])->name('admin.add.artikel');
Route::post('/admin/artikel/add', [App\Http\Controllers\Admin\ArtikelsController::class, 'store'])->name('admin.insert.artikel');
Route::delete('/admin/artikel/delete/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'destroy'])->name('admin.artikel.destroy');
Route::get('/admin/artikel/edit/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'edit'])->name('admin.artikel.edit');
Route::put('/admin/artikel/update', [App\Http\Controllers\Admin\ArtikelsController::class, 'update'])->name('admin.artikel.update');



