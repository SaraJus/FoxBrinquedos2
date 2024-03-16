<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Cadastro;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }
}
