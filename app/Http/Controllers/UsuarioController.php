<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class UsuarioController extends Controller {

    public function login(LoginRequest $request) {
        return 'Testando chamada';
    }

    public function inserir(Request $request) {
        Usuario::create($request->all());
        return view('controle-acesso.login');
    }
}
