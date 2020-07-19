@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                <div class="panel panel-body">
                    <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group {{ $errors->has('nome') ? 'has-error' : '' }}">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do cliente" value="{{ $cliente->nome }}">
                            @if($errors->has('nome'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nome') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail do cliente" value="{{ $cliente->email }}">
                            @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('endereco') ? 'has-error' : '' }}">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço do cliente" value="{{ $cliente->endereco }}">
                            @if($errors->has('endereco'))
                            <span class="help-block">
                                <strong>{{ $errors->first('endereco') }}</strong>
                            </span>
                            @endif
                        </div>
                        <button class="btn btn-info">Atualizar</button>
                        <a class="btn btn-danger" href="{{ route('cliente.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection