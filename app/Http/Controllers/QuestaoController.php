<?php


namespace App\Http\Controllers;

use App\Questao;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    public function inserir(Request $request, $id) {

        $dados = $request->questoes;
        foreach ($dados as $questao) {
            Questao::create(['prova_id' => $id, 'descricao' => $questao]);
        }

        return redirect('/professor/provas');
    }
}
