<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index(){
        $produtos = Produto::orderby('id','desc')->paginate();
        return view('produtos.index',['produtos'=>$produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function insert(Request $request){
       $produto = new Produto();
       $produto->nome = $request->nome;
       $produto->valor = $request->valor;
       $produto->estoque = $request->estoque;
       $produto->descricao = $request->descricao;
       $produto->save();
       return redirect()->route('produtos');

    }

    public function editar(Request $request, Produto $produto){
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
        
     }

     public function delete(produto $produto){
        $produto->delete();
        return redirect()->route('produtos');
     }

     public function modal($id){
        $produtos = produto::orderby('id', 'desc')->paginate();
        return view('produtos.index', ['produtos' => $produtos, 'id' => $id]);

     }


    public function show($id){
        $produto = Produto::find($id);
        return view('produtos.show',['produto' => $produto]);

    }


    public function edit(Produto $produto){
        return view('produtos.edit',['produto' => $produto]);

    }




    /*public function show($nome, $valor = null){

        return view('produtos.show',['nome'=>$nome, 'valor' => $valor]);
        /*
        if($valor){
            return "o nome do produto eh $nome, e seu valor eh $valor";
        }else{
            "o nome do produto eh $nome!";
        }
        
    }*/



   
}

