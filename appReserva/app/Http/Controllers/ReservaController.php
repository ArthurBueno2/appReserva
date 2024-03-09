<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class ReservaController extends Controller
{
    public function showFormularioReserva(request $request){
        return view("formularioCadastroReservas");
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request -> validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'idquarto' => 'integer|required',
            'situacao' => 'enum|required',
            'datasaida' => 'date|required',
            'dataentrada' => 'timestamp|required',
        ]);

        Reserva::create($dadosValidos);

        return Redirect::route('home');

    }
}
