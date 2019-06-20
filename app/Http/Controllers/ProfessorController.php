<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class ProfessorController extends Controller {

    public function login(LoginRequest $request) {
        try {
            Professor::where([
                'email' => $request->input('email'),
                'senha' => md5($request->input('senha'))
            ])->firstOrFail();

            return view('welcome');
        }catch (ModelNotFoundException $e) {
            return redirect()->route('login')->withErrors(['msg' => 'Professor não encontrado']);
        }
    }

    public function inserir(Request $request) {
        $usuario = new Professor();
        $usuario->nome = strtoupper($request->input('nome'));
        $usuario->email = $request->input('email');
        $usuario->senha = md5($request->input('senha'));
        $usuario->save();
        return view('controle-acesso.login');
    }
}
