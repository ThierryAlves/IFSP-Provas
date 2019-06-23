<?php

namespace App\Http\Controllers;

use App\Alternativa;
use App\Resposta;
use App\Resultado;
use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function salvarResposta(Request $request) {

        $corretas = 0;

        foreach ($request->resposta as $questao => $alternativa) {
            $resultado = Alternativa::where([
                'id'         => $alternativa,
                'questao_id' => $questao,
                'correta'    => 1
            ])->first();

            if ($resultado) {
                $corretas++;
            }

            Resposta::create([
                'aluno_id' => 1,
                'prova_id'   => $request->idProva,
                'alternativa_id' => $alternativa,
                'correta' => $resultado == null ? 0 : true,
            ]);
        }


        Resultado::create([
            'aluno_id' => 1,
            'prova_id' => $request->idProva,
            'questoes_corretas' => $corretas,
        ]);

        return redirect('/aluno/provas');
    }
}
