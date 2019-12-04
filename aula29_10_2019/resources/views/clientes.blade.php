@extends('principal')

<a href="{{ url('/') }}">Home</a>
@section('cabecalho')
    <h2>
        <img src=" {{ url('/img/usuario.png') }}"> &nbsp; Clientes Cadastrados
    </h2>
@stop

@section('conteudo')
    <a href="{{ action('ClienteController@cadastrar') }}" type="button">
        <b>Cadastrar Novo Cliente</b>
    </a>
    <br>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME DO CLIENTE</th>
            <th>FILME</th>
            <th>EVENTOS</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $dados)
            <tr>
                <td>{{ $dados->id }}</td>
                <td>{{ $dados->nome }}</td>
                <td>{{ $dados->filme }}</td>

        @endforeach
        </tbody>
    </table>
    <br>
    <br>
@stop
