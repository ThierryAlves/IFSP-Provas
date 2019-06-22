@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ URL::asset('js/mask.js') }}"></script>
@endsection
@section('main')
    @extends('navbar')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form class="form-horizontal" method="POST" action="{{ url('/professor/aluno/salvar') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="cpf" placeholder="CPF do aluno" name="cpf">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Nome do aluno" name="nome">
                </div>
            </div>
            <input class="btn btn-success" type="submit">
        </form>
    </div>
@endsection
