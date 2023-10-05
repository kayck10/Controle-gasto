<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrarController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\ReceitaController;
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

Route::get('registra/create', [RegistrarController::class, 'create'])->name('registrar.create');
Route::post('registra/store/', [RegistrarController::class, 'store'])->name('registrar.store');

Route::get('/login/usuario', [LoginController::class, 'login'])->name('login.usuario');
Route::post('/login/autenticacao', [LoginController::class, 'autenticacao'])->name('login.autenticacao');

Route::get('/index/usuario', [LoginController::class, 'index'])->name('index.usuario');



Route::get('/', function () {
    return view('welcome');
});
