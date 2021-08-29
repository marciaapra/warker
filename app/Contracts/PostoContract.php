<?php

namespace App\Contracts;

interface PostoContract
{
    public function incluir();
    public function editar();
    public function listar();
    public function detalhar();
    public function excluir();
}
