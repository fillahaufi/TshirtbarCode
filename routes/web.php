<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [PagesController::class, 'home']);
Route::get('/harga', [PagesController::class, 'harga']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/riwayat', [PagesController::class, 'riwayat']);
Route::get('/profil', [PagesController::class, 'profil']);
Route::get('/custom', [PagesController::class, 'custom']);
Route::get('/checkout', [PagesController::class, 'checkout']);
Route::get('/transaksi', [PagesController::class, 'transaksi']);

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/manage', [AdminController::class, 'manage']);
Route::get('/payment', [AdminController::class, 'payment']);
Route::get('/request', [AdminController::class, 'request']);

Route::get('/supplier', [AdminController::class, 'supplier']);