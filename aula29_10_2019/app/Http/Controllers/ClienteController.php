<?php

namespace App\Http\Controllers;

use App\ClienteModel;
use Request;

class ClienteController extends Controller
{
    public function listar()
    {
        $clientes = ClienteModel::orderBy('nome')->get();
//        dd($alunos);
        return view('clientes')->with('clientes', $clientes);
    }

    public function cadastrar()
    {
        return view('clienteCadastrar');
    }

    public function salvar($id)
    {
        // INSERT
        if ($id == 0) {
            $objClienteModel = new AlunoModel();
            $objClienteModel->nome = Request::input('nome');
            $objClienteModel->filme = Request::input('filme');
            $objClienteModel->email = Request::input('email');
            $objClienteModel->save();
        }
        return redirect()->action('ClienteController@listar');
    }

}
