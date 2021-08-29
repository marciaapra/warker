<?php

namespace App\Http\Controllers;

use App\Http\Requests\CidadeRequest;
use Illuminate\Support\Facades\App;

class CidadeController extends Controller
{
    // Método de inclusão
    public function incluir(CidadeRequest $request)
    {
        $cidade = App::make('Cidade');
        $cidade->request = $request->all();
        return $cidade->incluir();
    }

    // Método de alteração
    public function editar($id, CidadeRequest $request)
    {
        $cidade = App::make('Cidade');
        $cidade->id = $id;
        $cidade->request = $request->all();
        return $cidade->editar();
    }

    // Método de listagem
    public function listar()
    {
        $cidade = App::make('Cidade');
        return $cidade->listar();
    }
    
    // Método de detalhar
    public function detalhar($id)
    {
        $cidade = App::make('Cidade');
        $cidade->id = $id;
        return $cidade->detalhar();
    }

    // Método de excluir
    public function excluir($id)
    {
        $cidade = App::make('Cidade');
        $cidade->id = $id;
        return $cidade->excluir();
    }
}
