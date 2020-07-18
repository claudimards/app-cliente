@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Lista de Clientes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a class="btn btn-primary" href="{{ route('cliente.adicionar') }}">Adicionar</a>
                    </p>
                    
                    <table class="table table-bordered">
                        <thread>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>
                                    <a class="btn btn-light" href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a>
                                    <a class="btn btn-info" href="{{ route('cliente.editar', $cliente->id) }}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ?
                                        window.location.href='{{ route('cliente.deletar', $cliente->id) }}':
                                        window.location.href='{{ route('cliente.index') }}' )">Deletar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="row justify-content-center">
                        {!! $clientes->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection