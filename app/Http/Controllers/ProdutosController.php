<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index(){
        return view('produtos.index');
    }

    public function create(){
        return view('produtos.create');
    }
    public function show($nome, $valor){

        return view('produtos.show',['nome'=>$nome]);
        /*
        if($valor){
            return "o nome do produto eh $nome, e seu valor eh $valor";
        }else{
            "o nome do produto eh $nome!";
        }
        */
    }



   
}

