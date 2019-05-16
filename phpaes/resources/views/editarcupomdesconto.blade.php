@extends('welcome')
@section('conteudo')

<form action="/admin/editarcupomdesconto/update/{{$cupom->idCupomDesconto}}" method="PUT">
    {!! method_field('PUT')!!}
    <input name="_token" type="hidden" value="{{ csrf_token() }}" /> 
        <h1>Editar cupom de desconto</h1>

        <div class="form-group"> 
            <label>Descrição:</label>
            <input name="valor" style="width:350px;font-size: 13px" class="form-control" value="{{$cupom->valor}}"/>
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
        <button class="" type="submit" style="float: left; margin: 5px;">Atualizar</button>  
        <button type="button" class="" style="float: left; margin: 5px;" onclick="window.location.href='/'">Voltar</button>
    </form>
@stop