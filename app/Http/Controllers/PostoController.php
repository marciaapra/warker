<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostoRequest;
use Illuminate\Support\Facades\App;

class PostoController extends Controller
{
    // Método de inclusão
    public function incluir(PostoRequest $request)
    {
        $posto = App::make('Posto');
        $posto->request = $request->all();
        return $posto->incluir();
    }

    // Método de alteração
    public function editar($id, PostoRequest $request)
    {
        $posto = App::make('Posto');
        $posto->id = $id;
        $posto->request = $request->all();
        return $posto->editar();
    }

    // Método de listagem
    public function listar()
    {
        $posto = App::make('Posto');
        return $posto->listar();
    }
    
    // Método de detalhar
    public function detalhar($id)
    {
        $posto = App::make('Posto');
        $posto->id = $id;
        return $posto->detalhar();
    }

    // Método de excluir
    public function excluir($id)
    {
        $posto = App::make('Posto');
        $posto->id = $id;
        return $posto->excluir();
    }
}
