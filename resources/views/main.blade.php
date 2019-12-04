@extends('principal')

@section('cabecalho')
    <img src=" {{ url('/img/homep_ico.png') }}" >
    <h2>Menu Principal</h2><br>
@stop

@section('conteudo')
    <a href="/clientes"><img src="{{ url('/img/usuario.png') }}"></a>
    <!--<a href="/lançamentos"><img src="{{ url('/img/lançamento.png') }}"></a>-->
    <a href="/filmes"><img src="{{ url('/img/filme.png') }}"></a>
    <br><br>
@stop
