<?php

use Illuminate\Support\Facades\Route;
use App\Http\API\ArtikelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('artikels', [ArtikelController::class, 'index']);
Route::get('artikels/get/{id}', [ArtikelController::class, 'show']);
Route::post('artikels/store', [ArtikelController::class, 'store']);
Route::put('artikels/update/{id}', [ArtikelController::class, 'update']);
Route::delete('artikels/delete/{id}', [ArtikelController::class, 'delete']);