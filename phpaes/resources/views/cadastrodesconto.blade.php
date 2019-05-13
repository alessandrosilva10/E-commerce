@extends('welcome')
@section('conteudo')

    <form action="/cadastrodesconto/adiciona" method="POST">
        
    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
    
        <h1><center>Cadastro de cupom de desconto</center></h1>

        <div class="form-group"> 
            <label>Valor:</label>
            <input name="valor" style="width:150px;font-size: 13px" class="form-control"/>
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

        <button class="btn btn-primary" type="submit" style="float: left; margin: 5px;">Cadastrar Cupom</button>  
        <button type="button" class="btn btn-warning" style="float: left; margin: 5px;" onclick="window.location.href='/'">Voltar</button>
    </form>

@stop