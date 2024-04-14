<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pag.login', function () {
    return view('pag/login');
})->name('pag.login');

Route::get('pag.cadastro', function () {
    return view('pag/cadastro');
})->name('pag.cadastro');

Route::post('/salvar-dados', [\App\Http\Controllers\FormularioController::class, 'salvarDados'])->name('salvar.dados');
Route::post('/login', [\App\Http\Controllers\loginController::class, 'login'])->name('login');








