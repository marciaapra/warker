<?php

namespace App\Services;

use App\Contracts\CidadeContract;
use App\Http\Resources\CidadeResource;
use App\Models\Cidade;

class CidadeService implements CidadeContract
{
    public $id;
    public $request;

    public function __construct()
    {
        //
    }

    // Incluir registro
    public function incluir()
    {
        $cidade = new Cidade();
        $cidade->fill($this->request);
        $cidade->save();

        return $cidade;
    }

    // Editar registro
    public function editar()
    {
        $cidade = Cidade::findOrFail($this->id);
        $cidade->fill($this->request);
        $cidade->update();

        return $cidade;
    }

    // Listagem geral
    public function listar()
    {
        $cidade = Cidade::all();

        return CidadeResource::collection($cidade);
    }

    // Detalhar registro
    public function detalhar()
    {
        $cidade = Cidade::findOrFail($this->id);

        return CidadeResource::make($cidade);
    }

    //Exclui o registro
    public function excluir()
    {
        $cidade = Cidade::where('id', $this->id)->firstOrFail();

        return $cidade->delete();
    }
}
