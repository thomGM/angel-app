<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    roupasController,
    loginController,
    FormularioController,
    carrinhoController,
    CorreiosController
};

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
})->name('welcome');

Route::get('pag.login', function () {
    return view('pag/login');
})->name('pag.login');

Route::get('pag.cadastro', function () {
    return view('pag/cadastro');
})->name('pag.cadastro');

Route::get('pag.fotos', function () {
    return view('pag/fotos');
})->name('pag.fotos');

Route::get('pag.femininoCamisas', function () {
    return view('pag/femininoCamisas');
})->name('pag.femininoCamisas');

Route::get('/pag/carrinho', function () {
    return redirect()->route('carrinho.adicionar');
})->name('pag.carrinho');

Route::get('pag.dialoglogin', function () {
    return view('pag/dialoglogin');
})->name('pag.dialoglogin');

Route::get('/compra/{id}', [roupasController::class, 'compra'])->name('roupas.compra');
Route::post('/salvar-dados', [FormularioController::class, 'salvarDados'])->name('salvar.dados');
Route::post('/login', [loginController::class, 'login'])->name('login');
Route::post('/roupas', [roupasController::class, 'roupas'])->name('roupas');
Route::get('/roupas', [roupasController::class, 'femininoCamisas'])->name('roupas.femininoCamisas');
Route::get('/carrinho/adicionar', [carrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
Route::prefix('carrinho')->group(function() {
    Route::post('/excluir', [carrinhoController::class, 'excluir'])->name('carrinho.excluir');
    Route::post('/verifyLogin', [carrinhoController::class, 'verifyLogin'])->name('carrinho.verifyLogin');
    Route::post('/quant', [carrinhoController::class, 'quant'])->name('carrinho.quant');
    Route::post('/tamanho', [carrinhoController::class, 'tamanho'])->name('carrinho.tamanho');
});
Route::post('/correios/token', [CorreiosController::class, 'token'])->name('correios.token');






