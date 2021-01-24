<?php

namespace Frota\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Frota\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/funcionarios', [UserController::class, 'lista']);
Route::get('/detalhe/{id}', [UserController::class, 'mostrar'])->name('visualiza_usuario');
Route::delete('/deletar/{id}',[UserController::class,'destroy'])->name('lista');
 //Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
