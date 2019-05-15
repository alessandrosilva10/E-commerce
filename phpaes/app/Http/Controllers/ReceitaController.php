<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReceitaRequest;
use Illuminate\Http\Request;
use App\Receitas;
use App\User;

class ReceitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adiciona(ReceitaRequest $request){;
        Receitas::create($request->all());
        return redirect('/listarreceita')->withInput();
    }

    public function cadastroReceita(){
        return view('cadastroreceita')->with('receitas', Receitas::all());
    }

    public function listarReceita(){    
        $receita= Receitas::all();
        return view('receitalist')->with('receita', $receita);
    }

    public function deletar($idReceita){  
        $receita = Receitas::where('idReceita', $idReceita);
        $receita->delete();
        return redirect()->action('ReceitaController@listarReceita');         
    }
}