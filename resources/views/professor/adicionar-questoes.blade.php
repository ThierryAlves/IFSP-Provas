@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ URL::asset('js/provas/questoes.js') }}"></script>
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
        <div class="container">
            <form class="form-horizontal" method="POST" action="{{ url('professor/questao/salvar/' . $provas[0]->id) }}">
                @csrf
                <div class="d-flex justify-content-center">
                    <h2>{{$provas[0]->descricao}}</h2>
                </div>
                <div class="questoes">
                    <div class="container">
                    </div>
                </div>
                <button class="add_questoes btn btn-info">Nova questão</button>
                <button type="submit" class="btn btn-success" value="Salvar">Salvar Questões</button>
            </form>
        </div>
    </div>
@endsection
