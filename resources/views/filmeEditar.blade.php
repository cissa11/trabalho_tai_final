@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
    <a href="/Filmes">
        <img src=" {{ url('/img/filme.png') }}">
    </a>
    &nbsp;Editar Filme
    </div>
@stop

@section('conteudo')

    <form action="{{ action('FilmeController@salvar', $filme->id) }}" method="POST">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome: </label>
        <input type="text" name="nome" value="{{$filme->nome}}" class="form-control">
        <br>
        <label>Gênero: </label>
        <input type="text" name="genero" value="{{$filme->abreviatura}}" class="form-control">
        <br>
        <button type="submit" class="btn btn-success btn-block">Salvar</button>
    </form>
@stop
