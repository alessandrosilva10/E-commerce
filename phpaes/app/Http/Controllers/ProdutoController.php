<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoRequest;
use App\Produtos;

class ProdutoController extends Controller
{
    public function adiciona(ProdutoRequest $request){;
        Produtos::create($request->all());
        return redirect('/listarcupom')->withInput();
    }

    public function cadastroProduto(){
        return view('cadastroproduto');
    }
}
