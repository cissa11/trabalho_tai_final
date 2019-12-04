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
Route::get('/clientes/editar/{id}','ClienteController@editar');
Route::get('/clientes/deletar/{id}','ClienteController@deletar');
Route::post('/clientes/buscar/','ClienteController@buscar');

Route::get('/filmes', 'FilmeController@listar');
Route::get('/filmes/cadastrar', 'FilmeController@cadastrar');
Route::post('/filmes/salvar/{id}', 'FilmeController@salvar');
Route::get('/filmes/editar/{id}','FilmeController@editar');
Route::get('/filmes/deletar/{id}','FilmeController@deletar');
Route::post('/filmes/buscar/','FilmeController@buscar');
