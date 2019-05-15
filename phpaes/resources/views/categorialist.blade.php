@extends('welcome')

@section('conteudo')
            <br><br>
            <h1> Listagem de Cupons Cadastrados</h1>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categoria as $c)
                        <tr class="{{ $c->descricao < 51 ? 'table table-danger' : ''}}">
                            <td>{{ $c->descricao}}</td>   
                            <td>{{ $c->dataRegistro}}</td>   
                            <td>
                                <a href="/cadastrocategoria/deletar/{{ $c->idCategoria }}">
                                        <i class="fas fa-trash"></i>
                                </a>
                            </td>   
                            <td>
                                <a href="/cadastrocategoria/alterar/{{ $c->idCategoria }}">
                                        <i class="far fa-edit"></i>
                                </a>
                            </td>                     
                        </tr>
                        @endforeach <!-- precisa do .blade -->
                    </tbody>    
                </table>

                @if(old('descricao')) <!--withInput-->
                    <div class="alert alert-success">
                        Categoria {{old('descricao')}} foi adicionado com sucesso!
                    </div>
                @endif

                <button type="button" class="btn btn-outline-primary" style="float: left;" onclick="window.location.href='/admin/cadastrarcategoria'">
                    Adicionar Categoria
                </button>
            </div>    
@stop
