<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function Inserir(Request $request) {
        $aluno = new Aluno();
        $aluno->nome = strtoupper($request->nome);
        $aluno->cpf = str_replace(['-','.'], '', $request->cpf);

        $aluno->save();

        return redirect('/professor/provas');
    }
}
