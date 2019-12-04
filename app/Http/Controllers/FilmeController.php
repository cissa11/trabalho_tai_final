<?php

namespace App\Http\Controllers;

use App\FilmeModel;
use Request;

class FilmeController extends Controller
{

    public function listar()
    {

        $filmes = FilmeModel::orderBy('nome')->get();
        return view('filme')->with('filmes', $filmes);
    }

    public function cadastrar()
    {
        return view('filmeCadastrar');
    }

    public function salvar($id)
    {
        // INSERT
        if ($id == 0) {
            $objFilmeModel = new FilmeModel();
            $objFilmeModel->nome = mb_strtoupper(Request::input('nome'), 'UTF-8');
            $objFilmeModel->genero = mb_strtoupper(Request::input('genero'), 'UTF-8');
            $objFilmeModel->save();
        } // UPDATE
        else {
            $objFilmeModel = FilmeModel::find($id);
            $objFilmeModel->nome = mb_strtoupper(Request::input('nome'), 'UTF-8');
            $objFilmeModel->genero = mb_strtoupper(Request::input('genero'), 'UTF-8');
            $objFilmeModel->save();
        }

        return redirect()->action('FilmeController@listar')->withInput();
    }

    public function editar($id)
    {

        $filme = FilmeModel::find($id);

        if (empty($curso)) {
            return "<h2>[ERRO]: Filme não encontrado para o ID=" . $id . "!</h2>";
        }
        return view('filmeEditar')->with('filme', $filme);
    }

    public function remover($id)
    {

        $objFilmeModel = FilmeModel::find($id);

        if (empty($objFilmeModel)) {
            return "<h2>[ERRO]: Filme não encontrado para o ID=" . $id . "!</h2>";
        }
        $objFilmeModel->delete();

        return redirect()->action('FilmeController@listar')->withInput();
    }

}
