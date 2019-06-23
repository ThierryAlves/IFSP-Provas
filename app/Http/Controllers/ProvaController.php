<?php

namespace App\Http\Controllers;

use App\Prova;
use Illuminate\Http\Request;
use App\Http\Requests\InserirProvaRequest;

class ProvaController extends Controller
{
    public function index() {
        $provas = Prova::with('questoes.alternativas')->get();

        return view('professor.provas', compact('provas'));
    }

    public function inserir(InserirProvaRequest $request) {
        $insert = $request->except('_token');
        $insert['professor_id'] = session()->get('id');
        Prova::create($insert);

        return redirect('/professor/provas');
    }

    public function find($id) {
        $provas = Prova::with('questoes')->where(['id' => $id])->get();

        return view('professor.adicionar-questoes', compact('provas'));
    }

    public function getprovasAluno() {
        $provas = Prova::with(['respostas', 'resultados'])->where('data_inicio','<=',now())->get();

        return view('aluno.provas', compact('provas'));
    }

    public function getProvaResponder($id) {
        $prova = Prova::with('questoes.alternativas')->where(['id' => $id])->first();

        return view('aluno.responder', compact('prova'));
    }
}
