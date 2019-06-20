@extends('base')
@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="wrapper fadeInDown">
                <div id="formContent">
                    <form class="form-horizontal" method="POST" action="{{ url('/autenticar') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" required>
                        <input type="password" id="password" class="fadeIn third" name="password" placeholder="senha" required>
                        <input id="conectar" type="submit" class="fadeIn fourth" value="Conectar">
                    </form>
                    <div id="formFooter">
                        <a href="/cadastrar">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
