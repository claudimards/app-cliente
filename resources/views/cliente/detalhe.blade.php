@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalhe</li>
                    </ol>
                </nav>

                <div class="card-body">
                    <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                    <p><b>E-mail: </b>{{ $cliente->email }}</p>       
                    <p><b>Endereço: </b>{{ $cliente->endereco }}</p>    

                    <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Número</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cliente->telefones as $telefone)
                            <tr>
                                <th scope="row">{{ $telefone->id }}</th>
                                <td>{{ $telefone->titulo }}</td>
                                <td>{{ $telefone->telefone }}</td>
                                <td>
                                    <a class="btn btn-info" href="#">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ?
                                        window.location.href='#':
                                        window.location.href='#' )">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p>
                        <a class="btn btn-primary" href="{{ route('telefone.adicionar', $cliente->id) }}">Adicionar Telefone</a>
                    </p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection