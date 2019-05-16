<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorias;
use Validator;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editar($idCategoria){
        $categoria = Categorias::where('idCategoria', $idCategoria)->first();
        return view('editarcategoria')->with('categoria', $categoria);
    }

    public function update(CategoriaRequest $request, $idCategoria){
        $dados = $request->all();
        $categoria = Categorias::find($idCategoria);
        $update = $categoria->update($dados);
        
        return redirect('/listarcategoria')->withInput();
    }

    public function adiciona(CategoriaRequest $request){;
        Categorias::create($request->all());
        return redirect('/listarcategoria')->withInput();
    }

    public function cadastroCategoria(){
        return view('cadastrocategoria');
    }

    public function listarCategoria(){    
        $categoria = Categorias::all();
        return view('categorialist')->with('categoria', $categoria);
    }

    public function deletar($idCategoria){  
        $categoria = Categorias::where('idCategoria', $idCategoria);
        $categoria->delete();
        return redirect()->action('CategoriaController@listarCategoria');         
    }
}
