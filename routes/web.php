<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('cadastro',[CadastroController::class,'cadastro'])->name('cadastro.index');