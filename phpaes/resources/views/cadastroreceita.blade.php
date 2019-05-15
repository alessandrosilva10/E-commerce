@extends('welcome')
@section('conteudo')
                
<form action="/cadastrarreceita/adiciona" method="POST">      
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    <div class="card border-primary mb-12" style="max-width: 150rem;">
        <div class="card-header">Cadastro de Receita</div>
         <div class="card-body text-primary">
         <h5 class="card-title"></h5>
         <div class="form-group"> 
         <label>Usuário:</label>
            <br>
            <div class="form-group">
            <select name="idUsuarioFk" class="form-control">
                    <option value="{{ Auth::user()->id }}"> {{ Auth::user()->name }}</option>   
            </select>
        </div>
            <label>Nome:</label>
            <input name="titulo" style="width:600px;font-size: 13px" class="form-control"/>
        </div> 
        <div class="form-group">
            <label>Preparo:</label>
            <br>
            <textarea name="preparo" id="" cols="85" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Ingredientes:</label>
            <br>
            <textarea name="ingredientes" id="" cols="85" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label>Upload da imagem:</label>
            <br>
            <input type="file" name="imagem"/>
        </div>
        <div class="form-group">
            <label>Aprovado:</label>
            <select name="aprovado" id="aprovado">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
            </select>
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
