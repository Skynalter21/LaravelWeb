<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', HomeController::class);

Route::get('produtos/inserir', [ProdutosController::class,'create'] );

Route::get('produtos/{nome}/{valor?}', [ProdutosController::class,'show'] );

Route::get('produtos', [ProdutosController::class,'index'] );




