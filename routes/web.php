<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

//Route::get('/home/{user}', [\App\Http\Controllers\HomeController::class, 'show']);

// Route::get('/request', function (\Illuminate\Http\Request $request) {
//     $r = $request->();
//     dd($r);
//     return 'x';
// });

// Route::get('/user/{user}', [\App\Http\Controllers\UserController::class, 'show']);

// //Route::get('/user', [UseController::class, 'listUsers']);

// Route::get('/users/{id}', function ($id) {
//     return $id;
// });

// Route::get('/usuario/{user}', function (\App\Models\User $user) {
//     dd($user);
//     return $user;
// });
