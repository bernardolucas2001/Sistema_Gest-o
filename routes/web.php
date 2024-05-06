<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProdutosController;
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
    return view('index');
});

Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    Route::get('/cadastrarProdutos', [ProdutosController::class, 'cadastrarProdutos'])->name('cadastrar.produto');
    Route::post('/cadastrarProdutos', [ProdutosController::class, 'cadastrarProdutos'])->name('cadastrar.produto');
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');

    Route::get('/atualizarProdutos/{id}', [ProdutosController::class, 'atualizarProdutos'])->name('atualizar.produto');
    Route::put('/atualizarProdutos/{id}', [ProdutosController::class, 'atualizarProdutos'])->name('atualizar.produto');

});

Route::prefix('produtos')->group(function(){
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    Route::get('/cadastrarProdutos', [ProdutosController::class, 'cadastrarProdutos'])->name('cadastrar.produto');
    Route::post('/cadastrarProdutos', [ProdutosController::class, 'cadastrarProdutos'])->name('cadastrar.produto');
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');

    Route::get('/atualizarProdutos/{id}', [ProdutosController::class, 'atualizarProdutos'])->name('atualizar.produto');
    Route::put('/atualizarProdutos/{id}', [ProdutosController::class, 'atualizarProdutos'])->name('atualizar.produto');

});

Route::prefix('clientes')->group(function(){
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
    Route::get('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente');
    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete');

    Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente');

});
