<?php

namespace App\Services;

use App\Contracts\PostoContract;
use App\Http\Resources\PostoResource;
use App\Models\Posto;

class PostoService implements PostoContract
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
        $posto = new Posto();
        $posto->fill($this->request);
        $posto->save();

        return $posto;
    }

    // Editar registro
    public function editar()
    {
        $posto = Posto::findOrFail($this->id);
        $posto->fill($this->request);
        $posto->update();

        return $posto;
    }

    // Listagem geral
    public function listar()
    {
        $posto = Posto::all();

        return PostoResource::collection($posto);
    }

    // Detalhar registro
    public function detalhar()
    {
        $posto = Posto::findOrFail($this->id);

        return PostoResource::make($posto);
    }

    //Exclui o registro
    public function excluir()
    {
        $posto = Posto::where('id', $this->id)->firstOrFail();

        return $posto->delete();
    }
}
