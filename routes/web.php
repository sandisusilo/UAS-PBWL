<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);

Route::get('/pasien', [App\Http\Controllers\PasienController::class, 'index']);
Route::get('/pasien/create', [App\Http\Controllers\PasienController::class, 'create']);
Route::post('/pasien', [App\Http\Controllers\PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [App\Http\Controllers\PasienController::class, 'edit']);
Route::patch('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'update']);
Route::delete('/pasien/{id}', [App\Http\Controllers\PasienController::class, 'destroy']);

Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index']);
Route::get('/obat/create', [App\Http\Controllers\ObatController::class, 'create']);
Route::post('/obat', [App\Http\Controllers\ObatController::class, 'store']);
Route::get('/obat/edit/{id}', [App\Http\Controllers\ObatController::class, 'edit']);
Route::patch('/obat/{id}', [App\Http\Controllers\ObatController::class, 'update']);
Route::delete('/obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy']);

Route::get('/redis', [App\Http\Controllers\RedisController::class, 'index']);
Route::get('/redis/create', [App\Http\Controllers\RedisController::class, 'create']);
Route::post('/redis', [App\Http\Controllers\RedisController::class, 'store']);
Route::get('/redis/edit/{id}', [App\Http\Controllers\RedisController::class, 'edit']);
Route::patch('/redis/{id}', [App\Http\Controllers\RedisController::class, 'update']);
Route::delete('/redis/{id}', [App\Http\Controllers\RedisController::class, 'destroy']);
