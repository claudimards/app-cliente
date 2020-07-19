@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.detalhe', $telefone->cliente->id) }}">Detalhe</a>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                    <p><b>Cliente: </b>{{ $telefone->cliente->nome }}</p>
                <div class="panel panel-body">
                    <form action="{{ route('telefone.atualizar', $telefone->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group {{ $errors->has('titulo') ? 'has-error' : '' }}">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do telefone"
                                value="{{ $telefone->titulo }}"
                            >
                            @if( $errors->has('titulo') )
                            <span class="help-block">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('telefone') ? 'has-error' : '' }}">
                            <label for="telefone">Número</label>
                            <input type="texte" name="telefone" class="form-control" placeholder="Número de telefone"
                                value="{{ $telefone->telefone }}"
                            >
                            @if( $errors->has('telefone') )
                            <span class="help-block">
                                <strong>{{ $errors->first('telefone') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button class="btn btn-info">Atualizar</button>
                        <a class="btn btn-danger" href="{{ route('cliente.detalhe', $telefone->cliente->id) }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection