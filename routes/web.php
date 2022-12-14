<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Use App\Http\Controllers\CatalogoController;
Use App\Http\Controllers\AdmController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('catalogos/buscar',[CatalogoController::class,'buscar']);
Route::resource('catalogos',CatalogoController::class);

Route::get('adms/buscar',[AdmController::class,'buscar']);
Route::resource('adms',AdmController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
