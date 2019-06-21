<?php

namespace App\Http\Controllers;

use App\Prova;
use Illuminate\Http\Request;
use App\Http\Requests\InserirProvaRequest;

class ProvaController extends Controller
{
    public function index() {
        $provas = Prova::all();
        return view('professor.provas', ['provas' => $provas]);
    }

    public function inserir(InserirProvaRequest $request) {
        $insert = $request->except('_token');
        $insert['professor_id'] = session()->get('id');
        Prova::create($insert);

        return redirect('/professor/provas');
    }
}
