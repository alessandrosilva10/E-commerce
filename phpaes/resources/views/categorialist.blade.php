@extends('welcome')
@section('conteudo')
            <br><br>
            <h1> Listagem de Categorias Cadastrados</h1>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="">Descrição</th>
                            <th scope="col" style="">Data de Registro</th>
                            <th scope="col" style="width: 1px">Excluir</th>
                            <th scope="col" style="width: 1px">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categoria as $c)
                        <tr class="{{ $c->descricao }}">
                            <td>{{ $c->descricao}}</td>   
                            <td>{{ $c->dataRegistro}}</td>   
                            <td>
                                <a href="/cadastrocategoria/deletar/{{ $c->idCategoria }}">
                                        <i class="fas fa-trash"></i>
                                </a>
                            </td>   
                            <td>
                                <a href="/admin/editarcategoria/{{ $c->idCategoria }}/editar">
                                        <i class="far fa-edit"></i>
                                </a>
                            </td>                     
                        </tr>
                        @endforeach 
                    </tbody>    
                </table>

                @if(old('descricao')) <!--withInput-->
                    <div class="alert alert-success">
                        Categoria {{old('descricao')}} com sucesso!
                    </div>
                @endif

                <button type="button" class="btn btn-outline-primary" style="float: left;" onclick="window.location.href='/admin/cadastrarcategoria'">
                    Adicionar Categoria
                </button>
            </div>    
@stop
