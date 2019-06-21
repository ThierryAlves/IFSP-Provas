<?php

namespace App\Http\Controllers;

use App\Http\Requests\cadastrarRequest;
use App\Professor;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class ProfessorController extends Controller {

    public function login(LoginRequest $request) {
        try {
            $professor = Professor::where([
                'email' => $request->input('email'),
                'senha' => md5($request->input('senha'))
            ])->firstOrFail();

            session(['id' => $professor->id]);

            return redirect('/professor/provas');
        }catch (ModelNotFoundException $e) {
            return redirect()->route('login')->withErrors(['msg' => 'Email ou senha inválido.']);
        }
    }

    public function inserir(cadastrarRequest $request) {
        $usuario = new Professor();
        $usuario->nome = strtoupper($request->input('nome'));
        $usuario->email = $request->input('email');
        $usuario->senha = md5($request->input('senha'));
        $usuario->save();
        return view('controle-acesso.login');
    }
}
