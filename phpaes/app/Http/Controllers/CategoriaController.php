<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Categorias;
use Validator;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function adiciona(CategoriaRequest $request){;
        Categorias::create($request->all());
        return redirect('/')->withInput();
    }
    //Route::post('/cadastrarcategoria/adiciona', 'CategoriaController@adiciona');
    public function cadastroCategoria(){
        return view('cadastrocategoria');
    }
}
