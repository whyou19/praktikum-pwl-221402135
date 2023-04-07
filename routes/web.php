<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

Route::get('/admin/dashboard', [AdminController::class,'index']);
Route::get('/admin/postingan', [AdminController::class,'show_postingan']);
Route::get('/admin/arsip', [AdminController::class,'show_arsip']);
Route::get('/admin/tentang', [AdminController::class,'show_tentang']);
Route::get('/admin/news', [AdminController::class,'show_news']);
Route::get('/admin/animal', [AdminController::class,'show_animal']);