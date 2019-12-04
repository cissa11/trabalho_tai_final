@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
<h2>
    <img src=" {{ url('/img/filme.png') }}"> &nbsp; Filmes Cadastrados
</h2>
@stop

@section('conteudo')
<a href="{{ action('FilmeController@cadastrar') }}" type="button">
    <b>Cadastrar Novo Filme</b>
</a>
<br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME DO FILME</th>
            <th>GENERO</th>
            <th>EVENTOS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($filmes as $dados)
        <tr>
            <td>{{ $dados->id }}</td>
            <td>{{ $dados->nome }}</td>
            <td>{{ $dados->genero }}</td>
            <td>
                <a href="{{ action('FilmeController@editar', $dados->id) }}">Editar</span></a>
                &nbsp;
                <a href="{{ action('FilmeController@remover', $dados->id) }}">Remover</span></a>
            </td>

            @endforeach
    </tbody>
</table>
<br>
@stop
