<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        return "pagina de produtos";
    }

    public function create()
    {
        return "pagina de inserir produto";
    }
    public function show($nome, $valor)
    {
        
        if($valor){
            return "o nome do produto eh $nome, e seu valor eh $valor";
        }else{
            "o nome do produto eh $nome!";
        }
    }



   
}

