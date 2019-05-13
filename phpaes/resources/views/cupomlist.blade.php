@extends('welcome')

@section('conteudo')
            <br><br>
            <h1> Listagem de Cupons Cadastrados</h1>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Valor</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cupom as $c)
                        <tr class="{{ $c->valor < 51 ? 'table table-danger' : ''}}">
                            <td>{{ $c->valor}}</td>     
                            <td>
                                <a href="/cadastrodesconto/deletar/{{ $c->idCupomDesconto }}">
                                        <i class="fas fa-trash"></i>
                                </a>
                            </td>   
                            <td>
                                <a href="/cadastrodesconto/alterar/{{ $c->idCupomDesconto }}">
                                        <i class="far fa-edit"></i>
                                </a>
                            </td>                     
                        </tr>
                        @endforeach <!-- precisa do .blade -->
                    </tbody>    
                </table>

                @if(old('valor')) <!--withInput-->
                    <div class="alert alert-success">
                        Produto {{old('valor')}} adicionado com sucesso!
                    </div>
                @endif

                <button type="button" class="btn btn-outline-primary" style="float: left;" onclick="window.location.href='/admin/cadastrardesconto'">
                    Adicionar Cupom de Desconto
                </button>
            </div>    
@stop
