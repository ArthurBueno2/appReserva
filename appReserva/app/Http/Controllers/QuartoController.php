<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;
use Illuminate\Http\Request;

class QuartoController extends Controller
{
    public function showFormularioQuarto(request $request){
        return view("formularioCadastroQuartos");
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request -> validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'float|required'
        ]);

        Quarto::create($dadosValidos);

        return Redirect::route('home');

    }

}
