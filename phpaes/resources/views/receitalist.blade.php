@extends('welcome')

@section('conteudo')
            <br><br>
            <h1> Listagem de Pedidos</h1>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID da Receita</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Título</th>
                            <th scope="col">Preparo</th>
                            <th scope="col">Ingredientes</th>
                            <th scope="col">Aprovado</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($receita as $r)
                        <tr class="{{ $r->aprovado === 'nao' ? 'table table-danger' : ''}}">
                            <td>{{ $r->idReceita }}</td> 
                            <td>{{ $r->user->name }}</td> 
                            <td>{{ $r->titulo }}</td> 
                            <td>{{ $r->preparo }}</td>
                            <td>{{ $r->ingredientes}}</td> 
                            <td>{{ $r->aprovado }}</td> 
                            <td>
                                <a href="/cadastroreceita/deletar/{{ $r->idReceita }}">
                                        <i class="fas fa-trash"></i>
                                </a>
                            </td>   
                            <td>
                                <a href="/admin/editarreceita/{{ $r->idReceita }}/editar">
                                        <i class="far fa-edit"></i>
                                </a>
                            </td>                     
                        </tr>
                        @endforeach
                    </tbody>    
                </table>

                @if(old('receita')) <!--withInput-->
                    <div class="alert alert-success">
                        Receita {{old('receita')}} adicionado com sucesso!
                    </div>
                @endif

                <button type="button" class="btn btn-outline-primary" style="float: left;" onclick="window.location.href='/admin/cadastrarreceita'">
                    Adicionar Receita
                </button>
            </div>    
@stop
