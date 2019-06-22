@extends('base')
@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ URL::asset('js/mask.js') }}"></script>
@endsection
@section('main')
    <div class="flex-center position-ref">
        <div class="content">
            <div class="wrapper fadeInDown">
                <div class="fadeIn first">
                    <img src="{{ asset('img/ifsp.jpg')}}" id="logo" class="rounded-circle img-fluid" alt="Logo"/>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <div id="formContent">
                    <form class="form-horizontal" method="POST" action="{{ url('aluno/autenticar') }}">
                        @csrf
                        <input type="text" id="cpf" class="fadeIn second cpf" name="cpf" placeholder="cpf" required>
                        <input id="conectar" type="submit" class="fadeIn third" value="Conectar">
                    </form>
                    <div id="formFooter">
                        <a href="{{ url("professor/cadastrar") }}">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
