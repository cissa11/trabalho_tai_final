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

    <form action="{{ action('ClienteController@buscar') }}" method="post">
        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">

        <label>Nome: </label><br>
        <input type="text" name="nome" ><br>
        <button type="submit" >Buscar</button>
    </form>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NOME DO CLIENTE</th>
            <th>FILME</th>
            <th>EMAIL</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($clientes as $dado)
            <tr>
                <td>{{ $dado->id }}</td>
                <td>{{ $dado->nome }}</td>
                <td>{{ $dado->filme}}</td>
                <td>{{ $dado->email }}</td>
                <td>
                    <a href="{{ action('ClienteController@editar',$dado->id)}}">Editar</a>
                    <a href="{{ action('ClienteController@deletar',$dado->id)}}">Deletar</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <br>
@stop
