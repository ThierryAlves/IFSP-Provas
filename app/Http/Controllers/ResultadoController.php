<?php

namespace App\Http\Controllers;

use App\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{

    public function getResultado($id) {
        $resultados = Resultado::with(['aluno', 'prova.questoes'])->where('prova_id', '=', $id)->get();

        return view('professor.resultado', compact('resultados'));
    }
}
