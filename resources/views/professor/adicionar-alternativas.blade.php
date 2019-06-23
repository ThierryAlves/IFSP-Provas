@extends('base')
@section('assets')
<link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{ URL::asset('js/provas/alternativas.js') }}"></script>
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
        <form class="form-horizontal" method="POST" action="{{ url('professor/alternativa/salvar/' . $questao[0]->id) }}">
            <input type="hidden" name="idProva" value="{{$questao[0]->prova_id}}">
            @csrf
            <div class="d-flex justify-content-center">
                <h2>{{$questao[0]->descricao}}</h2>
            </div>
            <div class="alternativas">
                <div class="container">
                </div>
            </div>
            <button class="add_alternativas btn btn-info">Nova alternativa</button>
            <button type="submit" class="btn btn-success" value="Salvar">Salvar alternativa</button>
        </form>
    </div>
</div>
@endsection
