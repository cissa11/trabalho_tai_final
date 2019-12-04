@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
<a href="/Filmes">
    <img src=" {{ url('/img/filme.png') }}" >
</a>
&nbsp;Cadastrar Novo Filme
</div>
@stop

@section('conteudo')

<form action="{{ action('FilmeController@salvar', 0) }}" method="POST">
    <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">

    <label>Nome: </label>
    <input type="text" name="nome" class="form-control">
    <br>
    <label>Gênero: </label>
    <input type="text" name="genero" class="form-control">
    <br>
    <button type="submit" class="btn btn-success btn-block">Salvar</button>
</form>
@stop
