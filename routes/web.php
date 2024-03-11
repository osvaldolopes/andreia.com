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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy/policy', [PrivacyController::class, 'privacy'])->name('privacy.policy');
//PRODUCTS
       //O QUE E DIGITADO NA URI        CLASSE CONTROLE                     NOME DA ROTA   
Route::get('/products/blusas', [ProductsController::class, 'blusas'])->name('products.blusas');
Route::get('/products/blazers', [ProductsController::class, 'blazers'])->name('products.blazers');
Route::get('/products/bolsas', [ProductsController::class, 'bolsas'])->name('products.bolsas');
Route::get('/products/calcas', [ProductsController::class, 'calcas'])->name('products.calcas');
Route::get('/products/vestidos', [ProductsController::class, 'vestidos'])->name('products.vestidos');
Route::get('/products/academia', [ProductsController::class, 'academia'])->name('products.academia');

//PAINEL DE CONTROLE | PASTA ADMIN
Route::get('/login', [DashboardController::class, 'dashboard'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'login'])->name('dashboard');
Route::post('/do', [DashboardController::class, 'do'])->name('do');
