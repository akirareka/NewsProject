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

Route::get('/', function () {
    return view('home');
});

Route::get('/howtouse', function () {
    return view('howtouse');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index']);
Route::get('/artikel/read/{id}', [App\Http\Controllers\ArtikelController::class, 'read'])->name('artikel_read');
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::post('/admin/register', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('register_admin');
Route::get('/home/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('adminhome');
Route::get('/home/doctor', [App\Http\Controllers\HomeController::class, 'index_dokter'])->name('doctorhome');

Route::get('/admin/artikel', [App\Http\Controllers\Admin\ArtikelsController::class, 'index'])->name('admin.show.artikel');
Route::get('/admin/artikel/insert', [App\Http\Controllers\Admin\ArtikelsController::class, 'create'])->name('admin.add.artikel');
Route::post('/admin/artikel/add', [App\Http\Controllers\Admin\ArtikelsController::class, 'store'])->name('admin.insert.artikel');
Route::delete('/admin/artikel/delete/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'destroy'])->name('admin.artikel.destroy');
Route::get('/admin/artikel/edit/{id}', [App\Http\Controllers\Admin\ArtikelsController::class, 'edit'])->name('admin.artikel.edit');
Route::put('/admin/artikel/update', [App\Http\Controllers\Admin\ArtikelsController::class, 'update'])->name('admin.artikel.update');

Route::get('/selfhealing', [App\Http\Controllers\HomeController::class, 'selfhealing'])->name('selfhealing');
Route::get('/selfhealing/view', [App\Http\Controllers\HomeController::class, 'view_selfhealing'])->name('view.selfhealing');
Route::get('/selfhealing/view/2', [App\Http\Controllers\HomeController::class, 'view_selfhealing2'])->name('view.selfhealing2');
Route::get('/selfhealing/view/3', [App\Http\Controllers\HomeController::class, 'view_selfhealing3'])->name('view.selfhealing3');

Route::get('/konseling', [App\Http\Controllers\KonselingController::class, 'index'])->name('home.konseling');

Route::get('/profile/view/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.view');
Route::get('/profile/edit/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
