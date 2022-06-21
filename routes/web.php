<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

//PAGINAS DO SITE | PASTA LAYOULT
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [ProductsController::class, 'blusas']);
Route::get('/products', [ProductsController::class, 'blazers']);
Route::get('/privacy', [PrivacyController::class, 'privacy']);

//PAINEL DE CONTROLE | PASTA ADMIN
Route::get('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);