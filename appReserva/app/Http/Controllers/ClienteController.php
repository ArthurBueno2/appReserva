<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showHome(request $request){
        return view("home");
    }

    public function showFormularioCadastro(request $request){
        return view("formularioCadastroCliente");
    }

    public function cadCliente(Request $request){
        $dadosValidos = $request -> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        Cliente::create($dadosValidos);

        return Redirect::route('home');

    }
}