<?php


namespace App\Http\Controllers;

use App\Questao;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    public function index($id) {
        $questoes = Questao::where(['prova_id' => $id])->get();

        return view('professor.visualizar-questoes', compact('questoes'));
    }

    public function inserir(Request $request, $id) {

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
