<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PrincipalCursosController;


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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/login/registro' , [App\Http\Controllers\IndexController::class, 'create'])->name('create');
Route::post('/store' , [App\Http\Controllers\IndexController::class, 'store'])->name('store');

Route::get('/principalCursos', [App\Http\Controllers\PrincipalCursosController::class, 'principalCursos'])->name('principalCursos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
