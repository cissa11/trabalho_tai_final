<?php
/*
Route::get('/', function () {
    return '<h1>Olá mundo</h1>';
});
*/
Route::get('/', function () {
    return view("main");
});

Route::get('/clientes', 'ClienteController@listar');
Route::get('/clientes/cadastrar', 'ClienteController@cadastrar');
Route::post('/clientes/salvar/{id}', 'ClienteController@salvar');
