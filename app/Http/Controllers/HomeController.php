<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\ProdutosController;

class HomeController extends Controller{
    public function __invoke()
    {   
        return view('home');
    }
   
}
