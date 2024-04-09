<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//produto
Route::get('produtoIndex', [ProdutoController::class, 'Index']); 
Route::post('cadastrarProduto', [ProdutoController::class, 'store']); 


//Cliente
Route::get('clienteIndex', [ClienteController::class, 'Index']); 
Route::post('cadastrarCliente', [ClienteController::class, 'Store']); 