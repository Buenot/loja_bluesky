<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|------------------------------------------------- -------------------------
| Rotas do console
|------------------------------------------------- -------------------------
|
| Este arquivo é onde você pode definir todo o seu console baseado em Closure
| comandos. Cada Closure está vinculado a uma instância de comando permitindo um
| abordagem simples para interagir com os métodos de E/S de cada comando.
|
*/
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
