<?php

namespace App\Http\Controllers;

use App\ClienteModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\FilmeModel;

class ClienteController extends Controller
{
    public function listar()
    {
        $clientes = ClienteModel::orderBy('nome')->get();
        //        dd($clientes);
        return view('cliente')->with('clientes', $clientes);
    }

    public function cadastrar()
    {
        $filmes = FilmeModel::orderBy('nome')->get();
        //dd($filmes);

        return view('clienteCadastrar')->with('filmes', $filmes);
    }

    public function editar($id)
    {
        $cliente = ClienteModel::find($id);

        return view('clienteEditar')->with('cliente', $cliente);
    }

    public function salvar(Request $request, $id)
    {
        // INSERT
        if ($id == 0) {
            $objClienteModel = new ClienteModel();
            $objClienteModel->nome = $request->input('nome');
            $objClienteModel->filme = $request->input('filme');
            $objClienteModel->email = $request->input('email');
            $objClienteModel->save();
        } else {
            // UPDATE
            $objClienteModel = ClienteModel::find($id);
            $objClienteModel->nome = $request->input('nome');
            $objClienteModel->filme = $request->input('filme');
            $objClienteModel->email = $request->input('email');
            $objClienteModel->save();
        }
        return redirect()->action('ClienteController@listar');
    }

    public function deletar($id)
    {
        $cliente = ClienteModel::find($id);

        $cliente->delete();

        return redirect()->action('ClienteController@listar');

        //  return redirect()->route('clientes');
    }

    public function buscar(Request $request)
    {
        $nome = $request->input('nome');

        $query = DB::table('cliente');

        if (!empty($nome)) {
            $query->where('nome', 'like', '%' . $nome . '%');
        }

        $clientes = $query->orderBy('nome')->paginate(20);

        return view('cliente')->with('cliente', $clientes);
    }
}
