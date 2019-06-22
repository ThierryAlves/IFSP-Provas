<?php


namespace App\Http\Controllers;

use App\Alternativa;
use Illuminate\Http\Request;

class AlternativaController extends Controller
{
    public function index($id) {
        $alternativas = Alternativa::where(['questao_id' => $id])->get();

        return view('professor.visualizar-alternativas', compact('alternativas'));
    }

    public function inserir(Request $request, $id) {

        $alternativas = $request->alternativas;
        foreach ($alternativas as $chave => $descricao) {
            $inserir = ['questao_id' => $id,'descricao' => $descricao];
            if ($chave == $request->alternativaCorreta) {
                $inserir['correta'] = 1;
            }
            Alternativa::create($inserir);
        }

        return redirect('/professor/alternativa/visualizar/'.$id);
    }
}
