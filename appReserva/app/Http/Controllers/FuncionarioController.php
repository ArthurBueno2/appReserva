<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showFormularioFuncionario(request $request){
        return view("formularioCadastroFuncionario");
    }

    public function cadFuncionario(Request $request){
        $dadosValidos = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        Funcionario::create($dadosValidos);

        return Redirect::route('home');

    }

}
