@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a>
                            <li class="breadcrumb-item active" aria-current="page">Adicionar</li>
                        </ol>
                    </nav>
                    <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                <div class="panel panel-body">
                    <form action="{{ route('telefone.salvar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do telefone">
                            @if( $errors->has('titulo') )
                            <span class="help-block">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('telefone') ? 'has-error' : '' }}">
                            <label for="telefone">Número</label>
                            <input type="texte" name="telefone" class="form-control" placeholder="Número de telefone">
                            @if( $errors->has('telefone') )
                            <span class="help-block">
                                <strong>{{ $errors->first('telefone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button class="btn btn-info">Adicionar</button>
                        <a class="btn btn-danger" href="{{ route('cliente.detalhe', $cliente->id) }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection