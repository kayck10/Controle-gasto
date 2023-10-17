<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrarController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\DespesaController;
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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/autenticacao', [LoginController::class, 'autenticacao'])->name('login.autenticacao');




Route::middleware(['auth'])->group(function () {

    Route::get('/conta/create', [ContaController::class, 'create'])->name('conta.create');
Route::post('/conta/store', [ContaController::class, 'store'])->name('conta.store');
//Route::get('/conta/edit', [ContaController::class, 'edit'])->name('conta.edit');

Route::get('/index/usuario', [LoginController::class, 'index'])->name('index.usuario');

Route::get('/receita/create/{id}', [ReceitaController::class, 'create'])->name('receita.create');
Route::post('/receita/store/{id}', [ReceitaController::class, 'store'])->name('receita.store');
Route::get('/receita/edit/{id}', [ReceitaController::class, 'edit'])->name('receita.edit');
Route::put('/receita/update/{id}', [ReceitaController::class, 'update'])->name('receita.update');
Route::delete('/receita/destroy/{id}', [ReceitaController::class, 'destroy'])->name('receita.delete');


Route::get('/despesa/{id}', [DespesaController::class, 'create'])->name('despesa');
Route::post('/despesa/store/{id}', [DespesaController::class, 'store'])->name('despesa.store');
Route::get('despesa/edit/{id}', [DespesaController::class, 'edit'])->name('despesa.edit');
Route::put('despesa/update/{id}', [DespesaController::class, 'update'])->name('despesa.update');
Route::delete('/despesa/destroy/{id}', [DespesaController::class, 'destroy'])->name('despesa.delete');
});

Route::get('/', function () {
    return view('welcome');
});
