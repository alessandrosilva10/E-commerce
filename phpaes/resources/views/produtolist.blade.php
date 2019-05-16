@extends('welcome')

@section('conteudo')
            <br><br>
            <h1> Listagem de Produtos</h1>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID do Produto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Data do Registro</th>
                            <th scope="col">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($produto as $p)
                        <tr class="{{ $p->valor < 51 ? 'table table-danger' : ''}}">
                            <td>{{ $p->idProduto }}</td> 
                            <td>{{ $p->nome }}</td> 
                            <td>{{ $p->descricao }}</td>
                            <td>{{ $p->preco}}</td> 
                            <td>{{ $p->dataRegistro }}</td> 
                            <td>{{ $p->ca->descricao }}</td>  
                            <td>
                                <a href="/cadastroproduto/deletar/{{ $p->idProduto }}">
                                        <i class="fas fa-trash"></i>
                                </a>
                            </td>   
                            <td>
                                <a href="/admin/editarproduto/{{ $p->idProduto }}/editar">
                                        <i class="far fa-edit"></i>
                                </a>
                            </td>                     
                        </tr>
                        @endforeach
                    </tbody>    
                </table>

                @if(old('nome')) <!--withInput-->
                    <div class="alert alert-success">
                        Produto {{old('nome')}} adicionado com sucesso!
                    </div>
                @endif

                <button type="button" class="btn btn-outline-primary" style="float: left;" onclick="window.location.href='/admin/cadastrarproduto'">
                    Adicionar Produto
                </button>
            </div>    
@stop
