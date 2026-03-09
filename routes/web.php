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

Route::get('/funcionario/pedidos', [PedidoController::class, 'index'])->name('funcionario.pedidos.index');
Route::get('/funcionario/produtos', [ProdutoController::class, 'index'])->name('funcionario.produtos.index');
Route::get('/funcionario/fornecedor', [FornecedorController::class, 'index'])->name('funcionario.fornecedor.index');
Route::get('/funcionario/estoque', [EstoqueController::class, 'index'])->name('funcionario.estoque.index');

Route::get('/clientes/create', [ClienteController::class, 'create']) -> name('clientes.create');
Route::get('/funcionario/pedidos/create', [PedidoController::class, 'create'])->name('funcionario.pedidos.create');
Route::get('/funcionario/produtos/create', [ProdutoController::class, 'create'])->name('funcionario.produtos.create');
Route::get('/funcionario/fornecedor/create', [FornecedorController::class, 'create'])->name('funcionario.fornecedor.create');
Route::get('/funcionario/estoque/create', [EstoqueController::class, 'create'])->name('funcionario.estoque.create');
// Route::get('/clientes/edit', [ClienteController::class, 'edit']) -> name('clientes.edit');

Route::post('/clientes', [ClienteController::class, 'store'])->name('funcionario.clientes.store');
Route::post('/funcionario/pedidos', [PedidoController::class, 'store'])->name('funcionario.pedidos.store');
Route::post('/funcionario/produtos', [ProdutoController::class, 'store'])->name('funcionario.produtos.store');
Route::post('/funcionario/fornecedor', [FornecedorController::class, 'store'])->name('funcionario.fornecedor.store');
Route::post('/funcionario/estoque', [EstoqueController::class, 'store'])->name('funcionario.estoque.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
