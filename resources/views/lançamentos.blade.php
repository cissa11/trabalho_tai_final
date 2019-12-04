@extends('principal')

<a href="{{ url('/') }}">Home</a>

@section('cabecalho')
<h2>
    <img src=" {{ url('/img/lançamento.png') }}"> &nbsp; Lançamentos Cadastrados
</h2>
@stop

@section('conteudo')
<h3>As Branquelas 2</h3>
<h3>Animais Fantásticos 3</h3>
<br>
@stop
