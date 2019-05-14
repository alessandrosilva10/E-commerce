<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\CupomDescontos;
use Validator;
use App\Http\Requests\CupomDescontoRequest;
//use Illuminate\Http\Request;

class CupomDescontoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cadastroDesconto(){
        return view('cadastroDesconto');
    }
   
    public function adiciona(CupomDescontoRequest $request){;
        CupomDescontos::create($request->all());
        return redirect('/listarcupomdesconto')->withInput();
    }

    public function listarCupomDesconto(){    
        $cupom = CupomDescontos::all();
        return view('cupomlist')->with('cupom', $cupom);
    }

    public function deletar($idCupomDesconto){  
        $cupom = CupomDescontos::where('idCupomDesconto', $idCupomDesconto);
        $cupom->delete();
        return redirect()->action('CupomDescontoController@listarCupomDesconto');         
    }

    public function alterar(CupomDescontoRequest $request, $idCupomDesconto){
        
      $cupom = CupomDescontos::find($idCupomDesconto);
      $cupom->valor = $request->valor;
      $cupom->save();

        return redirect()->action('CupomDescontoController@listarCupomDesconto'); 
    }
}

