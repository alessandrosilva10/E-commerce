@extends('welcome')
@section('conteudo')

<form action="/cadastrarproduto/adiciona" method="POST">      
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="card border-primary mb-12" style="max-width: 150rem;">
        <div class="card-header">Cadastro de Produtos</div>
         <div class="card-body text-primary">
         <h5 class="card-title"></h5>
         <div class="form-group"> 
            <label>Nome:</label>
            <input name="nome" style="width:600px;font-size: 13px" class="form-control"/>
        </div> 
        <div class="form-group">
            <label>Descrição:</label>
            <br>
            <textarea name="descricao" id="" cols="85" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
            <br>
            <div class="form-group">
            <select name="idCategoriaFk" class="form-control">
                 @foreach ($categorias as $c)
                 <option value="{{ $c->idCategoria }}"> {{ $c->descricao }}</option>   
                 @endforeach
            </select>

        </div>
        <div class="form-group">
            <label>Upload da imagem:</label>
            <br>
            <input type="file" name="imagem"/>
        </div>
        <div class="form-group">
            <label>Preço:</label>
            <input name="preco" style="width:150px;font-size: 13px" class="form-control"/>
        </div>
        @foreach($errors->all() as $error)
            @if(isset($error))
            <div class="alert alert-danger">
                <ul>  
                    <li>{{$error}}</li>                   
                </ul>
            </div>
            @endif
        @endforeach
        <button class="" type="submit" style="float: left; margin: 5px;">Cadastrar</button>  
        <button type="button" class="" style="float: left; margin: 5px;" onclick="window.location.href='/'">Voltar</button>
        </form>
        </div>
    </div> 
@stop