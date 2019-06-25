<?php

namespace App\Http\Controllers;

use App\Resultado;

class ResultadoController extends Controller
{

    public function find($id) {

        $resultados = Resultado::where(['prova_id' => $id])->with(['aluno','prova.questoes'])->get();

        return view('professor.estatisticas', compact('resultados'));
    }

    public function getResultado($id) {
        $resultados = Resultado::with(['aluno', 'prova.questoes'])->where('prova_id', '=', $id)->get();

        return view('professor.resultado', compact('resultados'));
    }
}
