<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|------------------------------------------------- -------------------------
| Rotas de API
|------------------------------------------------- -------------------------
|
| Aqui é onde você pode registrar rotas de API para seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| é atribuído ao grupo de middleware "api". Divirta-se construindo sua API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
