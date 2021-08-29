<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\PostoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Cidade
Route::prefix('cidade')->group(function () {
    Route::post('/', [CidadeController::class, 'incluir']);
    Route::put('/{id}', [CidadeController::class, 'editar']);
    Route::get('/', [CidadeController::class, 'listar']);
    Route::get('/{id}', [CidadeController::class, 'detalhar']);
    Route::delete('/{id}', [CidadeController::class, 'excluir']);
});

// Posto
Route::prefix('posto')->group(function () {
    Route::post('/', [PostoController::class, 'incluir']);
    Route::put('/{id}', [PostoController::class, 'editar']);
    Route::get('/', [PostoController::class, 'listar']);
    Route::get('/{id}', [PostoController::class, 'detalhar']);
    Route::delete('/{id}', [PostoController::class, 'excluir']);
});