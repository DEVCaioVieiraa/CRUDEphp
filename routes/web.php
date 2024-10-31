<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/produtos/novo', [ProdutoController::class, 'create']);
Route::resource('produtos', ProdutoController::class);

Route::post('/produtos/novo', [ProdutoController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::get('/produtos/editar/{id}', [ProdutoController::class, 'edit']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::get('/produtos/delete/{id}', [ProdutoController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::resource('pedidos', PedidoController::class);
Route::get('/pedidos/novo', [PedidoController::class, 'create']);
Route::post('/pedidos/novo', [PedidoController::class, 'store'])->name('registrar_pedido');
Route::get('/pedidos/ver/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/editar/{id}', [PedidoController::class, 'edit']);
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::get('/pedidos/delete/{id}', [PedidoController::class, 'delete'])->name('pedidos.delete');
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');

