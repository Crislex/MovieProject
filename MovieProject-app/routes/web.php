<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', ProyectoController::class);
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes();

Route::resource('peliculas', App\Http\Controllers\PeliculaController::class)->middleware('auth');
Route::resource('alquilers', App\Http\Controllers\AlquilerController::class)->middleware('auth');
Route::resource('compras', App\Http\Controllers\CompraController::class)->middleware('auth');
//Route::resource('usuarios', App\Http\Controllers\UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
