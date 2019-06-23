<?php

namespace App\Http\Controllers;

use App\Alternativa;
use App\Resposta;
use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function salvarResposta(Request $request) {

        foreach ($request->resposta as $questao => $alternativa) {
            $resultado = Alternativa::where([
                'id' => $alternativa,
                'questao_id' => $questao,
                'correta' => 1
            ])->first();

            Resposta::create([
                'aluno_id' => 1,
                'alternativa_id' => $alternativa,
                'correta' => ($resultado == null ? 0 : true),
            ]);
        }

        return redirect('/aluno/provas');
    }
}
