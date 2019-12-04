@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
    <a href="/clientes">
        <img src=" {{ url('/img/usuario.png') }}" >
    </a>
    &nbsp;Cadastrar Novo Cliente
    </div>
@stop

@section('conteudo')

    <form action="{{ action('ClienteController@salvar', 0) }}" method="POST">
        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome: </label>
        <input type="text" name="nome" class="form-control">
        <br>
        <label>Filme: </label>
        <input type="text" name="filme" class="form-control">
        <br>
        <label>Email: </label>
        <input type="text" name="email" class="form-control">

        <br>
        <button type="submit" >Salvar</button>
    </form>
@stop

