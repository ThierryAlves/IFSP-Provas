<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Http\Requests\inserirAlunoRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AlunoController extends Controller
{
    public function inserir(inserirAlunoRequest $request) {
        $aluno = new Aluno();
        $aluno->nome = strtoupper($request->nome);
        $aluno->cpf = str_replace(['-','.'], '', $request->cpf);

        $aluno->save();

        return redirect('/professor/provas');
    }

    public function login(Request $request) {
        try {
            $aluno= Aluno::where([
                'cpf' => str_replace(['-','.'], '', $request->cpf),
            ])->firstOrFail();

            session(['id_aluno' => $aluno->id]);

            return redirect('/aluno/provas');
        }catch (ModelNotFoundException $e) {
            return redirect()->route('acesso-aluno')->withErrors(['msg' => 'CPF não cadastrado.']);
        }
    }
}
