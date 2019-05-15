<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Produtos;
use App\Categorias;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adiciona(ProdutoRequest $request){;
        Produtos::create($request->all());
        return redirect('/listarproduto')->withInput();
    }

    public function cadastroProduto(){
        return view('cadastroproduto')->with('categorias', Categorias::all());
    }

    public function listarProduto(){    
        $produto = Produtos::all();
        return view('produtolist')->with('produto', $produto);
    }

    public function deletar($idProduto){  
        $produto = Produtos::where('idProduto', $idProduto);
        $produto->delete();
        return redirect()->action('ProdutoController@listarProduto');         
    }

}
