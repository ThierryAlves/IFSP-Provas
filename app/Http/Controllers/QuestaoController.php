<?php


namespace App\Http\Controllers;

use App\Questao;
use App\Http\Requests\inserirQuestaoRequest;

class QuestaoController extends Controller
{
    public function index($id) {
        $questoes = Questao::where(['prova_id' => $id])->with('alternativas')->get();

        return view('professor.visualizar-questoes', compact('questoes'));
    }

    public function inserir(inserirQuestaoRequest $request, $id) {

        $dados = $request->questoes;
        foreach ($dados as $questao) {
            Questao::create(['prova_id' => $id, 'descricao' => $questao]);
        }

        return redirect('/professor/questao/visualizar/'.$id);
    }

    public function find($id) {
        $questao = Questao::find(['id' => $id]);

        return view('professor.adicionar-alternativas', compact('questao'));
    }
}
