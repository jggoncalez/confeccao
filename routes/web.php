<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EstoqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');

Route::get('/funcionario/pedidos', [PedidoController::class, 'pedidos'])->name('funcionario.pedidos');

Route::get('/funcionario/produtos', [ProdutoController::class, 'produtos'])->name('funcionario.produtos');

Route::get('/funcionario/fornecedor', [FornecedorController::class, 'fornecedores'])->name('funcionario.fornecedor');

Route::get('/funcionario/estoque', [EstoqueController::class, 'estoques'])->name('funcionario.estoque');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
