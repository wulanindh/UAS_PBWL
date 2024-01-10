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

Route::get('/menu', [App\Http\Controllers\DaftarMenuController::class, 'index'])->name('menu');
Route::get('/menu/create', [App\Http\Controllers\DaftarMenuController::class, 'create']);
Route::post('/menu', [App\Http\Controllers\DaftarMenuController::class, 'store']);
Route::get('/menu/edit/{id}', [App\Http\Controllers\DaftarMenuController::class, 'edit']);
Route::patch('/menu/{id}', [App\Http\Controllers\DaftarMenuController::class, 'update']);
Route::delete('/menu/{id}', [App\Http\Controllers\DaftarMenuController::class, 'destroy']);
Route::get('/kategori', [App\Http\Controllers\KategoriMenuController::class, 'index'])->name('kategori');
Route::get('/kategori/create', [App\Http\Controllers\KategoriMenuController::class, 'create']);
Route::post('/kategori', [App\Http\Controllers\KategoriMenuController::class, 'store']);
Route::get('/kategori/edit/{id}', [App\Http\Controllers\KategoriMenuController::class, 'edit']);
Route::patch('/kategori/{id}', [App\Http\Controllers\KategoriMenuController::class, 'update']);
Route::delete('/kategori/{id}', [App\Http\Controllers\KategoriMenuController::class, 'destroy']);
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/user', [App\Http\Controllers\UserController::class, 'store']);
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::patch('/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'destroy']);

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::get('/order/create', [App\Http\Controllers\OrderController::class, 'create']);
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store']);
Route::get('/order/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit']);
Route::patch('/order/{id}', [App\Http\Controllers\OrderController::class, 'update']);
Route::delete('/order/{id}', [App\Http\Controllers\OrderController::class, 'destroy']);

Route::get('/list', [App\Http\Controllers\ListOrderController::class, 'index'])->name('list');
Route::get('/list/dapur', [App\Http\Controllers\ListOrderController::class, 'dapur'])->name('dapur');
Route::get('/list/create', [App\Http\Controllers\ListOrderController::class, 'create']);
Route::post('/list', [App\Http\Controllers\ListOrderController::class, 'store']);
Route::get('/list/edit/{id}', [App\Http\Controllers\ListOrderController::class, 'edit']);
Route::patch('/list/{id}', [App\Http\Controllers\ListOrderController::class, 'update']);
Route::delete('/list/{id}', [App\Http\Controllers\ListOrderController::class, 'destroy']);

Route::get('/bayar', [App\Http\Controllers\BayarController::class, 'index'])->name('bayar');
Route::get('/bayar/create', [App\Http\Controllers\BayarController::class, 'create']);
Route::post('/bayar', [App\Http\Controllers\BayarController::class, 'store']);
Route::get('/bayar/edit/{id}', [App\Http\Controllers\BayarController::class, 'edit']);
Route::patch('/bayar/{id}', [App\Http\Controllers\BayarController::class, 'update']);
Route::delete('/bayar/{id}', [App\Http\Controllers\BayarController::class, 'destroy']);



Route::get('/report', [App\Http\Controllers\ListOrderController::class, 'report'])->name('report');





